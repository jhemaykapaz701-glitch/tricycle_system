<?php

class Driver {
    private $id;
    private $name;
    private $licenseNumber;

    public function __construct($id, $name, $licenseNumber) {
        $this->id = $id;
        $this->name = $name;
        $this->licenseNumber = $licenseNumber;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLicenseNumber() {
        return $this->licenseNumber;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLicenseNumber($licenseNumber) {
        $this->licenseNumber = $licenseNumber;
    }

    public function save() {
        // Code to save the driver to the database
    }

    public static function findAll() {
        // Code to retrieve all drivers from the database
    }

    public static function findById($id) {
        // Code to retrieve a driver by ID from the database
    }

    public function update() {
        // Code to update the driver's information in the database
    }

    public function delete() {
        // Code to delete the driver from the database
    }
}