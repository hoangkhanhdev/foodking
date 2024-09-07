<?php

session_start();
ob_start();

include "./backend/admin/config/db.php";

if(isset($_POST['submit'])&& $_POST["username"] !=''&& $_POST["password"] !=''){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=0;
    $password=md5($password);
    $sql= "SELECT *FROM ds_taikhoan WHERE username='$username' AND password='$password'";
    $user =mysqli_query($connect,$sql);
   $row=mysqli_fetch_array($user);
    $objectuser= array ($username,$password);
   $_SESSION['user']=$row;
   $_SESSION['id_khachhang']=$row['id'];
   if($row['level']=="user"){
    $_SESSION['objectuser']=$objectuser;
    //$_SESSION['user']=$row['id'];
        if(isset($_GET['action'])){
            $action=$_GET['action'];
            header('location:'.$action.'.php');
        }else{
                header("location:index.php");
        }
    }elseif($row['level']=="admin"){
        header("location:backend/admin");
        $_SESSION['objectuser']=$objectuser;
    }
    else{
        $_SESSION['thongbao']="sai tên đăng nhập hoặc mật khẩu";
        header("location:dangnhap.php");
        
       
    }
}else{
$_SESSION['thongbao']="vui long nhập đầy đủ thông tin";
    header("location:dangnhap.php");
}
 

?>