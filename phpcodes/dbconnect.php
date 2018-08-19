<?php
/**
 * Created by PhpStorm.
 * User: Bandanaa
 * Date: 8/18/2018
 * Time: 15:04
 */

$servername = "localhost";
$username = "root";
$password = "";
$db = "project";

$conn = new mysqli ($servername, $username, $password, $db);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    echo " ";
}