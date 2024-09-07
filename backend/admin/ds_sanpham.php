
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
    $sql = "SELECT * FROM ds_sanpham inner join danhmucsp on ds_sanpham.id_danhmuc=danhmucsp.id_danhmuc WHERE ten or danhmuc LIKE '%$search%'  order by ds_sanpham.id DESC";
    $query = mysqli_query($connect, $sql . " LIMIT $offset, $limit");
    $count = mysqli_num_rows(mysqli_query($connect, $sql));
    $totalPage = ceil($count / $limit) ?? 0;
    ?>
<div class="right_col" role="main">
<div class="table">
        <div class="table_header">
            <h2>Quản lý sản phẩm </h2>  
     
              <div>
              <form action="" method="GET" class='searchform'>
                    <input type="text" name="txtsearch" placeholder="tìm kiếm" class='form' />
                     
                </form>
                <a href="them_sanpham.php"><button class="add_new">+ Thêm mới </button></a>
              </div>
     
        </div>
        <div class="table_section">
            <table >
                <thead>
                    <tr>
                        <th>Mã sản phẩm </th>
                        <th>Ảnh</th>
                        <th>Tên</th>
                        <th>Giá tiền </th>
                        <th>Mô tả</th>
                        <th>Danh mục</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $i = 1;
                     while($row = mysqli_fetch_array($query)){?>
                
                   
                        <tr>
                            <td><?php echo $i++?></td>
                            <td><img width="30px" height="30px" src="images/<?php echo $row['image']?>" alt=""></td>
                            <td><?php echo $row['ten']?></td>
                            <td><?php echo $row['gia']?></td>
                            <td><?php echo $row['mota']?></td>
                            <td><?php echo $row['danhmuc']?></td>
                            <td>
                             <a href="sua_sanpham.php?id=<?php echo $row['id']?>"> <button><i class="fa fa-edit"></i></button></a>  
                               <a onclick="return Del('<?php echo$row['ten'];?>')" href="xoa_sanpham.php?id=<?php echo $row['id']?>"><button class="mau"><i class="fa fa-trash-o"></i></button></a> 
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
            <?php require_once ("modules/phantrangsp.php") ?>
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
        return confirm("Bạn có chăc muốn xóa san phẩm :"+ name + "?");
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