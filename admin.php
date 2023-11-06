<?php
    include("dbcon.php");
    include("head.php");
    //include("navbar.php")
?>
<?php
//       if(!isset($_SESSION['loginbtn'])){
//          header("Location:login.php");
//          exit();
//     }
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

<body id="page-top" > 
    <style>
        table tr th{
            border: 2px solid blueviolet;
            text-align:center;
        }
        table tr td{
            border: 2px solid blueviolet;
            text-align:center;
        }
       table tr td input{
        text-align:center;
       }
    </style>

    <div class="container-fluid">
        <div class="row g-0">
            <nav class="col-2 pe-3" style="background-color: blueviolet;">
                <h1 class="h4 py-4 text-center text-primary">
                    <i></i>
                    <span class="d-done" d-lg-inline style="color:white;">ADMIN</span>
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
               
                
            </nav>
            <main class="col-10" >
                
            <!--    <div class="container-fluid mt-3 p-4">
                    <div class="row">
                        <div class="col">
                            <div class="alert">
                                <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quo sint necessitatibus officia assumenda optio ab earum quos architecto aperiam nihil eum, odio aut inventore minima id magni sit. Voluptatibus.</i><a href="#">Download Noa</a>
                            </div>
                        </div>
                    </div>
                    <div class="row flex-column flex-lg-row">
                        <h2>QUICK STARTS</h2>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="card-title h2">1,250</h3>
                                    <span class="text-success">
                                        <i>Daily Visitors</i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2">8,210</h3>
                                <span class="text-success">
                                    <i>Weekly Visitors</i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2">8,210</h3>
                                <span class="text-success">
                                    <i>Weekly Visitors</i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2">8,210</h3>
                                <span class="text-success">
                                    <i>Weekly Visitors</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 flex-column flex-lg-row">
                    <div class="col">
                        <h2 class="h6 text-white-50">Location</h2>
                        <div class="card mb-3" style="height: 280px;">
                            <div class="card-body">
                                <small class="text-muted">Regional</small>
                                div
                            </div>
                        </div>
                    </div>
                </div> 
