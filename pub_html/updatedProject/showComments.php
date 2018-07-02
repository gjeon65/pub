<?php

//Code to show comments


    error_reporting(E_ALL);
    ini_set('display_errors','On');
    
    
    $dsn = 'mysql:host=twilbury.cs.drexel.edu;dbname=gj65_info152_201602';
    $username = 'gj65';
    $password = 'gdjzvpttmq';
    $db = new PDO($dsn,$username,$password);
    
    
     
 
     $sql = "select * from comments";
 
     $data = $db->query($sql);
     
     
    header("Content-Type: application/json");
    echo json_encode($data->fetchAll(PDO::FETCH_ASSOC));