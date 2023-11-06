<?php
    include("dbcon.php");
    include("head.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
?>
    <?php 
        $sql = "SELECT * FROM cosmetic_shop.order WHERE order_id='$id'";
        $res = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($res)):
    ?>
    <form action="addvoucher.php" method="post">
        <div class="cusform" style=" display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <div class="form-group">
                <input type="text" name="itemid" value="<?php echo $row['it_id'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Item ID" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
            </div>
        <div class="form-group">
                <input type="text" name="itemname" value="<?php echo $row['it_name'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Item Name" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
            </div>

            <div class="form-group">
                <input type="text" name="cusname" value="<?php echo $row['cus_name'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Customer Name" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
            </div>
            <div class="form-group">
                <input type="text" name="cusph" value="<?php echo $row['cus_phone'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Phone" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
            </div>
            <div class="form-group">
                <input type="email" name="cus_email" value="<?php echo $row['cus_email'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Email" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
            </div>
            <div class="form-group">
                <input type="text" name="cus_address" value="<?php echo $row['cus_address'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Address" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
            </div>
            <div class="form-group">
                <input type="date" name="order_date" value="<?php echo $row['order_date'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Order Date" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
            </div>
            <div class="form-group">
                <input type="text" name="totalprice" value="<?php echo $row['totalprice'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Total Price" style="width:250px; border: 2px solid blueviolet; margin-bottom:10px;">
            </div>

           
            
            <input type="submit" name="save" value="Order" class="btn btn-success">
        </div>
    </form>
    <?php endwhile; ?>