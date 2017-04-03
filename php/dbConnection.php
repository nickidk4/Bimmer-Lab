<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mathias
 * Date: 03-04-2017
 * Time: 10:42
 */

$address = '139.59.213.205';
$user = 'BIM-lab-admin';
$pass = 'admin';
$dbName = 'bim-lab';

$conn = mysqli_connect($address,$user,$pass,$dbName);

if(!$conn){
    echo 'Not connected to server ';
    die;
}

if(!mysqli_select_db($conn,$dbName)){
    echo 'Database not selected';
    die;
}