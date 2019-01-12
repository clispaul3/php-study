<?php
    trait Person{
        function say(){
            echo 'say';
        }
        function eat(){
            echo 'eat2';
        }
    }
    trait Animate{
        function run(){
            echo 'run';
        }
        function eat(){
            echo 'eat1';
        }
    }
    trait Man{
        use Person;
        static function skill(){
            echo 'skill';
        }
    }
    Man::skill();
    class Worker{
        use Person,Animate{
            Person::eat insteadof Animate; // 使用Person中的方法
            Person:: eat as person_eat; // 将Person中的eat方法重命名为person_eat
            Animate:: eat as animate_eat; // 将Animate中的eat方法重命名为animate_eat
        }
    }
    class Teacher extends Worker{

    }
    $ming = new Worker();
    $ming->say();
    $ming->eat();
    $ming->person_eat();
    $ming->animate_eat();
    $liu = new Teacher();
    $liu->say();