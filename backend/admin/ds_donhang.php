
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
    $sql = "SELECT * FROM orders WHERE tenkh or code_order LIKE '%$search%'  order by orders.id_order DESC";
    $query = mysqli_query($connect, $sql . " LIMIT $offset, $limit");
    $count = mysqli_num_rows(mysqli_query($connect, $sql));
    $totalPage = ceil($count / $limit) ?? 0;
    ?>
<div class="right_col" role="main">
<div class="table">
        <div class="table_header">
            <h2>Danh sách hóa đơn/đơn hàng </h2>
            <div>
            <form action="" class='searchform'>
                    <input type="text" name="txtsearch" placeholder="tìm kiếm" class='form' />
                    
                </form>
                 <!-- <a href="them_donhang.php"><button class="add_new">+ Thêm mới </button></a> -->
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>

                    <tr>
                        <th style="width: 30px;">ID</th>
                        <th >ID đơn</th>
                         <th style="width: 40px;">Ngày đặt</th>
                        <th>Khách hàng </th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ghi chú </th>
                        <th>Trạng thái</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                     $i = 1;
                     while($row = mysqli_fetch_array($query)){?>
                
                    <tr>
                    <td><?php echo $i++?></td>
                    <td><?php echo $row['code_order']?></td>
                     <td><?php echo $row['oderdate']?></td>
                    <td><?php echo $row['tenkh']?></td>
                    <td><?php echo $row['sdt']?></td>
                    <td><?php echo $row['diachi']?></td>
                    <td><?php echo $row['ghichu']?></td>
                    <td>
                        <?php if ($row['order_status']==1){
                        echo '<a href="xuly.php?code='.$row['code_order'].'">Đơn hàng mới </a>';
                        }else{
                            echo 'Thành công';
                        }
                        ?>
                    </td>
                    
                    <td>
                        
                    <a onclick ="return Del('<?php echo$row['tenkh'];?>')" href="xoa_donhang.php?id_order=<?php echo $row['id_order'] ?>" ><button class="mau"><i class="fa fa-trash-o"></i></button></a> 
                        <a href="xemdon.php?code=<?php echo $row['code_order']?>" ><button><i class="fa fa-eye"></i></button></a>
                    </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <!-- phan trang  -->
<div style="clear:both"></div>
<ul class="list_trang">


      <?php 
           for ($i=1; $i <= $totalPage; $i++)
           if($i == $page) {
            echo " <li style=' background:  #94c9de';><a href = 'ds_donhang.php?p=$i' style=' color: white; '> $i </a></li> ";
           } else{
            echo "<li><a href = 'ds_donhang.php?p=$i' '> $i </></li>";
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