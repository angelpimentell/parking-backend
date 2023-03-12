<?php

namespace App\Models\System;

use App\Models\Parking\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the setting.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }
}
