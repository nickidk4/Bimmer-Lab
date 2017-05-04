<?php

include("dbConnection.php");
session_start();

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$image = $_POST['image'];



$stmt = $conn->prepare("UPDATE articles SET title = ?, content = ?, image = ? WHERE id = ?");
$stmt->bind_param("sssi", $title, $content, $image,$id);

if ($stmt->execute() === FALSE) {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

header('Location: ../admin.html');