<?php
header('Location:' . 'tables.php');
include "dbconnect.php";

$fullname = $_POST['fullname'];
$relation = $_POST['relation'];
$number = $_POST['number'];
$email = $_POST['email'];

if (!empty($fullname) && !empty($relation) && !empty($number) && !empty($email)) {
$stmt = $conn->prepare(
$query = "INSERT INTO contacts(fullname,relation,number,email) VALUES (?,?,?,?)"
);
$stmt->bind_param(
"ssds",
$fullname,
$relation,
$number,
$email
);
$stmt->execute();
header('Location:' . 'tables.php');

$stmt->close();


}else {
echo "</br></br>Error found";
}
?>