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
        $id = $_GET['id'];
        $sql_up = "SELECT * FROM o where id=$id ";
        $query_up = mysqli_query($connect, $sql_up);
        $row_up = mysqli_fetch_assoc($query_up);

        if (isset($_POST["sbm"])) {
            $id_hoadon = $_POST["id_hoadon"];
            $tenkh = $_POST["tenkh"];
            $ten = $_POST["ten"];
            $soluong = $_POST["soluong"];
            $gia = $_POST["gia"];
            $ngaydat = $_POST["ngaydat"];

            $themsql = "UPDATE ds_donhang SET id_hoadon='$id_hoadon',tenkh='$tenkh',ten='$ten',
    soluong='$soluong',gia='$gia',ngaydat='$ngaydat' WHERE id='$id'";
            $query = mysqli_query($connect, $themsql);
            header('location: ds_donhang.php');
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
                    <h2>Sửa đơn hàng</h2>
                </div>
                <div class="sp-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="">mã hóa đơn </label>
                                <input type="number" name="id_hoadon" id="" class="form-control" required
                                    value="<?php echo $row_up['id_hoadon']; ?>">
                                <div class="form-group">
                                    <label for="">Tên khách hàng </label>
                                    <input type="text" name="tenkh" id="" class="form-control" required
                                        value="<?php echo $row_up['tenkh']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Tên sản phẩm </label>
                                    <input type="text" name="ten" id="" class="form-control" required
                                        value="<?php echo $row_up['ten']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">số lượng </label>
                                    <input type="number" name="soluong" id="" class="form-control" required
                                        value="<?php echo $row_up['soluong']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Giá sản phẩm</label>
                                    <input type="number" name="gia" id="" class="form-control" required
                                        value="<?php echo $row_up['gia']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Ngày đặt</label>
                                    <input type="datatime" name="ngaydat" id="" class="form-control" required
                                        value="<?php echo $row_up['ngaydat']; ?>">
                                </div>


                                <button name="sbm" class="add_new" type="submit">Sửa đơn hàng</button>
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