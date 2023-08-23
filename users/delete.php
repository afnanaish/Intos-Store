<?php
include('config.php');

 $ID = $_GET['id'];
 mysqli_query($conn, "DELETE FROM user WHERE id='$ID' ");
 header('location:user.php');

//  a.onclick()
//  { //لما ارفع الملفات
//     echo"<script>alert('تم اضافة المنتج بنجاح');</script>";
//         }else{
//             "<script>alert('لم يتم اضافة المنتج');</script>";
//         }
//         header('location:indexadmin.php');
?>