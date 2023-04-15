<?php
include_once('header.php');
?>

<section class="content">
  <h2>Admin Panel - Delete Products</h2>
  <div class="artContainer">
 
  <div class="artContainer">
    <?php  
    require 'connection.php';
$sql = "SELECT *FROM product";
$sql_run= mysqli_query($mysqli_connection,$sql);
$check_sql = mysqli_num_rows($sql_run)>0;
if($check_sql){
while($row= mysqli_fetch_array($sql_run))
{ ?>
<div class="artBox">
<div class="artPic">
<img src="img/<?php echo $row['image']; ?>" class="product_image" alt="product image" width="180px" height="200px"></div>
 <div class="artTitle"> <?php echo $row['name'];?></div>
 <div class="artCat"> <?php echo 'ID-'.$row['id'];?></div>
 <div class="artCat"> <?php echo 'Price-'.$row['price'];?></div>
 <div class="artCat"> <?php echo 'Quantity-'.$row['quantity'];?></div>
 <div class="artCat"> <?php echo 'Category-'.$row['category'];?></div>
 <div class="editBtn"><a href="delete_data.php?id=<?php echo $row['id']; ?>">❌ Delete Product</a></div>
  </div>
 <?php 
}
}
else{
  echo"No products found";
}
 mysqli_close($mysqli_connection); 
?> </div>
</section>


<?php
include_once('footer.php');
