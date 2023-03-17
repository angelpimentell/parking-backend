<?php

namespace App\Http\Requests\Parking;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'ticket_id' => 'required|exists:tickets',
            'user_id' => 'required|exists:users',
            'amount_paid' => 'required|decimal:4',
            'penalty_amount' => 'decimal:4',
            'description' => 'string|max:255',
        ];
    }
}
