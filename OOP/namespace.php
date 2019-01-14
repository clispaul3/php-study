<?php
namespace A\Test;
    class Person{
        public $name;
        function say(){
            echo 'namespace A';
        }
    }
namespace B;
    class Person{
        public $name;
        function say(){
            echo 'namespace B';
        }
    }
    $ming = new Person(); // 使用命名空间B下的类
    $ming->say();
    $niu = new \A\Test\Person(); // 使用命名空间A下的类
    $niu->say();
    use \A\Test\Person as A_Person; // 使用别名 use
    $php = new A_Person();
    $php->say();


