<?php require("modules/hearder.php");?>
<?php require("config/db.php")?>
<link rel="stylesheet" href="csstransp.css">
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
            <!-- sidebar menu -->
            <?php require_once("modules/sidebar.php");?>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
          </div>
        </div>
      

        <!-- page content -->
        <?php
        $sql = "SELECT * FROM danhmucsp ";
        $query_danhmuc = mysqli_query($connect, $sql);
        require_once ("config/db.php");
        if (isset ($_POST["sbm"])) {
            $image = $_FILES["image"]["name"];
            $image_tmp = $_FILES["image"]["tmp_name"];
            $ten = $_POST["ten"];
            $gia = $_POST["gia"];
            $mota = $_POST["mota"];
            $danhmuc= $_POST["id_danhmuc"];
            $themsql = "INSERT INTO ds_sanpham (image,ten,gia,mota,id_danhmuc)
             VALUES ('$image', '$ten', '$gia', '$mota','$danhmuc')";
            $query = mysqli_query($connect, $themsql);
            move_uploaded_file($image, 'image/');
            header('location: ds_sanpham.php');
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
        <div class="right_col" role="main">
        <div class="container-fluid">
            <div class="sp">
                <div class="sp-header">
                    <h2>Thêm sản phẩm</h2>
                    <a style="float: right;" class="btn btn-primary btn-sm" href="ds_sanpham.php" role="button">
                            <span class="thoat"></span> Thoát
                        </a>
                </div>
                <div class="sp-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Ảnh sản phẩm</label>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <label for="">Tên sản phẩm </label>
                            <input type="text" name="ten" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Giá sản phẩm</label>
                            <input type="number" name="gia" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả sản phẩm</label>
                            <input type="text" name="mota" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                    <label for="">danh muc</label>
                    <select class="form-control" name="id_danhmuc" id="">
                        <?php 
                        while($row_sanpham=mysqli_fetch_assoc($query_danhmuc)) {?>
                            <option value="<?php echo $row_sanpham['id_danhmuc'] ;?>"><?php echo $row_sanpham['danhmuc'] ;?></option>
                        <?php } ?>
                        

                    </select>

                </div>

                        <button name="sbm" class="add_new" type="submit">Thêm sản phẩm</button>
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