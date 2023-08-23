<?php
session_start();
$type = $_SESSION['type'];
if(!(isset($type) && $type==1)){
    header('location:home.php');
   
};
?>

<?php

include('config.php');

include('config.php');
if (isset($_POST['upload'])){
    $ID=$_POST['id'];
    $NAME=$_POST['username'];
    $EMAIL=$_POST['email'];
    $PASS=$_POST['password'];
    $IMAGE=$_FILES['image'];
    $TYPE=$_POST['type'];
    $image_location = $_FILES['image']['tmp_name']; //tmp =امتداد الصورة
    $image_name = $_FILES['image']['name'];
    $image_up = "assets/img/userp/".$image_name;
    $insert = "INSERT INTO user (username,email,image ,password,type)
     VALUES ('$NAME', '$EMAIL', '$image_up',  '$PASS',   '$TYPE') ";  //بدي ارسل بيانات ف أنشأت متغير insert
   $check= mysqli_query($conn , $insert);

    move_uploaded_file($image_location, '../assets/img/userp/'.$image_name);
  header('location:indexadmin.php');
//     if( $check var_dump( $check);die(); ){ //لما ارفع الملفات
// echo"<script>alert('تم اضافةالمنتج بنجاح');</script>";
//     }else{
//         "<script>alert('لم يتم اضافة المنتج');</script>";
//     }
//   
}
    
?>

<!-- header('location:user.php');
echo"<script>alert('تم اضافةالمنتج بنجاح');</script>"; -->