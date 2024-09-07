<?php
	include "./backend/admin/config/db.php";
     session_start();
     

      if (isset($_POST["dangky"])&& $_POST["username"] !=''&& $_POST["password"] !='' && $_POST["ten"] !=''&& $_POST['ngaysinh'] !='' && $_POST["diachi"] !=''&& $_POST['gioitinh'] !='' && $_POST["email"] !='' && $_POST["sdt"] !='' && $_POST['rpassword'] !='' ) {

          $username = $_POST["username"];
          $password = $_POST["password"];
          $ten = $_POST["ten"];
          $ngaysinh=$_POST['ngaysinh'];
          $diachi = $_POST["diachi"];
          $gioitinh=$_POST['gioitinh'];
          $email = $_POST["email"];
          $sdt = $_POST["sdt"];
          $rpassword=$_POST['rpassword'];
          $level='user';   
        
          if($password != $rpassword){
            
            $_SESSION['thongbao']="Mật khẩu nhập lại không chính xác";
            header("location:dangky.php");
            die();
          }
          $sql = "SELECT * FROM ds_taikhoan WHERE username='$username'";
          $old=mysqli_query($connect,$sql);
          $password=md5($password);
          
       if( mysqli_num_rows($old)>0){
        $_SESSION['thongbao']="Tên đăng nhập đã tồn tại";
        header("location:dangky.php");
        die();
       } 
       $sql="INSERT INTO ds_taikhoan (username,password,ten,ngaysinh,diachi,gioitinh,sdt,email,level)
        VALUES ('$username','$password', '$ten','$ngaysinh', '$diachi','$gioitinh', '$sdt','$email','$level')";
        mysqli_query($connect, $sql);
    
       //$_SESSION['user']=mysqli_insert_id($connect);
        $_SESSION['thongbao']= "Đã đăng ký thành công";
         header("location:dangnhap.php");
      }else{
        $_SESSION['thongbao']="vui lòng nhập đầy đủ thông tin";
        header("location:dangky.php");
      }
           
      
    ?>