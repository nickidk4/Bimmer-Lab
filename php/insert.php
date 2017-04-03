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

$stmt = $conn->prepare("INSERT INTO nameofDB (title, imageURL, paragraph) VALUES (?,?,?)");
$stmt->bind_param("sss", $title, $imageURL, $paragraph);

if ($stmt->execute() === TRUE) {
    echo "Succesfully inserted to database";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

header('Location: admin.html');