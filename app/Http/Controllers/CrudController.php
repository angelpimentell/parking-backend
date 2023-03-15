<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    /**
     * Respective model for controller
     */
    protected $model = null;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->model::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->model::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->model::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->model::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->model::find($id)->delete();
    }
}
