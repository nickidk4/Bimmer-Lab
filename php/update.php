<?php

include("dbConnection.php");
include("upload.php");

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$image = 'img/'.$_FILES["fileToUpload"]["name"];



$stmt = $conn->prepare("UPDATE articles SET title = ?, content = ?, image = ? WHERE id = ?");
$stmt->bind_param("sssi", $title, $content, $image,$id);

if ($stmt->execute() === TRUE) {
    echo "Succesfully updated from database";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

header('Location: ../admin.html');