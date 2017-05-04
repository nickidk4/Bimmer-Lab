<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicki
 * Date: 04-05-2017
 * Time: 09:19
 */


include("dbConnection.php");
session_start();

$id = $_GET['id'];

// Change all articles to NOT primary
$stmt = $conn->prepare("UPDATE articles SET isPrimary = 0");

if ($stmt->execute() === TRUE) {
    echo "Succesfully updated from database";
} else {
    echo "Error: " . $conn->error;
}



// Change selected article to primary
$stmt = $conn->prepare("UPDATE articles SET isPrimary=1 WHERE id = ?"); // Skal sætte article's isPrimary til 1 på den gældende id
$stmt->bind_param("i", $id);

if ($stmt->execute() === TRUE) {
    echo "Succesfully updated from database";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

//header('Location: admin.html');