<!DOCTYPE html>
<html>
<head>
  <title>Display all order records from Database</title>
</head>
<body>

<table>
  <tr>
    <th>ORDER ID</th>
    <th>CUSTOMER ID</th>
    <th>PRODUCT ID</th>
    <th>PRODUCT NAME</th>
    <th>quantity</th>
    <th>order_date</th>
    <th>Delete</th>

  </tr>

<?php include_once 'header.php'; ?>

<section class="content">
  <h2>Order Details</h2>


  <div class="artContainer">
    <?php
    require 'connection.php';
$sql = 'SELECT *FROM order_info';
$sql_run = mysqli_query($mysqli_connection, $sql);
$check_sql = mysqli_num_rows($sql_run) > 0;
if ($check_sql) {
    while ($row = mysqli_fetch_array($sql_run)) { ?>

 
  <tr>
    <td><?php echo $row['order_id']; ?></td>
    <td><?php echo $row['customer_id']; ?></td>
    <td><?php echo $row['product_id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['order_date']; ?></td>
    <td><a href="delete-order.php?order_id=<?php echo $row['order_id']; ?>">❌</a></td>
  </tr>


 <?php
}
} 
 mysqli_close($mysqli_connection);
?> </div>
</div>
</section>
</table>
<?php
include_once 'footer.php'; ?>
