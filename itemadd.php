<?php
    include("dbcon.php");
    include("head.php");
    include("adminnav.php");
    if(isset($_GET['itemid'])){
        $id=$_GET['itemid'];
    }
?>
<?php
        if(isset($_POST['save'])){
            $itemname = $_POST['itemname'];
            $itemprice = $_POST['itemprice'];
            $categoryid = $_POST['category'];
            $quantity = $_POST['itemqty'];
            $itemimage = $_POST['itemimg'];
            $itemdetail = $_POST['itemdetail'];
            $arrdate = $_POST['arr_date'];

            $sql = "INSERT INTO cosmetic_shop.item (item_name, price, category_id, item_qty, item_image, item_detail, arr_date) VALUES ('$itemname', '$itemprice', '$categoryid', '$quantity', '$itemimage', '$itemdetail', '$arrdate')"; //  insert query
            mysqli_query($con,$sql);
            header("Location:admin.php");
        }
    ?>
<form method="post" style="width:500px; display: flex; justify-content: left;  flex-direction: column;">
    <div class="form-group">
        <label for="exampleFormControlInput1">Item Name</label>
        <input type="text" name="itemname" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <input type="text" name="itemprice" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Choose Catagory</label>
        <select name="category" class="form-control">
            <option value="">Choose Category</option>
            <?php
                $sql="SELECT * FROM category";
                $res = mysqli_query($con, $sql);
                while($row=mysqli_fetch_assoc($res)):
            ?>
            <option value="<?php echo $row['category_id']?>"><?php echo $row['category_id']?><?php echo $row['category_name']?></option>
                <?php
                    endwhile;
                ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Quantity</label>
        <input type="number" name="itemqty" class="form-control" id="exampleFormControlInput1" placeholder="amount">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Images</label>
        <input type="file" name="itemimg" class="form-control" id="exampleFormControlInput1" placeholder="img">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Deails</label>
        <textarea name="itemdetail" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Arrival-Date</label>
        <input type="date" name="arr_date" class="form-control" id="exampleFormControlInput1" placeholder="date">
    </div>
   
    <input type="submit" name="save" value="Add" style="width:100px; margin-top:20px; align-items: center; background-color:blueviolet;" class="btn btn-success">
</form>
    