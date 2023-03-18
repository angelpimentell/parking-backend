<?php

namespace App\Models\Parking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingLevel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'max_spaces',
        'description',
    ];

    /**
     * Get the parking spaces that owns the parking level.
     */
    public function parkingSpaces(): BelongsTo
    {
        return $this->belongsTo(ParkingSpace::class);
    }
}
