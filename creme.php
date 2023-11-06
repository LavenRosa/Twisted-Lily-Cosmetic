<?php
    include("dbcon.php");
    include("head.php");
    include("navbar.php");
?>
<body>
    <section id="top">
        <div class="container-fluid">
            <div class="row">
                <h2>CREMES</h2>
                <span> Explore the Dior collection of moisturizers, and select the day creme suited to <br> your skin: oily skin, combination skin, dull skin or reactive skin. <br>
                Discover the various textures of the Dior Prestige creme, or the age-defying  <br>creme or hydrating creme that is perfect for you.</span>
                    
            </div>
            <div class="row1">
                
                <?php
                        $sql = "SELECT * FROM item WHERE category_id='7'";
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