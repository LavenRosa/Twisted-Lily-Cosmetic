<?php
    include("dbcon.php");
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        if(isset($_POST['done'])){
            $orderdate = $_POST['order_date'];
            $item_price = $_POST['totalprice'];

            $sql ="INSERT INTO cosmetic_shop.voucher (date, total_amount) VALUES ('$orderdate','$item_price')";
            mysqli_query($con,$sql);
            header("Location:admin.php#sale");
        }
        ?>