<?php
    include("dbcon.php");
    include("head.php");
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

    <div class="container-fluid">
        <div class="row g-0">
            <nav class="col-2 pe-3" style="background-color: blueviolet;">
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
               
                
            </nav>
            <main class="col-10" >
                <section id="item">
                    <h3 style="text-align:center;">ITEM FORM</h3>
                    
                </section>     
                <section id="category">
                    
                </section>
                <section id="promotion">
                
                </section>
                <section id="user">
                
                </section>
                <section id="order">
               
                </section>
                <section id="sale">

                </section>
        </main>
    </div>
</div>
  

</body>

</html>