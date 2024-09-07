<?php 
require("config/db.php");
if( isset($_GET['code'])){
    $code=$_GET['code'];
    $sql= "UPDATE orders set order_status = 0 where code_order='$code'";
    $query=mysqli_query( $connect,$sql);
header('location:ds_donhang.php');
}
?>
