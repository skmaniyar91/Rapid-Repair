<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
    echo "connection succesful ";
    echo "<br>";
}else{
    echo "no connection";
}

mysqli_select_db($con, 'rr');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

$q = "select * from users where name = '$name' && password = '$pass' " ;

$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "<h2>User has already registered!";
}else{
    $qy = "insert into users(name,password,email) values('$name', '$pass','$email')";
    mysqli_query($con, $qy);
    header('location:login.php');
}

?>