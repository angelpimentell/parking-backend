<?php

namespace App\Http\Controllers\Parking;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Parking\ParkingLevel;
use App\Http\Resources\Parking\ParkingLevelResource;

class ParkingLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parkingLevels = ParkingLevel::all();
        return new ParkingLevelResource($parkingLevels);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $parkingLevel = ParkingLevel::create($request->all());
        return new ParkingLevelResource($parkingLevel);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $parkingLevel = ParkingLevel::find($id);
        return new ParkingLevelResource($parkingLevel);
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
