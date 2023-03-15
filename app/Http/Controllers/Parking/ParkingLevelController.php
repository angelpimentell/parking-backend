<?php

namespace App\Http\Controllers\Parking;

use Illuminate\Http\Request;

use App\Http\Controllers\CrudController;
use App\Models\Parking\ParkingLevel;

class ParkingLevelController extends CrudController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ParkingLevel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ParkingLevel::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ParkingLevel::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return ParkingLevel::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ParkingLevel::find($id)->delete();
    }
}
