<?php
    include("dbcon.php");
    include("head.php");
    include("navbar.php");
?>
<body>
    <section id="top">
        <div class="container-fluid">
            <div class="row">
                <h2>SRBUS AND MASKS</h2>
                <span>Treat your skin to a gentle face scrub and an illuminating, plumping or refining <br>face mask with Dior scrubs and masks. <br>
Each face mask acts differently on the skin, such as the Dior Hydra Life pink clay <br> mask with refining action or the Capture Dreamskin 1-Minute Mask for a <br>perfect-skin effect.</span>

            </div>
            <div class="row1">
               
                <?php
                        $sql = "SELECT * FROM item WHERE category_id='10'";
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
                    <a href="userorder.php"><button type="submit" style="width: 100px; height: 30px; margin-top: 10px; margin-left: 80px; background-color: blueviolet; outline: none; border: none; border-radius: 10px; color: white;">Order Now</button></a>
                    
                </div>
                <?php endwhile; ?>
                
            
               
    
    
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
<?php
    include("footer.php");
?>