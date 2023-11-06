<?php
    include("dbcon.php");
    include("head.php");

?>
    <form action="" method="post">
    <div class="form-group">
            <label for="exampleFormControlSelect1">Item Name</label>

            <select id="select" name="item" class="form-control">
                <option value="">Item Name</option>
                <?php
                    $sql = "SELECT item_id,item_name FROM cosmetic_shop.item";
                    $res = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($res)):
                ?>
                <option value="<?php echo $row['item_id']?>"><?php echo $row['item_id']?><?php echo $row['item_name']?></option>
                <?php
                    endwhile;
                ?>
            </select>
            <input type="submit" name="show" value="Check Table"> 
        </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Add Qty</label>
            <input type="text" name="addqty" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Open Qty</label>
            <input type="text" name="openqty" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Sell Qty</label>
            <input type="text" name="sellqty" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Close Qty</label>
            <input type="text" name="closeqty" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Date and Time</label>
            <input type="text" name="dandt" class="form-control" id="exampleFormControlInput1" >
        </div>
        <input type="submit" name="save" value="Add" class="btn btn-success">
    </form>

    <?php 
     if(isset($_POST['show'])){
        $select = $_POST['item'];

        $sql = "SELECT item_id,item_name FROM cosmetic_shop.item where item_id = '$select'";
                    $res = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($res)){
                        echo $row['item_id'];
                        echo $row['item_name'];}
    


                    
       
     }
    
    ?>
   <!-- <table>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['item_id'];?></td>
                <td><?php echo $row['item_name'];?></td>
            </tr>
        </tbody>
    </table>-->

    <?php
        if(isset($_POST['save'])){
            $itemid = $_POST['item'];
            $addqty = $_POST['addqty'];
            $openqty = $_POST['openqty'];
            $sellqty = $_POST['sellqty'];
            $closeqty = $_POST['closeqty'];

           

            $sql = "INSERT INTO cosmetic_shop.balance (item_id, add_qty, open_qty, sell_qty, close_qty, dandt) VALUES ( '$itemid', '$addqty', NULL, NULL, NULL, now())";
            mysqli_query($con,$sql);
        }
       
    
    ?>
    
    <table style="border:1px solid blueviolet;">
        <thead>
            <tr style="border:1px solid blueviolet;">
                <th style="border:1px solid blueviolet;">No</th>
                <th style="border:1px solid blueviolet;">Item Name</th>
                <th style="border:1px solid blueviolet;">Balance Quantity</th>
            </tr>
        </thead>
       
        <tbody style="border:1px solid blueviolet;">
        <?php
            
            $sql = "SELECT * FROM cosmetic_shop.balance WHERE dandt =(select max(dandt)from balance)";

            //$sql = "SELECT balance. *, item.item_name FROM cosmetic_shop.balance LEFT JOIN item ON balance.item_id = item.item_id where balance.dandt BETWEEN '2023-11-1' AND '2023-11-30' and balance.item_id=8";
            $res = mysqli_query($con,$sql);
            $i=1;
           // $itemid = 'item_id';
            //$close = add('addqty'+'openqty');
            while($row=mysqli_fetch_assoc($res)):
        ?>
            <tr style="border:1px solid blueviolet;">
                <td style="border:1px solid blueviolet;"> <?php echo $i;?></td>
                <?php

                    $startdate = date("Y-m-j");
                    $enddate = date("Y-m-t");                   
                    //$sql = "SELECT item_id FROM cosmetic_shop.balance WHERE dandt BETWEEN '$startdate' AND '$enddate' and item_id = 8";
                    $sql = "SELECT balance. *, item.item_name FROM cosmetic_shop.balance LEFT JOIN item ON balance.item_id = item.item_id where balance.dandt BETWEEN '$startdate' AND '$enddate' and balance.item_id=8";
                    //SELECT * FROM cosmetic_shop.balance WHERE dandt BETWEEN '2023-11-1' AND '2023-11-30' and item_id=8;

                   // $sql = "SELECT balance.close_qty,item.item_name FROM cosmetic_shop.balance LEFT JOIN item ON balance.item_id = item.item_id;";
                    $res =  mysqli_query($con,$sql);
                    while($row= mysqli_fetch_assoc($res)):
                ?>
                <td><?php echo $row['item_id'];?></td>
                <?php endwhile;?>
                <td><?php //echo $row['close_qty'];?></td>
                
            </tr>
            <?php $i++; endwhile;?>
        </tbody>
    </table>
    

   