<?php
    include("dbcon.php");
    include("head.php");
    include("navbar.php");
    include("home.php");
?>

<head>
    <link rel="stylesheet" href="shoppingcart.css">
</head>
<body>
    <section id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <h2>SEERUMS</h2>
                    <span>Take care of your skin with Dior face serums. Age-defying serum, lifting,<br>
                        illuminating or mattifying serums: each Dior serum targets one or more of your <br>
                        skin's needs. Discover the Capture Youth serum collection to delay signs of <br>
                        aging or the One Essential Skin Boosting Super Serum detox serum.</span>
                </div>
            </div>
            <div class="row" style="margin-top: 100px; ">
                
    <!--card-->
                    <?php
                        $sql = "SELECT * FROM item WHERE category_id='2'";
                        $res = mysqli_query($con,$sql);
                        while($row=mysqli_fetch_assoc($res)):
                    ?>
                <div class="col-4">
                    <img src="image/<?php echo $row['item_image'];?>" style="width: 300px;height: 300px; margin-top:50px;" alt="">
                    <div class="caption">
                        <h5><?php echo $row['item_name'];?></h5>
                        <span><?php echo $row['item_detail'];?></span><br>
                        <span><?php echo $row['price'];?></span>
                    </div>
                    <a href="userorder.php?id=<?php echo $row['item_id'];?>"><button type="submit" style="width: 100px; height: 30px; margin-top: 10px;  background-color: blueviolet; outline: none; border: none; border-radius: 10px; color: white;">Order Now</button></a>
                    
                </div>
                <?php endwhile; ?>
    <!--card-->
            </div>
        </div>
    </section>

    <!--<div class="container-flluid">
      <div class="col-md-12">
        <div class="row">
          <div class="col-cd-6">
            <h2 class="text-center">Shopping Cart Date</h2>

           // <?php
            //$sql = "";//select query from item table
            //$res = mysqli_query($con,$sql);

           // while($row = mysqli_fetch_assoc($res)):
           // ?>
          </div>
        </div>
      </div>
    </div>

    <script src="main.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
