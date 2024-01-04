<?php

class Users {
    public $name;
    public $age;
    public static $count = 0;

    CONST MAX_AGE = 100; // constants 

    // private properties may only be accessed by the class that defines the member.
    private $address = 'San Francisco';

    // protected properties can be accessed from inside the calss and child classes
    protected $grade = 'senior';

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        static::$count++;
    }

    public function sayHello() { // methods are public by default
        echo "Hello there.";
    }

    private function getName() {
        return $this->name;
    }

    // Use getter and setter methods to update read and update private properties
    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }
}