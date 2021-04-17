<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'root');


mysqli_select_db($con, 'indusman');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = " SELECT * from test where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:home.php');
}else{
    header('location:login.php');
}
