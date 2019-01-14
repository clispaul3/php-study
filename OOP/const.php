<?php
    class Person{
        public $name;
        const COUNTRY = 'CHINA';
        const PI = 3.14;
        function say(){
            echo self::COUNTRY . '</br>';
        }
    }
    $ming = new Person();
    $ming->say();
    echo Person::COUNTRY;

    class Car{
        protected static $name = 'PHP';
        function create(){
            echo self::$name;
        }
    }
    $bwm = new Car();
    // echo Car::$name;
    $bwm->create();
    // Car::$name = 'javascript';
    // echo Car::$name;