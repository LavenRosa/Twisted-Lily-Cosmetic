<?php
    include("dbcon.php");
    include("head.php");
?>
    <table class="table">
        <thead>
            <th>No</th>  
            <th>Category ID</th>
            <th>Category Name</th>
            <th colspan = "3" style="text-align:center;">Action</th>
        </thead>
        <?php
            $sql = "SELECT * FROM cosmetic_shop.category";
            $res = mysqli_query($con,$sql);
            $i =1;
            while($row = mysqli_fetch_assoc($res)):
        ?>
        <tbody>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['category_id'];?></td>
            <td><?php echo $row['category_name'];?></td>
            <td><a href="categoryadd.php?catid=<?php echo $row['category_id']; ?>"><button type="submit" class="btn btn-outline-success">Add</button></a></td>
            <td><a href="categoryupdate.php?catid=<?php echo $row['category_id']; ?>"><button type="submit" class="btn btn-outline-success">Update</button></a></td>
            <td><a href="categorydelete.php?catid=<?php echo $row['category_id']; ?>"><button type="submit" class="btn btn-outline-success">Delete</button></a></td>
        </tbody>
        <?php $i++; endwhile; ?>
    </table>