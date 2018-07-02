<?php

//Code to add pictures to database

    error_reporting(E_ALL);
    ini_set('display_errors','On');
    
    
    $dsn = 'mysql:host=twilbury.cs.drexel.edu;dbname=gj65_info152_201602';
    $username = 'gj65';
    $password = 'gdjzvpttmq';
    $db = new PDO($dsn,$username,$password);
   // echo '<script>console.log("Connection Success ")</script>';
    
    
    $picture = $_GET['picture'];
    //echo '<script>console.log("get picture ")</script>';
    
    //$sql = "insert into picture (picture)"
      //      ." values (?)";
    
    $sql = "insert into picture (name) values (?)";
    
   // echo '<script>console.log("insert ")</script>';
   // echo '<script>console.log('.$picture .')</script>';
    
   foreach ($picture as $i){
       $picture = $i["picture"];
       echo "<img src=".$i."/>";
   }
    
    $results = $db->prepare($sql);
    $n = $results->execute([$picture]);
    
    
 
    header("content-type: text/plain");
    echo $n;