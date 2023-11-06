<?php
    include("dbcon.php");
    include("head.php");
    include("adminnav.php");

    if(isset($_GET['itemid'])){
        $id = $_GET['itemid'];
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

            $sql = "UPDATE item SET item_name='$itemname',price='$itemprice',category_id='$categoryid', item_qty = '$quantity', item_image = '$itemimage', item_detail = '$itemdetail', arr_date = '$arrdate' WHERE item_id='$id'"; 
            mysqli_query($con,$sql);
            header("Location:itemmain.php");
          
        } 
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>

    <div class="container-fluid">
        <div class="row g-0">
            <!--<nav class="col-2 pe-3" style="background-color: blueviolet;">
                <h1 class="h4 py-4 text-center text-primary">
                    <i></i>
                    <span class="d-done" d-lg-inline>ADMIN</span>
                </h1>
                <div class="list-group text-center text-lg-start">
                    <a href="#item" class="list-group-item list-group-item-action ">
                        <i></i>
                        <span class="d-none d-lg-inline">Item</span>
                    </a>
                    <a href="#category" class="list-group-item list-group-item-action">
                        <i></i>
                        <span class="d-none d-lg-inline">Category</span>
                    </a>
                    <a href="#order" class="list-group-item list-group-item-action ">
                        <i></i>
                        <span class="d-none d-lg-inline">Order List</span>
                    </a>
                    <a href="#user" class="list-group-item list-group-item-action">
                        <i></i>
                        <span class="d-none d-lg-inline">User List</span>
                    </a>
                    <a href="#promotion" class="list-group-item list-group-item-action">
                        <i></i>
                        <span class="d-none d-lg-inline">Promotion Item</span>
                    </a>
                    <a href="#sale" class="list-group-item list-group-item-action">
                        <i></i>
                        <span class="d-none d-lg-inline">Sales</span>
                    </a>
                </div>
               
                
            </nav>-->
     
    <?php
    if(isset($_POST['save'])){

        $itemname = $_POST['itemname'];
        $itemprice = $_POST['itemprice'];
        $categoryid = $_POST['category'];
        $quantity = $_POST['itemqty'];
        $itemimage = $_POST['itemimg'];
        $new_img = $_POST['new_img'];
        $itemdetail = $_POST['itemdetail'];
        $arrdate = $_POST['arr_date'];

        if($new_img!=""){
            $sql = "UPDATE item SET item_name='$itemname',price='$itemprice',category_id='$catagoryid', item_qty = '$quantity', item_image = '$new_img', item_detail = '$itemdetail', arr_date = '$arrdate' WHERE item_id='$id'"; 
            mysqli_query($con,$sql);
            header("Location:itemmain.php");
        }else{
            $sql = "UPDATE item SET item_name='$itemname',price='$itemprice',category_id='$catagoryid', item_qty = '$quantity', item_image = '$itemimage', item_detail = '$itemdetail', arr_date = '$arrdate' WHERE item_id='$id'"; 
            mysqli_query($con,$sql);
            header("Location:itemmain.php");
        }
    }
?>
   
    <?php
        $sql = "SELECT item.*,category.category_name FROM cosmetic_shop.item LEFT JOIN category ON item.category_id = category.category_id WHERE item_id='$id'";
        $res = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($res)):
    ?>

    <form method="post" style="width:500px; display: flex; justify-content: left;  flex-direction: column;">
        <div class="form-group">
            <label for="exampleFormControlInput1">Item Name</label>
            <input type="text" name="itemname" value="<?php echo $row['item_name'];?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="text" name="itemprice" value="<?php echo $row['price'];?>" class="form-control" id="exampleFormControlInput1">
    </div>
        

        <div class="form-group">
            <label for="exampleFormControlInput1">Quantity</label>
            <input type="number" name="itemqty" value="<?php echo $row['item_qty'];?>" class="form-control" id="exampleFormControlInput1" placeholder="amount">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Images</label>
            <input type="text" name="itemimg" value="<?php echo $row['item_image'];?>" class="form-control" id="exampleFormControlInput1" placeholder="img">
            <input type="file" name="new_img" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['item_image'];?>" placeholder="img">
        </div>
       

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Details</label>
           <!-- <textarea name="itemdetail" value="<?php //echo $row['item_detail'];?>" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
            <input type="text" name="itemdetail" value="<?php echo $row['item_detail'];?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Arrival-Date</label>
            <input type="date" name="arr_date" value="<?php echo $row['arr_date'];?>" class="form-control" id="exampleFormControlInput1" placeholder="date">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Choose Catagory</label>
            <select name="category" class="form-control">
               <!-- <option value="">Choose Category</option> -->
                <?php
                    $sql = "SELECT * FROM category";
                    $res = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($res)):
                ?>
                <option value="<?php echo $row['category_id']?>"><?php echo $row['category_id']?><?php echo $row['category_name']?></option>
                <?php
                    endwhile;
                ?>
            </select>
        </div>
    
        <input type="submit" name="save" value="Update" style="width:200px; margin-top:20px; align-items: center; background-color:blueviolet;" class="btn btn-success">
    </form>
                </div>
                </div>
    <?php endwhile; ?>
                </body>