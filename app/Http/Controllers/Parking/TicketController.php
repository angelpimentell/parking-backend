<?php

namespace App\Http\Controllers\Parking;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Parking\Ticket;
use App\Http\Resources\Parking\TicketResource;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return new TicketResource($tickets);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = Ticket::create($request->all());
        return new TicketResource($ticket);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::find($id);
        return new TicketResource($ticket);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return Ticket::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Ticket::find($id)->delete();
    }
}
