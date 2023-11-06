<?php
  include("dbcon.php");
  include("head.php");
  include("navbar.php");
 ?>

<?php
      session_start();
       if(isset($_POST['loginbtn'])){
       $username = $_POST['uname'];
       $userpass = $_POST['upass'];

       $sql = "SELECT * FROM cosmetic_shop.admin WHERE user_name='$username' and user_pass='$userpass'";
       $res = mysqli_query($con,$sql);
       if(mysqli_num_rows($res)==1){
         $row = mysqli_fetch_assoc($res);
         if($username==$row['user_name'] && $userpass==$row['user_pass']){
           $_SESSION['uname'] = $row['user_name'];
           $_SESSION['upass'] = $row['user_pass'];
           $_SESSION['loginbtn']=true;

            header("Location:admin.php");
            echo "<script> alert('Your Order is Successful!')</script>";
         }else{
           echo "Not a member";
         }
       }
      }
    ?>
<body>
<section id="login">
        <div class="container-fluid">
            <div class="row" style="display: flex; justify-content: space-evenly;">
                <div class="col-xl-6">

                </div>
                <div class="col-xl-6" style="margin-left: 600px; text-align: center; margin-right: 100px; margin-top: 100px;">
                  <form action="" method="post">
                    <h3>LOGIN</h3>
                    <div class="inp">
                        <input type="text" name="uname" placeholder="User Name" required style="margin-bottom: 10px;  outline: none; border: 3px solid blueviolet; border-radius: 5px; width: 200px; height: 30px;"><br>
                        <input type="text" name="upass" placeholder="Password" required style="margin-bottom: 10px;  outline: none; border: 3px solid blueviolet; border-radius: 5px; width: 200px; height: 30px;"><br>
                        <!--<label for="exampleFormControlSelect1">Choose User Type</label>
                        <select name="role" class="form-control" style="margin-bottom: 10px; margin-left:250px;  outline: none; border: 3px solid blueviolet; background-color:blueviolet; border-radius: 5px; width: 80px; height: 35px; font-size: 13px; cursor: pointer;">
                        <option value="user" name="user" style="text-align:center;">User</option>
                        <option value="admin" name="admin" style="text-align:center;">Admin</option>
                        </select> -->
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="icons">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div id="login"><input type="submit" value="Login" name="loginbtn" style="margin-top: 10px;  outline: none; background-color: blueviolet; border: 3px solid blueviolet; border-radius: 5px; width: 100px; height: 30px; color: white;"></div>
                  </form>        
               </div>   
           </div> 
        </div>
    </section>

    
   

<?php
    include("footer.php")
?>
</body>