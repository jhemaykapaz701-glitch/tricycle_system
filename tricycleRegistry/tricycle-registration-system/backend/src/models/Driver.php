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

    public static function find($id) {
        // Code to find a driver by ID from the database
    }

    public static function all() {
        // Code to retrieve all drivers from the database
    }

    public function delete() {
        // Code to delete the driver from the database
    }
}