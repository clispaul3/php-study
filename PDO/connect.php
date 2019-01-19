<?php
    $dbms='mysql';     
    $host='localhost'; 
    $dbName='zyb';   
    $user='zyb';      
    $pass='iQRKbeYzUOOcAawi';          
    $dsn="$dbms:host=$host;dbname=$dbName";
    $dbh = new PDO($dsn, $user, $pass); 
    echo "success<br/>";