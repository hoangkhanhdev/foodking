
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
        <!-- top navigation -->
       <?php include("modules/topNav.php"); ?>
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
    $sql = "SELECT * FROM ds_donhang WHERE ten LIKE '%$search%'";
    $query = mysqli_query($connect, $sql . " LIMIT $offset, $limit");
    $count = mysqli_num_rows(mysqli_query($connect, $sql));
    $totalPage = ceil($count / $limit) ?? 0;
    ?>
<div class="right_col" role="main">
<div class="table">
        <div class="table_header">
            <h2>Danh sách hóa đơn/đơn hàng </h2>
            <div>
            <form action="" method="GET" class='searchform'>
                    <input type="text" name="txtsearch" placeholder="tìm kiếm" class='form' />
                    
                </form>
                 <a href="them_donhang.php"><button class="add_new">+ Thêm mới </button></a>
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>

                    <tr>
                        <th style="width: 45px;">ID</th>
                        <th>ID đơn</th>
                        <th>Tên khách hàng </th>
                        <th>Số lượng</th>
                        <th>Giá tiền </th>
                        <th>Trạng thái</th>
                        <th>Ngày đặt</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                     $i = 1;
                     while($row = mysqli_fetch_array($query)){?>
                
                    <tr>
                    <td><?php echo $i++?></td>
                    <td><?php echo $row['id_hoadon']?></td>
                    <td><?php echo $row['tenkh']?></td>
                    <td><?php echo $row['ten']?></td>
                    <td><?php echo $row['soluong']?></td>
                  
                    <td><?php echo $row['gia']?></td>
                      <td>thành công</td>
                    <td><?php echo $row['ngaydat']?></td>
                    <td>
                        <a href="sua_donhang.php?id=<?php echo $row['id']?>"> <button><i class="fa fa-edit"></i></button></a>  
                        <a onclick="return Del('<?php echo$row['ten'];?>')" href="xoa_donhang.php?id=<?php echo $row['id']?>"><button class="mau"><i class="fa fa-trash-o"></i></button></a> 
                        <a><button><i class="fa fa-eye"></i></button></a>
                    </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <?php require_once ("modules/phantrang.php") ?>
        </div>
    </div>
 
       <!-- footer content -->
       <?php include("modules/footer.php"); ?>
        <!-- /footer content -->
      </div>
   </div>
 </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chăc muốn xóa  :"+ name + "?");
    }
</script>
   <!-- script -->
   <?php require("modules/script.php");
   ?>
      <style>
    a button.mau{
        background-color:rgb(231, 75, 75) ;
    }
  
   </style>
   </body>