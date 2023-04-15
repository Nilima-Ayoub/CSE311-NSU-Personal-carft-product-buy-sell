<?php
include_once 'connection.php';
$sql = "DELETE FROM product WHERE id='".$_GET['id']."'";
$link_address = 'admin-view.php';
if (mysqli_query($mysqli_connection, $sql)) {
   require('admin-delete.php');
} else {
    echo 'Error deleting record: '.mysqli_error($mysqli_connection);
}
//mysqli_close($mysqli_connection);
?>