<?php
include_once 'config.php';
include_once 'header.php';
include_once 'connection.php';

// Checks if there is a login cookie
if (isset($_COOKIE[$cookie_username])) {
    $username = $_COOKIE[$cookie_username];
    $pass = $_COOKIE[$cookie_password];
    $role = $_COOKIE[$cookie_role];

    if ($role == 'admin') {
        header('location: admin.php');
    }

    $product_id = $_GET['id'];

    $sql = "SELECT * FROM user_info WHERE username='".$username."'";
    $sql_run = mysqli_query($mysqli_connection, $sql);
    $check_sql = mysqli_num_rows($sql_run) > 0;

    if ($check_sql) {
        while ($row = mysqli_fetch_array($sql_run)) {
            $customer_id = $row['id'];
            $customer_name = $row['username'];
        }
    }

    $quantity = $_GET['quantity'];

    $sql = "SELECT * FROM product WHERE id='$product_id'";
    $sql_run = mysqli_query($mysqli_connection, $sql);
    $check_sql = mysqli_num_rows($sql_run) > 0;

    if ($check_sql) {
        while ($row = mysqli_fetch_array($sql_run)) {
            $product_name = $row['name'];
            $product_price = $row['price'];
            $product_quantity = $row['quantity'];
        }
    }

    $update_quantity = $product_quantity - $quantity;
    $sql_update = "UPDATE product SET quantity='$update_quantity' WHERE id='$product_id'";
    $sql_update_run = mysqli_query($mysqli_connection, $sql_update); ?>

    <section class="content">
        <h2>Invoice</h2>
        <div class="invoiceContainer">
            <?php
            $query =
                "INSERT INTO order_info 
                    values(
                        default, 
                        '$customer_id', 
                        '$product_id', 
                        '$product_name', 
                        '$quantity', 
                        default
                        )";

    $data = mysqli_query($mysqli_connection, $query);

    mysqli_close($mysqli_connection); ?>

            <div>Item - <?php echo $product_name; ?></div>
            <div>Quantity - <?php echo $quantity; ?></div>
            <br>
            <div>Customer Name - <?php echo $customer_name; ?></div>
            <?php $price = $quantity * $product_price; ?>
            <div>Price - <?php echo $price = $quantity * $product_price; ?></div>
            
        </div>
    </section>

<?php
    include_once 'footer.php';
} else {
    header('location: signin.php');
}
