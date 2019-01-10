<?php
    class Person {
        public $name;
        public $age;
        public function say(){
            echo 'my name is ' . $this->name;
        }
    }
    $ming = new Person();
    $ming->name = 'xiaoming';
    $ming->say();
    var_dump($ming);
