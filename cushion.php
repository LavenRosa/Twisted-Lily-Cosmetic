<?php
    include("dbcon.php");
    include("head.php");
    include("navbar.php");
?>
<body>
    <section id="top">
        <div class="container-fluid">
            <div class="row">
                <h2>CUSHIONS</h2>
                <span> Discover the cushion, the skincare and makeup product created in Korea that <br>has already won over all of Asia. This portable technique enhances and <br> protects the skin wherever you are. Dior offers a comprehensive range, from <br>the skincare cushion with the most gentle touch for a natural finish to thebr
                 cushion with extreme perfection makeup expertise for a fresh, matte <br>complexion.</span>
                
            </div>
            <div class="row1">
                
                <?php
                        $sql = "SELECT * FROM item WHERE category_id='8'";
                        $res = mysqli_query($con,$sql);
                        while($row=mysqli_fetch_assoc($res)):
                    ?>
                    <div class="col-4">
                    <img src="image/<?php echo $row['item_image'];?>" style="width: 300px;height: 300px;" alt="">
                    <div class="caption">
                        <h5><?php echo $row['item_name'];?></h5>
                        <span><?php echo $row['item_detail'];?></span><br>
                        <span><?php echo $row['price'];?></span>
                    </div>
                    <a href="userorder.php?id=<?php echo $row['item_id'];?>"><button type="submit" style="width: 100px; height: 30px; margin-top: 10px; margin-left: 80px; background-color: blueviolet; outline: none; border: none; border-radius: 10px; color: white;">Order Now</button></a>
                    
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