<?php
/**
 * Created by PhpStorm.
 * User: ThorNissen
 * Date: 03/04/2017
 * Time: 10.20
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

$titel = $_POST[''];
$imageURL = $_POST[''];
$paragraph = $_POST[''];

$sql = "INSERT INTO nameOfDB (titel,imageURL,paragraph) VALUES ('$titel','$imageURL','$paragraph')";

if(!mysqli_query($con,$sql)){
    echo 'Not inserted';
}

header('Location: index.html');