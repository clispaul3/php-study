<?php
    class Father{
        protected $name = 'xiaoming';
        function __construct($name){
            $this->name = $name;
        }
        protected function say(){
            echo '666';
        }
    }
    class Son extends Father{
        protected $age = 18;
        function __get($str){
            if($str=='age'){
                $this->age = 100;
            }
            echo '<strong>'.$str.'</strong>' . ':' . $this->$str;
            $this->say();
        }
    }
    $ming = new Son('daming');
    $ming->name;
    // $ming->say();
    $ming->age;