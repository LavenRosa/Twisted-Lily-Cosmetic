<?php
    include("dbcon.php");
    include("head.php");
    if(isset($_GET['catid'])){
        $id = $_GET['catid'];
        $sql = "DELETE FROM cosmetic_shop.category WHERE category_id='$id'";
        mysqli_query($con,$sql);
        header("Location:categorymain.php");
    }
?>