<?php
    include("dbcon.php");
    include("head.php");
    include("navbar.php");
    include("home.php");
?>
<head>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <section id="top">
        <div class="container-fluid">
            <div class="row">
                <h2>ARRIVAL ITEM</h2>
            </div>
            <div class="row" style="margin-top: 100px; ">
                 
                <?php
                    $startdate = date("Y-m-j");
                    $enddate = date("Y-m-t");                   
                    $sql = "SELECT item_name,price,item_detail,item_image,arr_date FROM cosmetic_shop.item WHERE arr_date BETWEEN '$startdate' AND '$enddate'";
                    $res = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($res)):  
                ?>
                <div class="col-4">
                    <img src="image/<?php echo $row['item_image'];?>" style="width: 300px;height: 300px; margin-top:50px;" alt="">
                    <div class="caption">
                        <h5><?php echo $row['item_name'];?></h5>
                        <span><?php echo $row['item_detail']; ?></span><br>
                        <span><?php echo $row['price'];?></span><br>
                        <span><?php echo $row['arr_date'];?></span>
                    </div>
                    </div>
                    <?php endwhile; ?>
                
                    </div>
        </div>
    </section>
    <?php include("footer.php");?>
</body>
</html>