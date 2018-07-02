<?php
//Code for deleting Pictures


    error_reporting(E_ALL);
    ini_set('display_errors','On');
    
    
    $dsn = 'mysql:host=twilbury.cs.drexel.edu;dbname=gj65_info152_201602';
    $username = 'gj65';
    $password = 'gdjzvpttmq';
    $db = new PDO($dsn,$username,$password);
    
    
    
    $sql = "DELETE FROM picture WHERE picture_id=?";
    
    
    $result = $db->prepare($sql);
    $n = $result->execute([$_GET['picture_id']]);
    
    header("content-type: text/plain");
    echo "$n";
    
