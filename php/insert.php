<?php
/**
 * Created by PhpStorm.
 * User: ThorNissen
 * Date: 03/04/2017
 * Time: 10.20
 */

include("dbConnection.php");

include("upload.php");

$title = $_POST['title'];
$imageURL = 'img/'.$_FILES["fileToUpload"]["name"];
$paragraph = $_POST['para'];

$stmt = $conn->prepare("INSERT INTO articles (title, image, content) VALUES (?,?,?)");
$stmt->bind_param("sss", $title, $imageURL, $paragraph);

if ($stmt->execute() === TRUE) {
    header('Location: ../admin.html');
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
