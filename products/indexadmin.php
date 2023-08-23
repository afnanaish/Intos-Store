<?php
session_start();
// if(!isset($user_id)){
//     header('location:../index.php');
//  };
 
$type = $_SESSION['type'];
if(!(isset($type) && $type==1)){
    header('location:../home.php');
   
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width , initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intos Store | اضافة منتجات</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" rel="stylesheet">

</head>
<body>

<div class="header"><div class="container">
         <div class="navbar">
        <div class="logo">
            <a href="index.html"><img src="../assets/img/logo.jpg" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li> <a href="../home.php">Home</a></li>
                <li> <a href="product.php">Products</a></li>
                <!-- <li> <a href="about.php">الطلبات</a></li> -->
                <li> <a href="../contact.html"> Contact us</a></li>
                <li> <a href="indexadmin.php">إضافة منتجات</a></li>
                <li> <a href="../users/indexadmin.php">إضافة مستخدمين</a></li>


            </ul>
        </nav>
        <a href="cart.html"><img src="../assets/img/cart.jpg" width="30px" height="25px"></a>
        <img src="assets/../img/menu.jpg" class="menu-icon" onclick="menutoggle()">
    </div> 

<!-- crud for insert users -->
<center>
     <div class="main">
         <form action="insert.php" method="post" enctype="multipart/form-data">
        <h2>إضافة منتجات</h2> 
        <input type="text" name="name" placeholder="Product name">
        <br>
        <input type="text" name="price" placeholder="Product price">
        <br>
        <input type="file" id="file" name="image"  style="background-color: #fff;">
        <!-- <label for="file">upload image</label> <br> -->
        <button name="upload" class="btn"> Add product</button>
        <br>
        <a href="product.php"> show all products</a>
        </form>
     </div>


</center>





    

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <a href="#"><h3>Download our App</h3></a>
                <p>Download App for Android and ios mobile phone</p>
                <div class="app-logo">
                    <img src="../assets/img/play-store.jpg">
                    <img src="../assets/img/app-store.jpg">
                </div>
            </div>

            <div class="footer-col-2">
                   <img src="../assets/img/logo.jpg" width="125px">
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
                <hr>
                <p class="copy-right">Copyright 2022 - Intos Art</p>
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
            function validateFileType(){
                var fileName=document.getElementById("fileName").value;
                var idxDot=fileName.lastIndexOf(".")+1;
                var exfile =fileName.substr(idxDot , fileName.length).toLowerCase();
                if(extFile=="jpg"|| exfile=="png"){
                    }else{
                        alert("only jpg/png files are allowed!");
                    }

            }
        </script>
     
</body>
</html>

