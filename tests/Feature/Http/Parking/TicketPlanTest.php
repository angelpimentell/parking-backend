<?php

namespace Http\Parking;

use App\Models\Parking\TicketPlan;
use Tests\HttpTestCase;

class TicketPlanTest extends HttpTestCase
{
    /**
     * Respective model for endpoint.
     *
     * @var Model|null
     */
    protected $model = TicketPlan::class;

    /**
     * Respective URL for endpoint.
     *
     * @var string|null
     */
    protected ?string $url = 'ticket-plans/';
}
