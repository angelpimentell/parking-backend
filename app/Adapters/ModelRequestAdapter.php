<?php

namespace App\Adapters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

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
     * Instance of model
     *
     * @var Model|null
     */
    protected mixed $modelInstance;

    /**
     * Table name of model
     *
     * @var string
     */
    private string $tableName;

    /**
     * Columns of table
     *
     * @var mixed
     */
    private mixed $columns;

    function __construct(string $model, Request $request)
    {
        $this->model = $model;
        $this->request = $request;

        $this->modelInstance = new $this->model;
        $this->tableName = $this->modelInstance->getTable();
        $this->columns = Schema::getColumnListing($this->tableName);

        $this->find_specific_columns();
    }

    private function get_type_of_table_columns()
    {
        $fieldTypes = [];

        foreach ($this->columns as $column) {
            $fieldType = Schema::getColumnType($this->tableName, $column);
            $fieldTypes[$column] = $fieldType;
        }

        return $fieldTypes;
    }

    function find_records_by_request_parameters()
    {
        $tableColumns = $this->get_type_of_table_columns();

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

    function find_specific_columns()
    {
        $filter_query = config('constants.filter_query');

        if ($this->request->query($filter_query['name']) == $filter_query['trueValue']) {
            $request_keys = array_keys($this->request->all());

            $this->modelInstance = $this->modelInstance->select(
                array_intersect($this->columns, $request_keys)
            );
        }
    }

}
