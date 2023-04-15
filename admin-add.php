<?php
include_once('header.php');
?>

<section class="content">
  <div class="signInFormContainer">
    <form action="adding_product.php" method="POST">
      <h2>Add Product</h2>

      <p>Name:</p>
      <input type="text" required id="name" name="name" placeholder="Name">

      <p>Quantity:</p>
      <input type="number" required id="quantity" name="quantity" placeholder="Quantity">

      <p>Price:</p>
      <input type="float" required id="price" name="price" placeholder="Price">

      <p>Image:</p>
      <input type="file" accept="image/*" required name="image">

      <p>Category:</p>
      <select class="dropdown" id="Category" required name="category">
        <option value="">Please select a category</option>
        <option value="Painting">Painting</option>
        <option value="Photo">Photo</option>
        <option value="Craft">Craft</option>
      </select>

      <button class="button_login" type="submit" name="add_product">Add Product</button>

    </form>
  </div>
</section>

<?php
include_once('footer.php');
?>

