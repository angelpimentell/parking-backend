<?php

namespace App\Http\Controllers\Parking;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Parking\ParkingSpace;
use App\Http\Resources\Parking\ParkingSpaceResource;

class ParkingSpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parkingSpaces = ParkingSpace::all();
        return new ParkingSpaceResource($parkingSpaces);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $parkingSpace = ParkingSpace::create($request->all());
        return new ParkingSpaceResource($parkingSpace);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $parkingSpace = ParkingSpace::find($id);
        return new ParkingSpaceResource($parkingSpace);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return ParkingSpace::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ParkingSpace::find($id)->delete();
    }
}
