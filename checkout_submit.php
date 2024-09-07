<?php
session_start();
$duser= $_SESSION['user'];
 include "./backend/admin/config/db.php";
    //$id_user=$duser['id'];
    $id_khachhang= $_SESSION['id_khachhang'];
    $code_order=rand(0,9999);
   if( isset($_POST['dathang'])){

   
    $ten=$_POST['tenkh'];
     $sdt=$_POST['sdt'];
     $diachi=$_POST['diachi'];
     $ghichu=$_POST['ghichu'];
     $thanhtoans=$_POST['thanhtoan'];
   // $total= 0;
 
   $order_status=1;
  
    $query= "INSERT INTO orders (id_khachhang,code_order,tenkh,sdt,diachi,ghichu,thanhtoan,order_status)
     VALUES ('$id_khachhang','$code_order','$ten','$sdt','$diachi','$ghichu','$thanhtoans','$order_status')";
   $cart_query= mysqli_query($connect,$query);

    if($query){
        //$id_orders= mysqli_insert_id($connect);
        foreach( $_SESSION['cart'] as $key=> $values){
                $id_sanpham= $values['id'];
               $soluong=$values['soluong'];
               $gia=$values['gia'];

           $insert_order= "INSERT INTO  orders_detail(code_order,id_sanpham,soluongmua,gia) VALUES( '$code_order',' $id_sanpham','$soluong','$gia')";
           mysqli_query($connect,$insert_order);
        }
     
   
    }
    unset($_SESSION['cart']);    
   header('location:camon.php'); 
   
}
 
?>
