<?php
abstract class Person{
    function fn1($name = 'php'){
        echo 'fn1';
    }
    function fn2($age){
        echo 'fn2';
    }
}
new Person();
abstract class Man extends Person{
    function fn3($skill = 'html'){
        echo 'fn3';
    }
}
class Worker extends Man{
    function fn4(){
        echo 'fn4';
    }
}
$ming = new Worker();
$ming->fn4();
$ming->fn1();