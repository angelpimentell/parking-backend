<?php

namespace App\Models\Parking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParkingSpace extends Model
{
    use HasFactory, SoftDeletes;

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
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'deleted_at'
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
