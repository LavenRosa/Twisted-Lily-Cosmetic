<?php
    include("dbcon.php");
    if(isset($_GET['promoid'])){
        $id = $_GET['promoid'];
        $sql = "DELETE FROM cosmetic_shop.promotion WHERE promo_id='$id'";// delete query from database
        mysqli_query($con,$sql);
        header("Location:admin.php");
    }
?>