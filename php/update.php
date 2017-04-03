<?php
/**
<<<<<<< HEAD
 * Created by IntelliJ IDEA.
 * User: Mathias
 * Date: 03-04-2017
 * Time: 10:51
 */


include("dbConnection.php");

$id = $_POST['id'];

$stmt = $conn->prepare("UPDATE dbName SET ?=?");
$stmt->bind_param("i", $id);

if ($stmt->execute() === TRUE) {
    echo "Succesfully updated from database";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

header('Location: admin.html');
=======
 * Created by PhpStorm.
 * User: ThorNissen
 * Date: 03/04/2017
 * Time: 11.24
 */
>>>>>>> origin/master
