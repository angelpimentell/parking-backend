<?php

namespace App\Models\Parking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketPlan extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'price',
        'hours',
        'penalty_per_hour',
        'description',
    ];


    /**
     * Get the tickets that owns ticket plan.
     */
    public function tickets(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
}
