<?php

namespace App\Models\Parking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingSpace extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'parking_level_id',
        'name',
        'description',
    ];

    /**
     * Get the payment associated with the ticket.
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
