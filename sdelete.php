<?php

require_once('./config.php');

if (isset($_GET['id'])) {
    $id =  $_GET['id'];
    $sql = "DELETE FROM product WHERE id={$id}";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo " <script> alert('product deleted');</script>";
    } else {
        echo " <script> alert('product could not be deleted');</script>";
    }
}
