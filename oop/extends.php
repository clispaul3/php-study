<?php
    class Person{
        public $name;
        public $age;
        function __construct($name,$age = 18){
            $this->$name = $name;
            $this->$age = $age;
        }
        function say(){
            echo '<p style="color:#58bc58;">my name is ' . $this->name . '</p>';
        }
    }
    class Man extends Person{
        public $wife;
        function __construct(){

        }
        function isMarried(){
            if($this->wife){
                echo 'I am married, her name is ' . "<strong> $this->wife </strong>";
            }else{
                echo 'I am not married' . '<br/>';
            }
        }
    }
    $ming = new Man('xiaoming',18);
    $ming->wife = 'liuyifei';
    $ming->isMarried();
    $ming->say();
