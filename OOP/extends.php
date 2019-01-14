<?php
    class Person{
        public $name;
        public $age;
        function __construct($name = 'niubige',$age = 18){
            $this->name = $name;
            $this->age = $age;
            var_dump($this);
        }
        function say(){
            echo '<p style="color:#58bc58;">my name is ' . $this->name . '</p>';
        }
    }
    class Man extends Person{
        public $wife;
        function __construct($name,$age){
            parent::__construct($name,$age);
        }
        function isMarried(){
            if($this->wife){
                echo 'I am married, her name is ' . "<strong> $this->wife </strong>";
            }else{
                echo 'I am not married' . '<br/>';
            }
        }
        function say(){
            // parent::say();
            echo '<h2>my name is '.$this->name.' </h2>';
        }
    }
    $ming = new Man('xiaoming',20);
    $ming->wife = 'lanying';
    $ming->isMarried();
    $ming->say();
