<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;

Route::prefix('drivers')->group(function () {
    Route::post('/', [DriverController::class, 'createDriver']);
    Route::get('/', [DriverController::class, 'getDrivers']);
    Route::put('/{id}', [DriverController::class, 'updateDriver']);
    Route::delete('/{id}', [DriverController::class, 'deleteDriver']);
});