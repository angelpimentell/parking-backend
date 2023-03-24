<?php

namespace App\Http\Controllers\Parking;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Parking\Payment;
use App\Http\Resources\Parking\PaymentResource;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all();
        return new PaymentResource($payments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment = Payment::create($request->all());
        return new PaymentResource($payment);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::find($id);
        return new PaymentResource($payment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return Payment::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Payment::find($id)->delete();
    }
}
