<?php

class DriverController {
    private $driverModel;

    public function __construct($driverModel) {
        $this->driverModel = $driverModel;
    }

    public function createDriver($request) {
        // Logic to create a new driver record
        $data = $request->getParsedBody();
        return $this->driverModel->create($data);
    }

    public function getDrivers() {
        // Logic to retrieve all driver records
        return $this->driverModel->getAll();
    }

    public function updateDriver($request, $id) {
        // Logic to update an existing driver record
        $data = $request->getParsedBody();
        return $this->driverModel->update($id, $data);
    }

    public function deleteDriver($id) {
        // Logic to delete a driver record
        return $this->driverModel->delete($id);
    }
}