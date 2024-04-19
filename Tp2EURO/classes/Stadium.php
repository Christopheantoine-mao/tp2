<?php
// classes/Stadium.php

class Stadium {
    public $id;
    public $name;
    public $seats;
    public $city;

    public function __construct($id, $name, $seats, City $city) {
        $this->id = $id;
        $this->name = $name;
        $this->seats = $seats;
        $this->city = $city;
    }
}