-->
                <section id="item">
                    <h3 style="text-align:center; margin-bottom:20px; margin-top:30px;">ITEM LIST</h3>
                <table class="table" style="border: 1px solid blueviolet; border-radius:10px; margin-left:5px;">
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
                <th colspan="4" style="text-align:center;">Action</th>
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
                <td><a href="itemadd.php?itemid=<?php echo $row['item_id'];?>"><button type="submit" class="btn btn-outline-success">Add</button></a></td>
                <td><a href="itemupdate.php?itemid=<?php echo $row['item_id'];?>"><button type="submit" class="btn btn-outline-success">Update</button></a></td>
                <td><a href="itemdelete.php?itemid=<?php echo $row['item_id'];?>"><button type="submit" class="btn btn-outline-success">Delete</button></a></td>
                <td><a href="promotionadd.php?itid=<?php echo $row['item_id'];?>"><button type="submit" class="btn btn-outline-success">Promotion</button></a></td>
            </tr>
            <?php $i++; endwhile;?>
        </tbody>
                    </table>
            </section>     
                    <section id="category">
                    <h3 style="text-align:center; margin-bottom:20px; margin-top:30px;">CATEGORY LIST</h3>
                        <table class="table" style="border: 1px solid blueviolet; border-radius:10px; margin-left:5px;">
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
                </section>
                <section id="promotion">
                <h3 style="text-align:center; margin-bottom:20px; margin-top:30px;">PROMOTION LIST</h3>
                    <table class="table"  style="border: 1px solid blueviolet; border-radius:10px; margin-left:5px;">
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
                                    
                                    <td><a href="itemadd.php?promoid=<?php echo $row['promo_id'];?>"><button type="submit" class="btn btn-outline-success">Add</button></a></td>
                                    <td><a href="promotiondelete.php?promoid=<?php echo $row['promo_id'];?>"><button type="submit" class="btn btn-outline-success">Delete</button></a></td>
                                </tr>
                                <?php $i++; endwhile;?>
                            </tbody>
                    </table>
                </section>
                <section id="user">
                <h3 style="text-align:center; margin-bottom:20px; margin-top:30px;">USER LIST</h3>
                    <table class="table"  style="border: 1px solid blueviolet; border-radius:10px; margin-left:5px;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User Name</th>
                                <th>User Password</th>
                                <th>User Email</th>
                            </tr> 
                        </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM cosmetic_shop.user";
                            $res = mysqli_query($con,$sql);
                            $i =1;
                            while($row = mysqli_fetch_assoc($res)):
                        ?>
                        <tbody>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['user_name'];?></td>
                            <td><?php echo $row['user_pass'];?></td>
                            <td><?php echo $row['user_email'];?></td>
                        </tbody>
                        <?php $i++; endwhile; ?>
                            </tbody>
                    </table>
                </section>
                <section id="order">
                <h3 style="text-align:center; margin-bottom:20px; margin-top:30px;">Order LIST</h3>
                <table style="border: 1px solid blueviolet; border-radius:10px; margin-left:5px;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Order ID</th>
                                <th>Item Name</th>
                                <th>Customer Name</th>
                                <th>Phone</th>
                                <th style="width:100px;">Email</th>
                                <th style="width:100px;">Address</th>
                                <th>Order_date</th>
                                <th>Total Price</th>
                                <th style="width:100px; text-align:center;" colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $con = mysqli_connect("localhost","root","root","cosmetic_shop");
                                $sql = "SELECT * FROM cosmetic_shop.order";//select query from ordertable;
                                $res = mysqli_query($con,$sql);
                                $i = 1;
                                while($row=mysqli_fetch_assoc($res)):
                            ?>
                            <tr>
                            <form action="" method="post">
                                <td><?php echo $i;?></td>
                                <td><input type="text" name="orderid" style="border:none; outline:none;width:100px;" value="<?php echo $row['order_id'];?>"></td>                               

                                <td><input type="text" name="itemname" style="border:none; outline:none; width:100px;" value="<?php echo $row['it_name']; ?>"></td>

                                <td style="width:100px;"><input type="text" style="border:none; outline:none;width:100px;" name="cusname" value="<?php echo $row['cus_name']; ?>"></td>

                                <td style="width:100px;"><input type="text" name="cusphone" style="border:none; outline:none;width:100px;" value="<?php echo $row['cus_phone']; ?>"></td>

                                <td style="width:100px;"><input type="text" style="border:none; outline:none;width:100px;" name="cusemail" value="<?php echo $row['cus_email']; ?>"></td>

                                <td style="width:100px;"><input type="text" style="border:none; outline:none;width:100px;" name="cusaddress" value="<?php echo $row['cus_address']; ?>"></td>

                                <td style="width:100px;"><input type="text" style="border:none; outline:none;width:100px;" name="orderdate" value="<?php echo $row['order_date']; ?>"></td>

                                <td style="width:100px;"><input type="text" style="border:none; outline:none;width:100px;" name="totalprice" value="<?php echo $row['totalprice']; ?>"></td>

                                <td><input type="submit" name="done" value="Done" class="btn btn-outline-success"></td>
                                <td><a href="orderdelete.php?id=<?php echo $row['order_id'];?>"><button type="submit" class="btn btn-outline-success">Cancle</button></a></td>
                                <td><input type="hidden" name="itemid" style="border:none; outline:none;width:100px;" value="<?php echo $row['it_id']; ?>"></td>
                                </form>
                            </tr>
                            <?php $i++; endwhile; ?>
                        </tbody>
                        <?php
                            if(isset($_POST['done'])){
                                $orderid = $_POST['orderid'];
                                $itemid = $_POST['itemid'];
                                $itemname = $_POST['itemname'];
                                $cusname = $_POST['cusname'];
                                $cuspone = $_POST['cusphone'];
                                $cusemail = $_POST['cusemail'];
                                $cusaddress = $_POST['cusaddress'];
                                $orderdate = $_POST['orderdate'];
                                $totalprice = $_POST['totalprice'];

                                $con = mysqli_connect("localhost","root","root","cosmetic_shop");
                                $sql = "INSERT INTO cosmetic_shop.voucher1 ( order_id, item_id, item_name, cus_name, cus_phone, cus_email, cus_address, order_date, totalprice) VALUES ( '$orderid','$itemid','$itemname', '$cusname', '$cuspone', ' $cusemail', '$cusaddress', '$orderdate', '$totalprice')";
                                
                                mysqli_query($con,$sql);
                            }
                        ?>
                    </table>
                </section>
                <section id="sale">
                <h3 style="text-align:center; margin-bottom:20px; margin-top:30px;">Sale LIST</h3>
                    <table class="table"  style="border: 1px solid blueviolet; border-radius:10px; margin-left:5px;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Voucher_ID</th>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Total Amount</th>
                                </tr> 
                            </thead>
                            <tbody>
                                <?php
                                
                                    // $sql = "SELECT voucher1.vo_id,order.order_id,order_date,totalprice FROM cosmetic_shop.voucher1 LEFT JOIN order ON voucher1.order_id = order.order_id";
                                     $sql="SELECT vo_id,order_id,order_date,totalprice FROM cosmetic_shop.voucher1";
                                     $res = mysqli_query($con, $sql);
                                     $i=1;
                                     while($row=mysqli_fetch_assoc($res)): 
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row['vo_id'];?></td>
                                    <td><?php echo $row['order_id'];?></td>
                                    <td><?php echo $row['order_date'];?></td>
                                    <td><?php echo $row['totalprice'];?></td>
                                </tr>
                                <?php $i++; endwhile;?>
                            </tbody>
                        </table>
                </section>
        </main>
    </div>
</div>
  

</body>

</html>