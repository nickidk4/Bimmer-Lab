<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mathias
 * Date: 03-04-2017
 * Time: 10:42
 */

$address = 'localhost';
$user = 'root';
$pass = 'root';
$dbName = 'Insert name here';

$con = mysqli_connect($address,$user,$pass);

if(!$con){
    echo 'Not connected to server ';
}

if(!mysqli_select_db($con,$dbName)){
    echo 'Database not selected';
}