<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mathias
 * Date: 04-05-2017
 * Time: 09:10
 */

include("dbConnection.php");
session_start();

$id = $_POST['id'];

$sql = "UPDATE articles SET isDeleted=1 WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute() === FALSE) {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
