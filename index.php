<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

include 'config.php';
session_start();
if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    
 
    $select = mysqli_query($conn, "SELECT * FROM `user` WHERE username = '$username' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
       $row = mysqli_fetch_assoc($select);//var_dump($row);die();
       $_SESSION['user_id'] = $row['id'];
       $_SESSION['type'] = $row['type'];
       if($row['type']==0)header('location:home.php');
       else if($row['type']==1)header('location:products/indexadmin.php');
    }else{
       $message[] = 'incorrect password or email!';
    }
 
 }
 

if(isset($_POST['reg'])){
 
    $name = $_POST['username'];
    $email = $_POST['email'];  
    $pass = ($_POST['password']);
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name']; //tmp =امتداد الصورة
    $image_name = $_FILES['image']['name'];
    $image_up = "assets/img/userP/".$image_name;
    $insert = "INSERT INTO user (username,password,email , image)
     VALUES ('$name', '$pass','$email', '$image_up') ";                                //بدي ارسل بيانات ف أنشأت متغير insert
    mysqli_query($conn , $insert);
// هاد php

 
   
     } 

//  هون كود الوورد

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
            <img src="assets/img/logo.jpg" width="125px">
        </div>
        <nav>
            <ul id="MenuItems">
            <li> <a href="home.php">Home</a></li>
              <li> <a href="about.html">About</a></li>
                <li> <a href="contact.html">Contact us</a></li>
                <li> <a href="index.php">Login / Register</a></li>

            </ul>
        </nav>
        <img src="assets/img/cart.jpg" width="30px" height="25px">
        <img src="assets/img/menu.jpg" class="menu-icon" onclick="menutoggle()">
    </div>

    </div>
   </div>
    <!----------------account page----------------->
<div class="account-page">
    <div class="container">
        <div class="row">

            <div class="col_2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="indicator">
                    </div>
                    
                    <form id="loginform" action="index.php" method="post">
                        <input type="text" name="username" required placeholder="User name">
                        <input type="password" name="password" required placeholder="Password">
                        <button type="submit" name="login" class="btn">Login </button>
                        <a href="#">Forget password</a>
                    </form>
<!-- هاد html -->
                    <form id="regform" action="index.php" method="post"  enctype="multipart/form-data">
                        <input type="text" name="username" required placeholder="User name"> 
                        <input type="email" name="email" required placeholder="Email">
                        <input type="password" name="password" required placeholder="Password"> 
                        <input type="file" name="image" required >
                           <button type="submit" name="reg" class="btn">Register</button>
                    </form>
                </div>
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
        <!--------------js for toggle form---------------->
        <script>
            var loginform=document.getElementById("loginform");
            var regform=document.getElementById("regform");
            var indicator=document.getElementById("indicator");
          
            function register(){
                regform.style.transform="translatex(0px)";
                loginform.style.transform="translatex(0px)";
                indicator.style.transform="translatex(100px)";
            }
            function login(){
                regform.style.transform="translatex(300px)";
                loginform.style.transform="translatex(300px)";
                indicator.style.transform="translatex(0px)";

            }
        </script>
</body>
</html>
