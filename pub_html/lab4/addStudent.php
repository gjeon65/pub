<?php
    error_reporting(E_ALL);
    ini_set('display_errors','On');
    
    
    $dsn = 'mysql:host=twilbury.cs.drexel.edu;dbname=gj65_info152_201602';
    $username = 'gj65';
    $password = 'gdjzvpttmq';
    $db = new PDO($dsn,$username,$password);
    
    $name = $_GET['name'];
    $program_id = $_GET['program_id'];
    $start_year = $_GET['start_year'];
    $sql = "insert into students (name,program_id,start_year)"
            ." values (?,?,?)";
    
    $results = $db->prepare($sql);
    $n = $results->execute([$name,$program_id,$start_year]);
    
    
 
    header("content-type: text/plain");
    echo $n;
    
        