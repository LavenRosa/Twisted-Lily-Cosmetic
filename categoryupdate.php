<?php
    include("dbcon.php");
    include("head.php");
    include("adminnav.php");
    if(isset($_GET['catid'])){
        $id = $_GET['catid'];
    }
?>
<?php   
    if(isset($_POST['save'])){
        $categoryname = $_POST['categoryname'];
        
        $sql = "UPDATE category SET category_name = '$categoryname' WHERE category_id = '$id'";
        $res = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($res)):
    }
?>
    <?php
        $sql = "SELECT * FROM cosmetic_shop.category WHERE category_id = '$id'";
    ?>

    <form method="post" style="width:500px; display: flex; justify-content: left;  flex-direction: column;">
        <div class="form-group">
            <label for="exampleFormControlInput1">Category Name</label>
            <input type="text" name="categoryname" value="<?php echo $row['category_name'];?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <input type="submit" name="save" value="Add" style="width:100px; margin-top:20px; align-items: center; background-color:blueviolet;" class="btn btn-success">
    </form>
    <?php endwhile; ?>
   