<?php
/*session_start();
$type = $_SESSION['type'];
if(!(isset($type) && $type==1)){
    header('location:home.php');
   
};*/
?>

<?php

include('../config.php');

if (isset($_POST['ord'])){
    $ADDRESS=$_POST['deliveryAddress'];
    $MOBILE=$_POST['mobileNumber'];
    $userID= $_POST['userID'];
    $prodID= $_POST['prodID'];

$date = date('d-m-y h:i:s');
    $insert = "INSERT INTO orders (userID,productID, deliveryAddress ,MobileNumber ,orderDate)
     VALUES ('$userID', '$prodID', '$ADDRESS','$MOBILE' , '$date') ";  //بدي ارسل بيانات ف أنشأت متغير insert
 mysqli_query($conn , $insert);


            header('location:../products/Uproducts.php');}
    
?>
