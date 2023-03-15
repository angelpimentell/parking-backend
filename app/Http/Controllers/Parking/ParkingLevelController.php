<?php

namespace App\Http\Controllers\Parking;

use App\Http\Controllers\CrudController;
use App\Models\Parking\ParkingLevel;


class ParkingLevelController extends CrudController
{

    /**
     * Respective model for controller
     */
    protected $model = ParkingLevel::class;

}
