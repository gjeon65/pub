<?php
    error_reporting(E_ALL);
    ini_set('display_errors','On');
    
    
    $dsn = 'mysql:host=twilbury.cs.drexel.edu;dbname=gj65_info152_201602';
    $username = 'gj65';
    $password = 'gdjzvpttmq';
    $db = new PDO($dsn,$username,$password);
    
    $name = $_GET['name'];

    $sql = "insert into album (name)"
            ." values (?)";
    
    $results = $db->prepare($sql);
    $n = $results->execute([$name]);
    
    
 
    header("content-type: text/plain");
    echo $n;
    