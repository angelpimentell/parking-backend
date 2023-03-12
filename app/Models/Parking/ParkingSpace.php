<?php

namespace App\Models\Parking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingSpace extends Model
{
    use HasFactory;

    /**
     * Get the payment associated with the ticker.
     */
    public function parkingLevel(): HasOne
    {
        return $this->hasOne(ParkingLevel::class);
    }

    /**
     * Get the tickets that owns the parking space.
     */
    public function tickets(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
}
