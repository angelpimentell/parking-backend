<?php

namespace Http\Parking;

use App\Models\Parking\Ticket;
use Tests\HttpTestCase;

class TicketTest extends HttpTestCase
{
    /**
     * Respective model for endpoint.
     *
     * @var Model|null
     */
    protected $model = Ticket::class;

    /**
     * Respective URL for endpoint.
     *
     * @var string|null
     */
    protected ?string $url = 'tickets/';
}
