<?php

$dsn = 'mysql:host=wilbury.cs.drexel.edu;dbname=gj65';
$username = 'gj65';
$password = 'gdjzvpttmq';

$db= new PDO($uname,$upass);
$query = "select * from user";

$userName = $_GET['uname'];
$passWord = $_GET['upass'];
$action = $_GET['action'];

echo "aaa";
echo "$db";

foreach($query as $q){
    echo "$q";
    
    if($userName == $upass){
        echo "Welcome $userName"."!";
    }else{
        echo "$userName, incorrect password!";
    }
}
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

