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

            $sql = "INSERT INTO cosmetic_shop.category (category_name) VALUES ('$categoryname')";
            mysqli_query($con,$sql);
            header("Location:admin.php#category");
        }
    ?>
    <form method="post" style="width:500px; display: flex; justify-content: left;  flex-direction: column;">
        <div class="form-group">
            <label for="exampleFormControlInput1">Item Name</label>
            <input type="text" name="categoryname" class="form-control" id="exampleFormControlInput1">
        </div>
        <input type="submit" name="save" value="Add" style="width:100px; margin-top:20px; align-items: center; background-color:blueviolet;" class="btn btn-success">
    </form>
   