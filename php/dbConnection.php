<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mathias
 * Date: 03-04-2017
 * Time: 10:42
 */

$address = '138.68.98.109';
$user = 'bimlab';
$pass = 'password';
$dbName = 'bimlab';

$conn = mysqli_connect($address,$user,$pass);

if(!$conn){
    echo 'Not connected to server ';
    die;
}


if(!mysqli_select_db($conn,$dbName)){
    echo 'Database not selected';
    die;
}

