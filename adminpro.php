<?php
    include("dbcon.php");
    include("head.php");
?>
<table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Quantity</th>
                <th style="text-align:center;">Img</th>
                <th>Details</th>
                <th>Arrival Date</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>
            <?php
                $sql = "SELECT item.*,category.category_name FROM cosmetic_shop.item LEFT JOIN category ON item.category_id = category.category_id";
                $res = mysqli_query($con, $sql);
                $i=1;
                while($row=mysqli_fetch_assoc($res)):
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['item_name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['category_name'];?></td>
                <td><?php echo $row['item_qty'];?></td>
                <td><img src="image/<?php echo $row['item_image'];?>" alt="" style="width:100px;"></td>
                <td><?php echo $row['item_detail'];?></td>
                <td><?php echo $row['arr_date'];?></td>
                <td><a href="promotionadd.php?itid=<?php echo $row['item_id'];?>"><button type="submit" class="btn btn-outline-success">Promotion</button></a></td>
            </tr>
            <?php $i++; endwhile;?>
        </tbody>
    </table>