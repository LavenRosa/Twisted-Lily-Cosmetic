<?php
    include("dbcon.php");
    include("head.php");
?>
<table class="table" >
        <thead>
            <tr>
                <th>No</th>
                <th>Item Name</th>
                <th>Item Image</th>
                <th>Promotion Price</th>
                <th>Promotion End Date</th>
                <th colspan="3" style="text-align:center;">Action</th>
            </tr> 
        </thead>
        <tbody>
            <?php
                $sql = "SELECT promotion.*,item.item_name,item_image FROM cosmetic_shop.promotion LEFT JOIN item ON promotion.item_id = item.item_id";
                SELECT item.*,promotion
                $res = mysqli_query($con, $sql);
                $i=1;
                while($row=mysqli_fetch_assoc($res)):
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['item_name'];?></td>
                <td><img src="image/<?php echo $row['item_image'];?>" alt="" style="width:100px;"></td>
                <td><?php echo $row['promo_price'];?></td>
                <td><?php echo $row['promo_enddate'];?></td>
                
                <td><a href="itemadd.php?itemid=<?php echo $row['promo_id'];?>"><button type="submit" class="btn btn-outline-success">Add</button></a></td>
                <td><a href="itemdelete.php?itemid=<?php echo $row['promo_id'];?>"><button type="submit" class="btn btn-outline-success">Delete</button></a></td>
            </tr>
            <?php $i++; endwhile;?>
        </tbody>
    </table>
    <?php
        include("footer.php");
    ?>
</table