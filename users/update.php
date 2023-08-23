<?php
session_start();

 
$type = $_SESSION['type'];
if(!(isset($type) && $type==1)){
    header('location:home.php');
   
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width , initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intos Store | تعديل معلومات مستخدم</title>
  <link rel="stylesheet" href="../assets/css/index.css">   <!---------------index.css  ------>
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
                <li> <a href="../products/product.php">Products</a></li>
                <li> <a href="../about.html">About us</a></li>
                <li> <a href="../contact.html">Contact us</a></li>
                <li> <a href="users.php">Users</a></li>
                <li> <a href="../index.php">Accounts</a></li>

            </ul>
        </nav>
        <a href="cart.html"><img src="../assets/img/cart.jpg" width="30px" height="25px"></a>
        <img src="../assets/img/menu.jpg" class="menu-icon" onclick="menutoggle()">
    </div> 
<!-------------------------------php for edit------------------------>
 <?php
 include('config.php');
 $ID=$_GET['id'];
 $up = mysqli_query($conn, "select *  from user where id=$ID");
 $data = mysqli_fetch_array($up);
 
 ?>
<!-- crud for edit Users -->
<center>
     <div class="main ">
         <form action="up.php" method="post" enctype="multipart/form-data" >
        <h2>تعديل معلومات المستخدم</h2> 
        <input type="text" name="id" value="<?php echo $data['id']; ?>" placeholder="id">
        <br>
        <input type="text" name="username" value="<?php echo $data['username']; ?>" placeholder="username">
        <br>
        <input type="text" name="email" value="<?php echo $data['email']; ?>" placeholder="email">
        <br>
        <input type="text" name="password" placeholder="Password">
        <br>
         <input type="file" id="file" name="image" style="background-color: #fff;" placeholder="image">
         <br>
         <!-- <label for="file">Edit user image</label> <br> -->

        <!-- <input type="text" name="type" placeholder="Type" > -->
         <label for="type"> type :</label>
         <select name="type" id="type" style="width:50%;">
            <option value="0">User

            </option>
            <option value="1">Admin</option>
        </select>
        <br>
        <button name="update"> Edit user informatio ✅</button>
        <br><br>
       <b> <a href="product.php"> show all Users</a></b>
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

