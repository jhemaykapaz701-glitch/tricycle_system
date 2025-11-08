<?php

namespace App\Controllers;

use App\Models\Driver;

class DriverController
{
    public function createDriver($request, $response)
    {
        // Logic to create a new driver
        $data = $request->getParsedBody();
        $driver = new Driver();
        $driver->name = $data['name'];
        $driver->licenseNumber = $data['licenseNumber'];
        $driver->save();

        return $response->withJson($driver, 201);
    }

    public function getDrivers($request, $response)
    {
        // Logic to retrieve all drivers
        $drivers = Driver::all();
        return $response->withJson($drivers);
    }

    public function updateDriver($request, $response, $args)
    {
        // Logic to update an existing driver
        $data = $request->getParsedBody();
        $driver = Driver::find($args['id']);
        if ($driver) {
            $driver->name = $data['name'];
            $driver->licenseNumber = $data['licenseNumber'];
            $driver->save();
            return $response->withJson($driver);
        }
        return $response->withStatus(404);
    }

    public function deleteDriver($request, $response, $args)
    {
        // Logic to delete a driver
        $driver = Driver::find($args['id']);
        if ($driver) {
            $driver->delete();
            return $response->withStatus(204);
        }
        return $response->withStatus(404);
    }
}