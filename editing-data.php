<?php
include_once('connection.php');
if(isset($_POST['edit_product'])){
  $id=$_POST['id'];
  $name =$_POST['name'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $image = $_POST['image'];
  $category = $_POST['category'];

  if($image<>null){
    $query = "UPDATE product SET name='$name',quantity='$quantity',price='$price',category='$category',image= '$image' WHERE id=$id";
    $data = mysqli_query($mysqli_connection, $query);
    if ($data) {
      require('admin-edit.php');
   } else {
       echo 'Error updating record: '.mysqli_error($mysqli_connection);
   }
  }
  else{ 
  $query = "UPDATE product SET name='$name',quantity='$quantity',price='$price',category='$category' WHERE id=$id";
  $data = mysqli_query($mysqli_connection, $query);
  if ($data) {
    require('admin-edit.php');
 } else {
     echo 'Error updating record: '.mysqli_error($mysqli_connection);
 }
}}
?>