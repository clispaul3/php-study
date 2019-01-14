<?php
function test($name,$age){
    echo $name . ':' . $age;
}
call_user_func('test','php',18);
echo '<br/>';
call_user_func_array('test',['css',23]);
class Person{
    function eat(){
        echo 'eat';
    }
    function say($name){
        call_user_func([$this,'eat']);
        echo 'class_person' . $name;
    }
}
$ming = new Person();
call_user_func([$ming,'say'],'php');
call_user_func_array([$ming,'say'],['javascript']);
echo '<hr/>';
function my_autoload($className){
    echo $className;
}
spl_autoload_register('my_autoload');
$ming = new Worker();