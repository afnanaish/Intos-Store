<?php
include('config.php');
if (isset($_POST['update'])){
    // var_dump($_POST);die();
    $ID=$_POST['id'];
    $NAME=$_POST['username'];
    $EMAIL=$_POST['email'];
    $PASS=$_POST['password'];
    $TYPE=$_POST['type'];
    $IMAGE=$_FILES['image'];
    $image_location = $_FILES['image']['tmp_name']; //tmp =امتداد الصورة
    $image_name = $_FILES['image']['name'];
    $image_up = "assets/img/userp/".$image_name;
    $update = "UPDATE user SET username='$NAME' , email='$EMAIL' ,image='$image_up', password='$PASS', type=$TYPE WHERE id='$ID'";  //بدي اعدل بيانات ف أنشأت متغير insert
    mysqli_query($conn , $update);
    if(move_uploaded_file($image_location, '../assets/img/userp/'.$image_name)){ //لما ارفع الملفات
echo"<script>alert('تم تحديث المستخدم بنجاح');</script>";
    }else{
        "<script>alert('لم يتم تحديث المستخدم');</script>";
    }
    header('location:user.php');}

?> 