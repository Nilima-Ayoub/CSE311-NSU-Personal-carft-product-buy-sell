<?php
include_once 'header.php';
include_once 'connection.php';
if (isset($_POST['search'])) {
    $cid = $_POST['category'];
    $pid = $_POST['price'];

    if ($cid == 'Painting' && $pid == 'High-low') {
        $sql = "SELECT *FROM product where category='Painting' order by price desc";
    } elseif ($cid == 'Craft' && $pid == 'High-low') {
        $sql = "SELECT *FROM product where category='Craft' order by price desc";
    } elseif ($cid == 'Painting' && $pid == 'Low-high') {
        $sql = "SELECT *FROM product where category='Painting' order by price";
    } elseif ($cid == 'Photo' && $pid == 'Low-high') {
        $sql = "SELECT *FROM product where category='Photo' order by price";
    } elseif ($cid == 'Photo' && $pid == 'High-low') {
        $sql = "SELECT *FROM product where category='Photo' order by price";
    } elseif ($cid == 'Craft' && $pid == 'Low-high') {
        $sql = "SELECT *FROM product where category='Craft' order by price";
    } elseif ($cid == 'All' && $pid == 'High-low') {
        $sql = 'SELECT *FROM product  order by price desc';
    } elseif ($cid == 'All' && $pid == 'Low-high') {
        $sql = 'SELECT *FROM product  order by price';
    } else {
        $sql = 'SELECT *FROM product';
    } ?>

<section class="content">
<a href="index.php"><h2>View Products</h2></a>
  <?php  include_once 'sort_option.php'; ?>
  <div class="artContainer">
    <?php
$sql_run = mysqli_query($mysqli_connection, $sql);
    $check_sql = mysqli_num_rows($sql_run) > 0;
    if ($check_sql) {
        while ($row = mysqli_fetch_array($sql_run)) { ?>
<div class="artBox">
<img src="img/<?php echo $row['image']; ?>" class="product_image" alt="product image" width="180px" height="200px">
 <div class="artTitle"> <a href="product.php?id=<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></a></div>
 <div class="artCat"> <?php echo 'ID-'.$row['id']; ?></div>
 <div class="artCat"> <?php echo 'Price-'.$row['price']; ?></div>
 <div class="artCat"> <?php echo 'Quantity-'.$row['quantity']; ?></div>
 <div class="artCat"> <?php echo 'Category-'.$row['category']; ?></div>
  </div>
<?php }
    }
}?>
</div></section>

<?php
include_once 'footer.php';
?>