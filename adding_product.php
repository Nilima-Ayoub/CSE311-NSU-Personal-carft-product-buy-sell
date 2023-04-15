<?php
include_once('connection.php');

if (isset($_POST['add_product'])) {
  $name = $_POST['name'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $image = $_POST['image'];
  $category = $_POST['category'];

  $query = "INSERT INTO product values(default,'$name','$quantity','$price','$category','$image')";
  
  header('location:admin-add.php');

  $data = mysqli_query($mysqli_connection, $query);
  
  mysqli_close($mysqli_connection);
}
