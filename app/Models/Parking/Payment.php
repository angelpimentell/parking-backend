<?php

namespace App\Models\Parking;

use App\Models\System\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * Get the ticket associated with the payment.
     */
    public function ticket(): HasOne
    {
        return $this->hasOne(Ticket::class);
    }

    /**
     * Get the cashier user associated with the payment.
     */
    public function cashier(): HasOne
    {
        return $this->hasOne(User::class, 'cashier_user_id');
    }

    /**
     * Get the ticket plan.
     */
    public function ticketPlan(): HasOneThrough
    {
        return $this->hasOneThrough(Ticket::class, TicketPlan::class);
    }

}
