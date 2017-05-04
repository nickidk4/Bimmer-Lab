<?php
/**
 * Created by PhpStorm.
 * User: Nexoe
 * Date: 03-04-2017
 * Time: 12:23
 */

include ("dbConnection.php");
session_start();

$sql = "SELECT * FROM articles WHERE isPrimary=1";

$result = $conn->query($sql);
$rows = array();

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);


$conn->close();
