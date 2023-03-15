<?php

namespace App\Http\Controllers\Parking;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Parking\TicketPlan;

class TicketPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TicketPlan::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return TicketPlan::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return TicketPlan::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return TicketPlan::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return TicketPlan::find($id)->delete();
    }
}
