<?php require ("modules/hearder.php"); ?>
<?php require ("config/db.php") ?>
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
    <!-- top navigation -->
    <?php include ("modules/topNav.php"); ?>
    <!-- /top navigation -->

    <!-- page content -->
    <?php
    $search = "";
    $limit = 6;
    $page = 1;
    if (isset($_REQUEST['p']) && (int) $_REQUEST['p'] >= 1) {
        $page = (int) $_REQUEST['p'];
    }
    if (isset($_GET['txtsearch'])) {
        $search = $_GET['txtsearch'];
    }

    $offset = ($page - 1) * $limit;
    $sql = "SELECT * FROM ds_nhanvien WHERE ten LIKE '%$search%'";
    $query = mysqli_query($connect, $sql . " LIMIT $offset, $limit");
    $count = mysqli_num_rows(mysqli_query($connect, $sql));
    $totalPage = ceil($count / $limit) ?? 0;
    ?>
    <div class="right_col" role="main">
        <div class="table">
            <div class="table_header">
                <h2>Danh sách nhân viên</h2>
                <div>
                    <form action="" method="GET" class='searchform'>
                        <input type="text" name="txtsearch" placeholder="tìm kiếm" class='form' />
                    </form>
                    <a href="them_nhanvien.php"><button class="add_new">+ Thêm thông tin </button></a>
                </div>
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th style="width:25px;">Mã </th>
                            <th >Ảnh</th>
                            <th style="width:35px;" >Họ và tên </th>
                            <th>Địa chỉ </th>
                            <th>SĐT</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th style="width:45px">Email</th>
                            <th >Chức vụ</th>
                            <th style="width:30px">Tùy chỉnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td>
                                    <?php echo $i++ ?>
                                </td>
                              
                            
                                <td><img src="images/<?php echo $row['image'] ?>" alt=""></td>
                                <td>
                                    <?php echo $row['ten'] ?>
                                </td>
                                <td>
                                    <?php echo $row['diachi'] ?>
                                </td>
                                <td>
                                    <?php echo $row['sdt'] ?>
                                </td>
                                <td>
                                    <?php echo $row['ngaysinh'] ?>
                                </td>
                                <td>
                                    <?php echo $row['gioitinh'] ?>
                                </td>
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['chucvu'] ?>
                                </td>
                                <td>
                                    <a href="sua_nhanvien.php?id=<?php echo $row['id'] ;?>"> <button><i
                                                class="fa fa-edit"></i></button></a>
                                    <a onclick="return Del('<?php echo $row['ten']; ?>')"
                                        href="xoa_nhanvien.php?id=<?php echo $row['id'] ?>"><button class="mau"><i
                                                class="fa fa-trash-o"></i></button></a>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- phan trang  -->
<div style="clear:both">
    <ul class="list_trang">


    <?php 
        for ($i=1; $i <= $totalPage; $i++)
        if($i == $page) {
        echo " <li style=' background:  #94c9de';><a href = 'ds_nhanvien.php?p=$i' style=' color: white; '> $i </a></li> ";
        } else{
        echo "<li><a href = 'ds_nhanvien.php?p=$i' '> $i </a></li>";
        }
        ?>
    
    </ul>
    <style>
        ul.list_trang{
            padding: 10px;
            margin: 0;
            list-style: none;
        }
        ul.list_trang li{
            float: left;
        padding: 5px 13px;
            margin: 5px;
            background: #0298cf;
            display: block;
            border-radius: 10px;
        }
        ul.list_trang li a{
            color: black;
            text-align: center;
            text-decoration: none; 
        
        }
    </style>
</div>
            </div>
        </div>
        <!-- footer content -->
        <?php include ("modules/footer.php"); ?>
        <!-- /footer content -->
    </div>
  
    </div>
    </div>
    <script>
        function Del(name) {
            return confirm("Bạn có chăc muốn xóa san phẩm :" + name + "?");
        }
    </script>
    <!-- script -->
    <?php require ("modules/script.php");
    ?>
    <style>
        a button.mau {
            background-color: rgb(231, 75, 75);
        }
    </style>
</body>