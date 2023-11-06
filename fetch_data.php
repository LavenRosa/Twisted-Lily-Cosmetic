<?php 
      include("dbcon.php");
    $selectedOption = $_POST['option'];

    $sql = "SELECT * FROM cosmetic_shop.balance WHERE dandt BETWEEN '2023-11-1' AND '2023-11-30' and item_id=". $selectedOption;
    $result = $con->query($sql);

    




?>