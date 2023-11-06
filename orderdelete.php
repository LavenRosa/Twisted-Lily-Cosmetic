<?php
    include("dbcon.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM cosmetic_shop.order WHERE order_id='$id'";// delete query from database
        mysqli_query($con,$sql);
        header("Location:admin.php#order");
    }
?>
    