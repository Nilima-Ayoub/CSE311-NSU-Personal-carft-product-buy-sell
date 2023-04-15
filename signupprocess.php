<?php
include_once('connection.php');

if (isset($_POST['sign_up'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phonenumber = $_POST['phonenumber'];

    var_dump($phonenumber);

    $query =
        "INSERT INTO user_info 
  values(default,'$username','$email','$password','$address', '$phonenumber', 'user')";

    header('location:signin.php');

    $data = mysqli_query($mysqli_connection, $query);

    mysqli_close($mysqli_connection);
}
