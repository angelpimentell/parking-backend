<?php

namespace Http\Parking;

use App\Models\Parking\Payment;
use Tests\HttpTestCase;

class PaymentTest extends HttpTestCase
{
    /**
     * Respective model for endpoint.
     *
     * @var Model|null
     */
    protected $model = Payment::class;

    /**
     * Respective URL for endpoint.
     *
     * @var string|null
     */
    protected ?string $url = 'payments/';
}
