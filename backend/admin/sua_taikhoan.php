<?php require ("modules/hearder.php"); ?>
<link rel="stylesheet" href="csstransp.css">

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- sidebar menu -->
            <?php require_once ("modules/sidebar.php"); ?>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
        </div>
    </div>

    <div class="right_col" role="main">
<?php
require_once("config/db.php");
$id=$_GET['id'];
$sql_up="SELECT * FROM ds_taikhoan where id=$id ";
$query_up=mysqli_query($connect,$sql_up);
$row_up=mysqli_fetch_assoc($query_up);
if(isset($_POST["sbm"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $ten=$_POST["ten"];
    $diachi=$_POST["diachi"];
   
    $sdt=$_POST["sdt"];
    $email=$_POST["email"];
    $level = $_POST["level"];
    $suakhsql="UPDATE ds_taikhoan SET username='$username',password='$password',
    ten='$ten',diachi='$diachi',sdt='$sdt',email='$email',level='$level' WHERE id='$id'";
    $query = mysqli_query($connect,$suakhsql);
    header('location: ds_taikhoan.php');
}
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
            .nav-md .container{
             margin-left: 0px;
            }
            .nav-md .container.body .right_col{
                width: 1250px;
            }
          
        </style>
<div class="container-fluid">
    <div class="sp">
        <div class="sp-header">
            <h2>Sửa thông tin tài khoản</h2>
            <a style="float: right;" class="btn btn-primary btn-sm" href="ds_taikhoan.php" role="button">
            <span class="thoat"></span> Thoát
        </a>
        </div>
        <div class="sp-body">
            <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="">Tên đăng nhập</label>
                    <input type="text" name="username" id="" class="form-control" required value="<?php echo $row_up['username']; ?>"> 
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="text" name="password" id="" class="form-control" required value="<?php echo $row_up['password']; ?>"> 
                </div>
               
                <div class="form-group">
                    <label for="">Họ và tên</label>
                    <input type="text" name="ten" id="" class="form-control" required value="<?php echo $row_up['ten']; ?>"> 
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="diachi" id="" class="form-control"required value="<?php echo $row_up['diachi']; ?>"> 
                </div>
               
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="sdt" id="" class="form-control"required value="<?php echo $row_up['sdt']; ?>"> 
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" id="" class="form-control"required value="<?php echo $row_up['email']; ?>"> 
                </div>
                <div class="form-group">
                     <label>Quyền</label> 
                     <select name="level"  class="form-control" required value="<?php echo $row_up['level']; ?>">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                             
                    </select><br/>
                </div>
                <button name="sbm" class="add_new" type="submit">Sửa thông tin</button>
            </form>
        </div>
    </div>
</div>
      <!-- footer content -->
      <?php include ("modules/footer.php"); ?>
        <!-- /footer content -->
    </div>
    </script>
   <!-- script -->
   <?php require("modules/script.php");
   ?>
  </body>