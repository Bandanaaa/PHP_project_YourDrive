<?php
include_once 'dbconnect.php';
session_start();

if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from signup where username = '$username' && password = '$password'";

$result = mysqli_query ( $con , $query);
$count=mysqli_num_rows($result);

if($count >0){
$_SESSION["LoggedIn"] = TRUE;
header('Location: upload.html');
}else{


header('Location:login.html');
echo 'Invalid Details';
}
}
else
{
header('Location: upload.html');
}
?>