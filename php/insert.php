<?php
/**
 * Created by PhpStorm.
 * User: ThorNissen
 * Date: 03/04/2017
 * Time: 10.20
 */

include("dbConnection.php");
session_start();

$title = $_POST[''];
$imageURL = $_POST[''];
$paragraph = $_POST[''];

$sql = "INSERT INTO nameOfDB (title,imageURL,paragraph) VALUES ('$title','$imageURL','$paragraph')";

if(!mysqli_query($con,$sql)){
    echo 'Not inserted';
}

header('Location: admin.html');