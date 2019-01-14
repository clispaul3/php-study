<?php
    class Person{
        public $name;
        var $age;
        function __construct($name,$age = 18){
            $this->name = $name;
            $this->age = $age;
        }
        function say($city){
            echo 'I am living in ' .$city;
        }
    }
    $ming = new Person('xiaoming',20);
    $niu = new Person('xiaoniu');
    $niu->say('guangzhou');
    var_dump($ming);
    var_dump($niu);