<?php

session_start();
// header('location:login.php');

$con = mysqli_connect('localhost', 'root', 'root', 'indusman');


mysqli_select_db($con, 'indusman');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = " SELECT * from test where name = '$name'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Уже выбрано";
}else{
    $reg = " INSERT into test (name, password) VALUES ('$name','$pass')";
    mysqli_query($con, $reg);
    echo "Успешно зарегистрировались!";
}
