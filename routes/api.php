<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Parking\ParkingLevelController;
use App\Http\Controllers\Parking\ParkingSpaceController;
use App\Http\Controllers\Parking\TicketController;
use App\Http\Controllers\Parking\TicketPlanController;
use App\Http\Controllers\System\SettingController;
use App\Http\Controllers\System\UserController;
use App\Http\Controllers\Parking\PaymentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'parking-levels' => ParkingLevelController::class,
    'parking-spaces' => ParkingSpaceController::class,
    'payments' => UserController::class,
    'tickets' => TicketController::class,
    'ticket-plans' => TicketPlanController::class
]);

Route::apiResources([
    'settings' => SettingController::class,
    'users' => UserController::class
]);
