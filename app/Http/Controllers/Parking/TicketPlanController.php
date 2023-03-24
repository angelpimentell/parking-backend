<?php

namespace App\Http\Controllers\Parking;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Parking\TicketPlan;
use App\Http\Resources\Parking\TicketPlanResource;

class TicketPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketPlans = TicketPlan::all();
        return new TicketPlanResource($ticketPlans);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticketPlan = TicketPlan::create($request->all());
        return new TicketPlanResource($ticketPlan);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticketPlan = TicketPlan::find($id);
        return new TicketPlanResource($ticketPlan);
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
