<?php
include_once('header.php');
?>

<section class="content">
  <h2>Exhibition</h2>
<?php  include_once('sort_option.php'); ?>
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
<div class="product_image">
  <img src="img/<?php echo $row['image']; ?>" class="product_image" alt="product image">
</div>
<div class="artTitle"> <a href="product.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></div>
 <div class="artCat"> <?php echo 'Category-'.$row['category'];?></div>
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
?>