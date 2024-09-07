<?php include './view/header.php';

$id_khachhang= $_SESSION['id_khachhang'];
 include "./backend/admin/config/db.php";

?>
<link rel="stylesheet" href="lsdh.css">

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <!-- page content -->
            <?php
          
           
            $limit = 6;
            $page = 1;
            if (isset($_REQUEST['p']) && (int) $_REQUEST['p'] >= 1) {
                $page = (int) $_REQUEST['p'];
            }
            $offset = ($page - 1) * $limit;
            $sql = "SELECT * FROM orders WHERE orders.id_khachhang='$id_khachhang'  order by orders.id_order DESC" ;
            $query = mysqli_query($connect, $sql . " LIMIT $offset, $limit");
            $count = mysqli_num_rows(mysqli_query($connect, $sql));
            $totalPage = ceil($count / $limit) ?? 0;
            ?>

            <div class="table">
                <div class="table_header">
                    <h4>Lịch sử mua hàng </h4>
          
                </div>
                <div class="table_section">
                    <table>
                        <thead>

                            <tr>
                                <th style="width: 20px;">ID</th>
                                <th style="width: 20px;">ID đơn</th>
                                <th style="width: 30px;">Ngày đặt</th>
                                <th>Khách hàng </th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Ghi chú </th>
                                  <th>Hình thức thanh toán </th>
                                <th style="width: 40px;">Trạng thái</th>
                              
                                <th>Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($query)) { ?>

                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $row['code_order'] ?></td>
                                    <td><?php echo $row['oderdate'] ?></td>
                                    <td><?php echo $row['tenkh'] ?></td>
                                    <td><?php echo $row['sdt'] ?></td>
                                    <td><?php echo $row['diachi'] ?></td>
                                    <td><?php echo $row['ghichu'] ?></td>
                                    <td><?php echo $row['thanhtoan'] ?></td>
                                    <td>
                                        <?php if ($row['order_status'] == 1) {
                                            echo 'Đang xử lý | Đang giao ';
                                        } else {
                                            echo 'Thành công';
                                        }
                                        ?>
                                    </td>

                                    <td>

                                        <!-- <a onclick="return Del('<?php echo $row['code_order']; ?>')"
                                            href="xoa_lsdh.php?id_order=<?php echo $row['id_order'] ?>"><button
                                                class="mau"><i class="fa fa-trash"></i></button></a> -->
                                        <a href="xem_lichsudonhang.php?code=<?php echo $row['code_order'] ?>"><button><i
                                                    class="fa fa-eye"></i></button></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- phan trang  -->
                    <div style="clear:both"></div>
                    <ul class="list_trang">


                        <?php
                        for ($i = 1; $i <= $totalPage; $i++)
                            if ($i == $page) {
                                echo " <li style=' background:  #94c9de';><a href = 'lichsudonhang.php?p=$i' style=' color: white; '> $i </a></li> ";
                            } else {
                                echo "<li><a href = 'lichsudonhang.php?p=$i' '> $i </></li>";
                            }
                        ?>

                    </ul>
                    <style>
                        ul.list_trang {
                            padding: 10px;
                            margin: 0;
                            list-style: none;
                        }

                        ul.list_trang li {
                            float: left;
                            padding: 5px 13px;
                            margin: 5px;
                            background: #0298cf;
                            display: block;
                            border-radius: 10px;
                        }

                        ul.list_trang li a {
                            color: black;
                            text-align: center;
                            text-decoration: none;

                        }
                    </style>

                </div>
            </div>

            <!-- footer content -->
            <?php
            include './view/footer.php';
            ?>
            <!-- /footer content -->
        </div>
    </div>
    </div>
    </div>
    <script>
        function Del(name) {
            return confirm("Bạn có chăc muốn xóa  :" + name + "?");
        }
    </script>
    <!-- script -->
    <style>
        a button.mau {
            background-color: rgb(231, 75, 75);
        }
    </style>
</body>