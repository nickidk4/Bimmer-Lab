<?php
/**
 * Created by PhpStorm.
 * User: Nexoe
 * Date: 03-04-2017
 * Time: 12:23
 */

include ("dbConnection.php");
session_start();

$sql = "SELECT headline, img, content FROM artikler";

if(!mysqli_query($con,$sql)){
    echo 'Could not read';
}
