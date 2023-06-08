<?php

namespace App\Adapters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Builder;

use App\Constants;

class ModelRequestAdapter
{

    /**
     * Request received from controller.
     *
     * @var Request
     */
    protected Request $request;

    /**
     * Class name of model.
     *
     * @var string
     */
    protected string $model;

    /**
     * Instance of model.
     *
     * @var Builder|Model
     */
    protected Model|Builder $modelInstance;

    /**
     * Table name of model.
     *
     * @var string
     */
    private string $tableName;

    /**
     * Columns of table.
     *
     * @var array
     */
    private array $columns;

    function __construct(string $model, Request $request)
    {
        $this->model = $model;
        $this->request = $request;
        $this->modelInstance = new $this->model;
        $this->tableName = $this->modelInstance->getTable();

        $this->columns = Schema::getColumnListing($this->tableName);

        $this->find_specific_columns();
    }

    /**
     * Get table columns of model with their respective types.
     *
     * @return array
     */
    private function get_table_columns_with_types(): array
    {
        $fieldTypes = [];

        foreach ($this->columns as $column)
            $fieldTypes[$column] = Schema::getColumnType($this->tableName, $column);

        return $fieldTypes;
    }

    /**
     * Generate builder based on request fields.
     *
     * @return Builder|Model
     */
    function prepare_query(): Builder|Model
    {
        $tableColumns = $this->get_table_columns_with_types();

        $requestData = $this->request->all();

        foreach ($requestData as $key => $value) {
            if (!array_key_exists($key, $tableColumns) or $value == null) {
                continue;
            }

            $field_type = $tableColumns[$key];

            if ($field_type == 'string' or $field_type == 'text') {
                $this->modelInstance = $this->modelInstance->where($key, 'LIKE', $value . '%');
            } else {
                $this->modelInstance = $this->modelInstance->where($key, $value);
            }
        }

        return $this->modelInstance;
    }

    /**
     * Generate builder to find specifics columns based on
     * request fields if filter_columns param is 1.
     *
     * @return void
     */
    function find_specific_columns(): void
    {
        $filter_query = Constants::FILTER_QUERY;

        if ($this->request->query($filter_query['name']) == $filter_query['trueValue']) {
            $request_keys = array_keys($this->request->all());

            $this->modelInstance = $this->modelInstance->select(
                array_intersect($this->columns, $request_keys)
            );
        }
    }

    /**
     * Get pages to return in pagination.
     *
     * @return int
     */
    function get_pagination(): int
    {
        $per_page = $this->request->query('per_page') ?? Constants::DEFAULT_PAGINATION;

        if ($per_page > Constants::MAX_PAGINATION) {
            $per_page = Constants::MAX_PAGINATION;
        }

        return $per_page;
    }

}
