<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicki
 * Date: 04-05-2017
 * Time: 10:52
 */

include ("dbConnection.php");
session_start();

$sql = "SELECT * FROM articles WHERE isDeleted = 0 AND isPrimary = 1";

$result = $conn->query($sql);
$rows = array();

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);


$conn->close();