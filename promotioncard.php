<?php
    include("dbcon.php");
    include("head.php");
    include("navbar.php");
    include("home.php");
?>

    <section id="top">
        <div class="container-fluid">
            <div class="row">
                <h2 style="margin-top:50px;">PROMOTION ITEM</h2>
            </div>
            <div class="row" style="margin-top: 100px; ">
                
    <!--card-->
            <?php
                //$sql = "SELECT item.*,promotion.promo_price,promo_enddate FROM cosmetic_shop.item LEFT JOIN promotion ON item.item_id = promotion.item_id";
               
                $sql = "SELECT promotion.*,item.item_image,item_name,item_detail,price FROM cosmetic_shop.promotion LEFT JOIN item ON promotion.item_id = item.item_id";
                $res = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($res)):
            ?>
                <div class="col-4">
                    <img src="image/<?php echo $row['item_image'] ?>" style="width: 300px;height: 300px;" alt="">
                    <div class="caption" >
                        <h5><?php echo $row['item_name']; ?></h5>
                        <span><?php echo $row['item_detail']; ?></span> <br>
                        <span><strike> <?php echo $row ['price']; ?></strike> <?php echo $row ['promo_price']; ?></span><br>
                        <span>Promotion End Date - <?php echo $row ['promo_enddate'];?></span>
                    </div> 
                </div>
                <?php endwhile; ?>
    <!--card-->
            </div>


           
           
            

            

        </div>
    </section>
</body>
<?php
    include("footer.php");
?>
</html>