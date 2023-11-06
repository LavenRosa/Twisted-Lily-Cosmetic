<?php
    include("head.php");
    
?>
<head>
    <link rel="stylesheet" href="shoppingcart.css">
</head>
<body>
    <?php
    include("navbar.php");
    include("home.php");
    ?>

   

    <section id="review">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row2">
                        <div class="cols">
                            <div class="col1">
                                <div class="incol d-flex">
                                    <div class="col2">
                                        <img src="image/col4.jpg" alt="" style="width: 400px; height: 230px;">
                                    </div>
                                    <div class="col3">
                                        <img src="image/col2.jpg" alt="" style="width: 400px; height: 230px;">
                                        
                                    </div>
                                </div>
                                <div class="col4">
                                    <img src="image/col3.png" alt="" style="width: 800px; height: 250px;">
                                </div>
                            </div>
                        </div>
                        <div class="col5">
                            <img src="image/col5.jpg" alt="" style="width: 350px; height: 500px;"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="circle">
        <div class="container-fluid">
            <div class="row" style="margin-left: 30px;">
                    
                    <div class="col-xl-2">
                    <img src="image/c1.png" alt="">
                    <span style="font-family: 'Poppins', sans-serif;">SERUMS</span>
                </div>
                <div class="col-xl-2">
                    <img src="image/circle2.png" alt="">
                    <span>CREMES</span>
                </div>
                <div class="col-xl-2">
                    <img src="image/circle3.png" alt="">
                    <span>EMULSIONS</span>
                </div>
                <div class="col-xl-2">
                    <img src="image/circle4.png" alt="">
                    <span>CLEANSERS</span>
                </div>
                <div class="col-xl-2">
                    <img src="image/c5.png" alt="">
                    <span>CUSHIONS</span>
                </div>
                <div class="col-xl-2">
                    <img src="image/circle6.png" alt="">
                    <span>UV PROTECTION</span>
                </div>
            </div>
        </div>
    </section>

    <section id="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <img src="image/card1.webp" alt=""> 
                    <span>EYE AND LIP CARE</span>
                    <a href="eyeandlipcare.php"><button class="btn" style="outline: none; background-color: blueviolet; color:white; border-radius:10px; margin-top:10px; margin-left:180px;">Discover More</button></a>
                </div>
                <div class="col-xl-6">
                    <img src="image/card2.webp" alt="">
                    <span>TONER COLLECTION</span>
                    <a href="toner.php"><button class="btn" style="outline: none; background-color: blueviolet; color:white; border-radius:10px; margin-top:10px; margin-left:180px;">Discover More</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <img src="image/card3.webp" alt="">
                    <span>SRUBS AND MASKS</span>
                    <a href="srubsandmask.php"><button class="btn" style="outline: none; background-color: blueviolet; color:white; border-radius:10px; margin-top:10px; margin-left:180px;">Discover More</button></a>
                </div>
                <div class="col-xl-6">
                    <img src="image/card4.jpg" alt="">
                    <span>SERUMS</span>
                    <a href="serums.php"><button class="btn" style="outline: none; background-color: blueviolet; color:white; border-radius:10px; margin-top:10px; margin-left:180px;">Discover More</button></a>
                </div>
            </div>
        </div>
    </section> 

   <?php
    include("footer.php");
   ?>
    <!-- <script src="main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>