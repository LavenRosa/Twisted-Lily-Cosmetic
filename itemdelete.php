<?php
    include("dbcon.php");
    if(isset($_GET['itemid'])){
        $id = $_GET['itemid'];
        $sql = "DELETE FROM item WHERE item_id='$id'";// delete query from database
        mysqli_query($con,$sql);
        header("Location:admin.php#item");
    }
?>