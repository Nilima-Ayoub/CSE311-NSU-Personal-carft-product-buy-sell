<?php

include_once 'connection.php';
$sql = "DELETE FROM order_info WHERE order_id='".$_GET['order_id']."'";
$link_address = 'admin-view.php';
if (mysqli_query($mysqli_connection, $sql)) {
    require 'order.php';
} else {
    echo 'Error deleting record: '.mysqli_error($mysqli_connection);
}
//mysqli_close($mysqli_connection);
