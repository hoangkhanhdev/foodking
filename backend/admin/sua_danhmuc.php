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
$id=$_GET['id_danhmuc'];
$sql_up="SELECT * FROM danhmucsp where id_danhmuc=$id ";
$query_up=mysqli_query($connect,$sql_up);
$row_up=mysqli_fetch_assoc($query_up);
if(isset($_POST["sbm"])){
    $danhmuc=$_POST["danhmuc"];
   
    $suakhsql="UPDATE danhmucsp SET danhmuc='$danhmuc' WHERE id_danhmuc='$id'";
    
    $query = mysqli_query($connect,$suakhsql);
    header('location: danhmuc.php');
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
            <h2>Sửa tên danh mục</h2>
            <a style="float: right;" class="btn btn-primary btn-sm" href="danhmuc.php" role="button">
            <span class="thoat"></span> Thoát
        </a>
        </div>
        <div class="sp-body">
            <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="danhmuc" id="" class="form-control" required value="<?php echo $row_up['danhmuc']; ?>"> 
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