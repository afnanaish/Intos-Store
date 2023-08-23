<?php
session_start();
$type = $_SESSION['type'];
if(!(isset($type) && $type==1)){
    header('location:home.php');
   
};
?>


<?php
include('config.php');

 $ID = $_GET['id'];
 mysqli_query($conn, "DELETE FROM PRODUCTS WHERE id='$ID' ");
 header('location:product.php');

//  a.onclick()
//  { //لما ارفع الملفات
//     echo"<script>alert('تم اضافة المنتج بنجاح');</script>";
//         }else{
//             "<script>alert('لم يتم اضافة المنتج');</script>";
//         }
//         header('location:indexadmin.php');
?>