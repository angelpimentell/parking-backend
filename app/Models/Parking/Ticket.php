<?php

namespace App\Models\Parking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * Get the payment associated with the ticker.
     */
    public function ticketPlan(): HasOne
    {
        return $this->hasOne(TicketPlan::class);
    }

    /**
     * Get the parking space associated with the ticker.
     */
    public function parkingSpace(): HasOne
    {
        return $this->hasOne(ParkingSpace::class);
    }

    /**
     * Get the payment that owns the ticker.
     */
    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }

    /**
     * Get the parking level.
     */
    public function parkingLevel(): HasOneThrough
    {
        return $this->hasOneThrough(ParkingSpace::class, ParkingLevel::class);
    }

}
