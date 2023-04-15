<?php include_once 'header.php'; ?>

<section class="content">
  <h2>Admin Panel - View Products</h2>

  <?php  include_once 'sort_option.php'; ?>

  <div class="artContainer">
    <?php
    require 'connection.php';
$sql = 'SELECT *FROM product';
$sql_run = mysqli_query($mysqli_connection, $sql);
$check_sql = mysqli_num_rows($sql_run) > 0;
if ($check_sql) {
    while ($row = mysqli_fetch_array($sql_run)) { ?>
<div class="artBox">
<img src="img/<?php echo $row['image']; ?>" class="product_image" alt="product image" width="180px" height="200px">
 <div class="artTitle"> <?php echo $row['name']; ?></div>
 <div class="artCat"> <?php echo 'ID-'.$row['id']; ?></div>
 <div class="artCat"> <?php echo 'Price-'.$row['price']; ?></div>
 <div class="artCat"> <?php echo 'Quantity-'.$row['quantity']; ?></div>
 <div class="artCat"> <?php echo 'Category-'.$row['category']; ?></div>
  </div>
 <?php
}
} else {
    echo'No products found';
}
 mysqli_close($mysqli_connection);
?> </div>
</div>
</section>

<?php
include_once 'footer.php'; ?>