<?php
//Code for deleting Albums


    error_reporting(E_ALL);
    ini_set('display_errors','On');
    
    
    $dsn = 'mysql:host=twilbury.cs.drexel.edu;dbname=gj65_info152_201602';
    $username = 'gj65';
    $password = 'gdjzvpttmq';
    $db = new PDO($dsn,$username,$password);
    
    //$albumId = $_GET['albumId'];
    
    $sql = "DELETE FROM album WHERE id=?";
    //$sql = "DELETE FROM album (albumId)"." values (?)";
    
    $result = $db->prepare($sql);
    $n = $result->execute([$_GET['albumId']]);
    
    header("content-type: text/plain");
    echo "$n";
    
