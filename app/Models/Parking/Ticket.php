<?php

namespace App\Models\Parking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ticket_plan_id',
        'parking_space_id',
        'name',
        'active',
        'expiration_date',
    ];


    /**
     * Get the payment associated with the ticket.
     */
    public function ticketPlan(): HasOne
    {
        return $this->hasOne(TicketPlan::class);
    }

    /**
     * Get the parking space associated with the ticket.
     */
    public function parkingSpace(): HasOne
    {
        return $this->hasOne(ParkingSpace::class);
    }

    /**
     * Get the payment that owns the ticket.
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
