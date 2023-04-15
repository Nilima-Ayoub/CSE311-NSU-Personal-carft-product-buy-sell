<?php
include_once 'header.php';
?>

<section class="content">
  <div class="product">
    <?php
    require 'connection.php';
    $sql = "SELECT * FROM product WHERE id='" . $_GET['id'] . "'";
    $sql_run = mysqli_query($mysqli_connection, $sql);
    $check_sql = mysqli_num_rows($sql_run) > 0;
    if ($check_sql) {
      while ($row = mysqli_fetch_array($sql_run)) { ?>
        <div class="productImg"><img src="img/<?php echo $row['image']; ?>" class="product_image" alt="product image"></div>
        <div class="productDetails">
          <div class="artTitle">
            <h2><?php echo $row['name']; ?></h2>
          </div>
          <div class="artCat"> <?php echo 'Category- ' . $row['category']; ?></div>
          <div class="artCat"> <?php echo 'Price- ' . $row['price']; ?></div>
          <div class="artCat"> <?php echo 'Quantity- ' . $row['quantity']; ?></div>
          <br>
          <form method="get" action="product_buy.php">
          <?php if($row['quantity']==0){
            echo "STOCK OUT!!";
          }
          else{ ?>
          <div class="quantity">Quantity:  
            <input name="quantity" type="number" id="quantity" min="1" max="<?php echo $row['quantity'];?>" value="1">
            <input style="display: none;" type="number" name="id" value="<?php echo $row['id'] ?>">
          </div>
          <button class="button_login" type="submit" name="buy_product">🛍️ Buy Product</a>
          <?php }?>
        </div>
  </div>
<?php
      }
    } else {
      echo 'No products found';
    }
    mysqli_close($mysqli_connection);
?>
</div>
</section>

<?php
include_once 'footer.php'; ?>