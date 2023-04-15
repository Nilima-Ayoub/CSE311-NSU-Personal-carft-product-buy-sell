<?php
include_once 'header.php';
?>

<section class="content">
<div class="signInFormContainer"> 
<?php
include_once 'connection.php';
$sql = "SELECT *FROM product WHERE id='".$_GET['id']."'";
$sql_run = mysqli_query($mysqli_connection, $sql);
if (mysqli_query($mysqli_connection, $sql)) {
    $row = mysqli_fetch_array($sql_run); ?>
<h2>Edit Product<br></h2>
    <form action="editing-data.php" method="POST">
        <p>Product ID:</p>
        <input type="int" required name="id" id="id" placeholder="id" value="<?php echo $row['id']; ?>" readonly>
        <p>Product Name:</p>
        <input type="text" required name="name" id="name" placeholder="name" value="<?php echo $row['name']; ?>" >
        <p>Price:</p>
        <input type="float" required name="price" id="price" placeholder="Price" value="<?php echo $row['price']; ?>">
        <p>Quantity:</p>
        <input type="number" name="quantity" id="quantity" placeholder="Quantity" value="<?php echo $row['quantity']; ?>">
        <p>Image: (Leave Empty if not intended to change)</p>
        <input type="file"  accept="image/*" name="image">
        <p>Category:</p>
      <select class="dropdown" id="category" required name="category">
        <?php if ($row['category'] == 'Painting') {?>
            <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                 <option value="Photo">Photo</option>
                <option value="Craft">Craft</option>
        <?php }
    if ($row['category'] == 'Photo') {?>
        <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
        <option value="Painting">Painting</option>
        <option value="Craft">Craft</option>
     <?php }
    if ($row['category'] == 'Craft') {?>
             <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
             <option value="Painting">Painting</option>
            <option value="Photo">Photo</option>
         <?php } ?>
      </select>
      <button class="button_login" type="submit" name="edit_product">Confirm</button>
    </form> <?php
} ?>
</div> </div>
</section>

<?php
include_once 'footer.php'; ?>