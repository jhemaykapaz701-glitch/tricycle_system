<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;

Route::post('/drivers', [DriverController::class, 'createDriver']);
Route::get('/drivers', [DriverController::class, 'getDrivers']);
Route::put('/drivers/{id}', [DriverController::class, 'updateDriver']);
Route::delete('/drivers/{id}', [DriverController::class, 'deleteDriver']);