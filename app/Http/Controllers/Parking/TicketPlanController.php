<?php

namespace App\Http\Controllers\Parking;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Resources\Parking\TicketPlanResource;
use App\Models\Parking\TicketPlan;
use App\Adapters\ModelRequestAdapter;

class TicketPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $per_page = $request->input('per_page') ?? config('constants.default_pagination');
        $ticketPlans = (new ModelRequestAdapter(TicketPlan::class, $request))->find_records_by_request_parameters();
        $ticketPlans = $ticketPlans->paginate($per_page);
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
