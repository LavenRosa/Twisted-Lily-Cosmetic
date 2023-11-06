<?php
    include("dbcon.php");
    include("head.php");
    include("navbar.php");
    include("home.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
?>
<?php
    $sql = "SELECT item_name,price FROM cosmetic_shop.item WHERE item_id = '$id'";
    $res = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($res)):
?>
<form method="post">
    <div style="text-align:center;">
        <h3 name ="itemname"><?php echo $row['item_name'];?></h3>
        <h5 name ="itemprice"><?php echo $row['price'];?></h5>
    </div>
    <div class="cusform" style=" display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <div class="form-group">
            <input type="text" name="cusname" class="form-control" id="exampleFormControlInput1" placeholder="Customer Name" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
        </div>
        <div class="form-group">
            <input type="text" name="cusph" class="form-control" id="exampleFormControlInput1" placeholder="Phone" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
        </div>
        <div class="form-group">
            <input type="email" name="cus_email" class="form-control" id="exampleFormControlInput1" placeholder="Email" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
        </div>
        <div class="form-group">
            <input type="text" name="cus_address" class="form-control" id="exampleFormControlInput1" placeholder="Address" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
        </div>
        <div class="form-group">
            <input type="date" name="order_date" class="form-control" id="exampleFormControlInput1" placeholder="Order Date" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
        </div>
        <div class="form-group" style="display:none;">
            <!--<input type="text" id="d_done" class="form-control" name="itemid" value="<?php echo $row['item_id'];?>"> -->
            <input type="text" id="d_done" class="form-control" name="itemname" value="<?php echo $row['item_name'];?>">
            <input type="text" id="d_done" class="form-control" name="itemprice" value="<?php echo $row['price'];?>">
        </div>
        <a href="showmessage.php"><input type="submit" name="save" value="Order" class="btn btn-success"></a>
        <?php if(isset($_POST['save'])){
        echo "<script> alert('Your Order is Successful!')</script>";
    }?>
    </div>
    </form>
    <?php endwhile; ?>

    <?php
        if(isset($_POST['save'])){
          //  $item_id = $_POST['itemid'];
            $item_name = $_POST['itemname'];
            $item_price = $_POST['itemprice'];
            $customername = $_POST['cusname'];
            $customerphone = $_POST['cusph'];
            $customeremail = $_POST['cus_email'];
            $customeraddress = $_POST['cus_address'];
            $orderdate = $_POST['order_date'];

            $con = mysqli_connect("localhost","root","root","cosmetic_shop");
            $sql = "INSERT INTO cosmetic_shop.order (it_id, it_name, totalprice, cus_name, cus_phone, cus_email, cus_address, order_date) VALUES ('$id', '$item_name', '$item_price', '$customername', '$customerphone', '$customeremail', '$customeraddress', '$orderdate')
            ";
            mysqli_query($con,$sql);

        }
       
    ?>
    
    <?php 
        include("footer.php");
        ?>