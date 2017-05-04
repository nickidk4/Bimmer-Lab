<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicki
 * Date: 04-05-2017
 * Time: 09:19
 */


include("dbConnection.php");
session_start();

$id = $_POST['id'];

$stmt = $conn->prepare("UPDATE articles SET isPrimary=1 WHERE id = ");
$stmt->bind_param("i", $id);

if ($stmt->execute() === TRUE) {
    echo "Succesfully updated from database";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

header('Location: admin.html');