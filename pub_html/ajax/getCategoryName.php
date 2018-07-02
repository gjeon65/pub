<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

 $dsn = "mysql:host=twilbury.cs.drexel.edu;dbname=gj65_info152_201602";
 $username = "gj65";
 $password = "gdjzvpttmq";
 $db = new PDO($dsn,$username,$password);
 
 $id = $_GET['id'];
 $name =$_GET['name'];
 $program_id = $_GET['program_id'];
 $start_year = $_GET['start_year'];
 
 $sql = "select * from categories where id=$id";
 
 $cname ="";
 foreach($data as $cat){
     $cname = $cat['name'];
 }
 header("Content-Type: application/json");
 echo $cname;
?>
