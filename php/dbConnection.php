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
$dbName = 'bimDB';

$conn = mysqli_connect($address,$user,$pass);

if(!$conn){
    echo 'Not connected to server ';
    die;
}


if(!mysqli_select_db($conn,$dbName)){
    echo 'Database not selected';
    die;
}

