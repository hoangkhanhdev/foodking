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
        require_once ("config/db.php");
        $sql = "SELECT * FROM ds_nhanvien ";
    
        if (isset($_POST["sbm"])) {

            $image = $_FILES["image"]["name"];

            $ten = $_POST["ten"];
            $diachi = $_POST["diachi"];
            $sdt = $_POST["sdt"];
            $ngaysinh = $_POST["ngaysinh"];
            $gioitinh = $_POST["gioitinh"];
            $email = $_POST["email"];
            $chucvu = $_POST["chucvu"];
            $themsql = "INSERT INTO ds_nhanvien (image,ten,diachi,sdt,ngaysinh,gioitinh,email,chucvu ) VALUES  ( '$image','$ten',
    '$diachi','$sdt','$ngaysinh','$gioitinh','$email','$chucvu')";

            $query = mysqli_query($connect, $themsql);
             move_uploaded_file($image, 'image/');
            header('location: ds_nhanvien.php');
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
            .nav-md .container {
                margin-left: 0px;
            }

            .nav-md .container.body .right_col {
                width: 1250px;
            }
        </style>
        <div class="container-fluid">
            <div class="sp">
                <div class="sp-header">
                    <h2>Thêm Nhân viên</h2>
                </div>
                <div class="sp-body">
                    <form method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="">Ảnh </label>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <label for="">Họ và tên</label>
                            <input type="text" name="ten" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" name="diachi" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="number" name="sdt" id="" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Ngày sinh</label>
                            <input type="date" name="ngaysinh" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select name="gioitinh" class="form-control" required>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Khác">Khác</option>
                            </select><br />
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Chức vụ</label>
                            <select name="chucvu" class="form-control" required>
                                <option value="Nhân viên">Nhân viên</option>
                                <option value="Quản lý">Quản lý</option>

                            </select><br />

                        </div>
                        <button name="sbm" class="add_new" type="submit">Thêm nhân viên</button>
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
    <?php require ("modules/script.php");
    ?>
</body>