<?php

namespace Http\Parking;

use App\Models\Parking\ParkingLevel;
use Illuminate\Database\Eloquent\Model;
use Tests\HttpTestCase;

class ParkingLevelTest extends HttpTestCase
{
    /**
     * Respective model for endpoint.
     *
     * @var Model|null
     */
    protected $model = ParkingLevel::class;

    /**
     * Respective URL for endpoint.
     *
     * @var string|null
     */
    protected ?string $url = 'parking-levels';
}
