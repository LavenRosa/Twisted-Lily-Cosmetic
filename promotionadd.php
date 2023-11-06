<?php
    include("dbcon.php");
    include("head.php");
    include("adminnav.php");
    if(isset($_GET['itid'])){
        $id = $_GET['itid'];
    }
?>
    <?php
        if(isset($_POST['save'])){
          //  $item_id = $_POST['itemid'];
            $proprice = $_POST['proprice'];
            $proenddate = $_POST['endpro'];

            $sql = "INSERT INTO cosmetic_shop.promotion (item_id, promo_price, promo_enddate) VALUES ('$id','$proprice', '$proenddate')";
            mysqli_query($con,$sql);
            header("Location:admin.php#promotion");
        }
    ?>
        <form method="post">

            <div class="form-group" style="width:500px; display: flex; justify-content: left;  flex-direction: column;">
                <label for="exampleFormControlInput1">Item ID</label>
                <?php
                            $sql = "SELECT * FROM cosmetic_shop.item WHERE item_id = '$id'";
                            $res = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($res)):
                        ?>
                <input type="text" name="itemid" value="<?php echo $row['item_id']?>" class="form-control" id="exampleFormControlInput1" <?php echo $row['item_name']?>>
                <?php endwhile; ?>
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlInput1">Promotion Price</label>
                <input type="text" name="proprice" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Promotion End Date</label>
                <input type="date" name="endpro" class="form-control" id="exampleFormControlInput1">
            </div>
            <input type="submit" name="save" value="Save" style="width:100px; margin-top:20px; align-items: center; background-color:blueviolet;" class="btn btn-success">
        </form>