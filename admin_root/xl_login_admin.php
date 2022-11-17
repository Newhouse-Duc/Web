<?php

$email = $_POST['email'];
$password = $_POST['password'];
require '../uploads/connectdb.php';

$sql = "select * from admin where email = '$email' password = '$password'";
$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result))
{

}