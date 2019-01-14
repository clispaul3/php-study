<?php
    $dbms='mysql';     
    $host='localhost'; 
    $dbName='zyb';   
    $user='zyb';      
    $pass='763KLljFnGVCM1Gl';          
    $dsn="$dbms:host=$host;dbname=$dbName";
    $dbh = new PDO($dsn, $user, $pass); 
    echo "success<br/>";