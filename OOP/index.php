<?php
    class Person {
        public $name;
        public $age;
        var $city;
        function say(){
            echo 'my name is ' . $this->name;
        }
    }
    $ming = new Person();
    $ming->name = 'xiaoming';
    $ming->say();
    $ming->city = 'guangzhou';
    $class = 'Person';
    $niu = new $class();
    $niu->city = 'beijing';
    var_dump($ming);
    var_dump($niu);
