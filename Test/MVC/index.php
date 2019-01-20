<?php
    class Psr4Autoload
    {
        function __construct()
        {
            spl_autoload_register([$this,'autoload']);
        }
        function autoload($className)
        {
            $filePath = 'app/'.str_replace('\\','/',$className) . '.php';
            include $filePath;
        }
    }
    $psr = new Psr4Autoload();
    $m = $_GET['m'];
    $f = $_GET['f'];
    $className = 'controller\\'.ucfirst(strtolower($m)).'Controller';
    $obj = new $className;
    $obj->$f();