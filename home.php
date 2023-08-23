<?php

include 'config.php';
// session_start();
// $user_id = $_SESSION['user_id'];
//////////////////////////////////////هاي عشان ما يفوت حدا عالصفحة بدون تسجيل دخول

// if(!isset($user_id)){
//    header('location:index.php');
// };
// ///////////////////////
// if(isset($_GET['logout'])){
//    unset($user_id);
//    session_unset();
//    session_destroy();
//    header('location:index.php');
// };



?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width , initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intos Store</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" rel="stylesheet">

</head>
<body>

<div class="header"><div class="container">
         <div class="navbar">
        <div class="logo">
            <a href="index.html"><img src="assets/img/logo.jpg" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li> <a href="home.php">Home</a></li>
                <li> <a href="products/product.php">Products</a></li>
                <li> <a href="about.html">About us</a></li>
                <li> <a href="products/Uproducts.php">انشاء طلب جديد</a></li>
                <li> <a href="index.php">Login / Register</a></li>
<form>        <li> <button name="logout" href="logout.php">Log out</button></li>
</form>
            </ul>
        </nav>
        <a href="cart.html"><img src="assets/img/cart.jpg" width="30px" height="25px"></a>
        <img src="assets/img/menu.jpg" class="menu-icon" onclick="menutoggle()">
    </div> 

    <!-- 
        *********************
         <i class="fa-thin fa-bag-shopping"></i> 
        *********************
        -->
    
    <div class="row">
        <div class="col_2">
            <h1>Get your special cup from our store!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius molestias ipsam rem magni? </p>
            <a href="product.html" class="btn">Explore Now &#10137;</a>
        </div>
        <div class="col_2">
            <img src="assets/img/background.jpg"class="img20" width="400px">
        </div>
    </div>
    </div>
   </div>
    

   <!-- feature categories -->

   <div class="categories">
       <div class="small_container">
       <div class="row">
           <div class="col_33">
               <img src="assets/img/categ1.jpg">
           </div>
           <div class="col_33">
            <img src="assets/img/categ2.jpg">
        </div>
        <div class="col_33">
            <img src="assets/img/categ3.jpg">
        </div>
       </div>
     </div>
     
   </div>
 

   <!-- feature products -->


  
    <div class="small_container">
             <h2 class="title">Feature products</h2>
    <div class="row">
        <div class="col_4">
            <img src="assets/img/prod3.jpg">
            <h4> Computer Eng's Mug</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>

            </div>
            <p>$50</p>
        </div>
        <div class="col_4">
           <a href="product-details.html"> <img src="assets/img/prod1.jpg"></a>
           <a href="product-details.html"> <h4> Computer Eng's Mug</h4></a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>

            </div>
            <p>$50</p>
        </div>
        
        <div class="col_4">
            <img src="assets/img/prod2.jpg">
            <h4> Computer Eng's Mug</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-0" ></i>
                <i class="fa fa-star-o"></i>

            </div>
            <p>$50</p>
        </div>

        <div class="col_4">
            <img src="assets/img/prod4.jpg">
            <h4> Computer Eng's Mug</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half" ></i>
                <i class="fa fa-star-o"></i>

            </div>
            <p>$50</p>
        </div>


    </div>
    <h2 class="title">Latest products</h2>
    <div class="row">
        <div class="col_4">
            <img src="assets/img/prod5.jpg">
            <h4> Computer Eng's Mug</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>

            </div>
            <p>$50</p>
        </div>
        <div class="col_4">
            <img src="assets/img/prod6.jpg">
            <h4> Computer Eng's Mug</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>

            </div>
            <p>$50</p>
        </div>
        
        <div class="col_4">
            <img src="assets/img/prod7.jpg">
            <h4> Computer Eng's Mug</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-0" ></i>
                <i class="fa fa-star-o"></i>

            </div>
            <p>$50</p>
        </div>

        <div class="col_4">
            <img src="assets/img/prod8.jpg">
            <h4> Computer Eng's Mug</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half" ></i>
                <i class="fa fa-star-o"></i>

            </div>
            <p>$50</p>
        </div>

        

    </div>
  </div>
  
<!-- offer -->
<div class="offer">
    <div class="small_container">
    <div class="row">
        <div class="col_2"> <img src="assets/img/offer.jpg" class="offer-img"></div>
        <div class="col_2">
            <p>Exclusively available on Intos Store</p>
            <h1>Eid collection</h1>
            <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi perferendis aliquam reprehenderit officia deserunt, ratione voluptates suscipit distinctio harum corrupti repellat molestias corporis. Illo nemo reiciendis, facilis reprehenderit eum hic!</small>
            <br><a href="#" class="btn">Buy Now &#8594; </a>
        </div>
    </div>
</div>
</div>

<!-- testimonial -->
<div class="testimonial">
    <div class="small_container">
        <div class="row">
            <div class="col_3">
                <i class="fa fa-quote-left" ></i>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, quia.</p>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half" ></i>
                    <i class="fa fa-star-o"></i>
    
                </div>
                <img src="assets/img/user1.jpg">
                <h3>Reem Ahmad</h3>
           
            </div>
            <div class="col_3">
                <i class="fa fa-quote-left" ></i>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, quia.</p>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half" ></i>
                    <i class="fa fa-star-o"></i>
    
                </div>
                <img src="assets/img/user2.jpg">
                <h3>Sally Maher</h3>
           
            </div>

            <div class="col_3">
                <i class="fa fa-quote-left" ></i>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, quia.</p>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half" ></i>
                    <i class="fa fa-star-o"></i>
    
                </div>
                <img src="assets/img/user3.jpg">
                <h3>Leen Ali</h3>
             </div>
        </div>
    </div>
</div>

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <a href="#"><h3>Download our App</h3></a>
                <p>Download App for Android and ios mobile phone</p>
                <div class="app-logo">
                    <img src="assets/img/play-store.jpg">
                    <img src="assets/img/app-store.jpg">
                </div>
            </div>

            <div class="footer-col-2">
                   <img src="assets/img/logo.jpg" width="125px">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
           

            <div class="footer-col-3" >
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Tiktok</li>
                    <li>Snapchat</li>
                </ul>
                </div>
                </div>
                
                <p class="copy-right">Copyright 2022 - Intos Art </p>
            </div>
        </div>

        <!-- js for menu -->
        <script>
            var MenuItems=document.getElementById("MenuItems");
            MenuItems.style.maxHeight="0px";
            function menutoggle (){
                if (MenuItems.style.maxHeight="0px")
                {
                    MenuItems.style.maxHeight ="200px";
                }
                else{
                    MenuItems.style.maxHeight ="0px";

                }
            }
        </script>
</body>
</html>