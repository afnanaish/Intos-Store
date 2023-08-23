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
    <title>Intos Store |  Users</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css " rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('هل تريد التأكد من حذف هذا المنتج؟?');
}
</script>
<style> 
 .prod{
     width: 100%;
 }
 .btn{
    width: 124px;
    margin: 0px 0px;
    transition: background .5s; 
    padding-right: 6px;
    padding-left: 6px;

   }
   .btn-danger:hover{
    background: red;
} 
   .btn-primary:hover{
    background: blue;
}
 .card{
        float:right;
        margin-top: 10px;
        margin-left: 10px;
        height:fit-content;
    }
    .card img, svg {
    vertical-align: middle;
    height: 300px;
    }
    .footer{
        display: block;
        padding-top: 5000px;
    }
    

  </style>

</head>
<body>

<div class="header">
    <div class="container">
         <div class="navbar">
        <div class="logo">
            <a href="index.html"><img src="../assets/img/logo.jpg" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li> <a href="../home.php">Home</a></li>
                <li> <a href="product.php">Users</a></li>
                <li> <a href="../about.html">About us</a></li>
                <li> <a href="indexadmin.php">إضافة مستخدمين </a></li>
                <li> <a href="../index.php">Login /Register</a></li>

            </ul>
        </nav>
        <a href="cart.html"><img src="../assets/img/cart.jpg" width="30px" height="25px"></a>
        <img src="../assets/img/menu.jpg" class="menu-icon" onclick="menutoggle()">
    </div> 
<div class='prod'>
<center>
    <h2>All Users</h2>
    <?php
include('config.php');
$result=mysqli_query($conn ,"SELECT * FROM user ");  // رح يجبلي كل البيانات  result 
while($row= mysqli_fetch_array($result)){// يحط البيانات في اريه 
    
echo"
<center> 
<main>
    <div class='card' style='width: 18rem;'>
       <img src='../".$row['image']."' class='card-img-top' > 
       <div class='card-body'>
          <h5 class='card-title'>$row[username]</h5>
          <p class='card-text'>$row[email]</p>
          <p class='card-text'>$row[password]</p>
          <p class='card-text'>";if($row['type']==0)echo "user"; else if($row['type']==1)echo "admin"; echo"</p>
          <a href='delete.php?id=$row[id]' class='btn btn-danger' onclick='return checkDelete()'   >Delete User</a>
          <a href='update.php?id=$row[id]' class='btn btn-primary'>Edit User</a>
       </div>
    </div>
 
</main> 
</center>
";
}
?>


</center>
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

