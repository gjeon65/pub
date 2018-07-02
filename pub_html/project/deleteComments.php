<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    error_reporting(E_ALL);
    ini_set('display_errors','On');
    
    
    $dsn = 'mysql:host=twilbury.cs.drexel.edu;dbname=gj65_info152_201602';
    $username = 'gj65';
    $password = 'gdjzvpttmq';
    $db = new PDO($dsn,$username,$password);
    
    
    
    $sql = "DELETE FROM comments WHERE comments_id=?";
    
    
    $result = $db->prepare($sql);
    $n = $result->execute([$_GET['comments_id']]);
    
    header("content-type: text/plain");
    echo "$n";
    