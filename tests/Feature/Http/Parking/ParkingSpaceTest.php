<?php

namespace Http\Parking;

use App\Models\Parking\ParkingSpace;
use Tests\HttpTestCase;

class ParkingSpaceTest extends HttpTestCase
{
    /**
     * Respective model for endpoint.
     *
     * @var Model|null
     */
    protected $model = ParkingSpace::class;

    /**
     * Respective URL for endpoint.
     *
     * @var string|null
     */
    protected ?string $url = 'parking-spaces/';
}
