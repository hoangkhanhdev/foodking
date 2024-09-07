<?php require("modules/hearder.php");?>

<?php 

require("config/db.php");
$code=$_GET['code'];
$sql_xemdon="SELECT orders.tenkh,orders.diachi,orders.sdt,orders.oderdate,orders_detail.*,ds_sanpham.ten as ds_sanpham_ten FROM orders
 INNER JOIN orders_detail ON orders.code_order = orders_detail.code_order
 INNER JOIN ds_sanpham ON ds_sanpham.id = orders_detail.id_sanpham
 WHERE orders.code_order='$code'";
 
$query_xemdon= mysqli_query($connect,$sql_xemdon);
$row = mysqli_fetch_array($query_xemdon);



?>
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
  <div class="nen">|</div>
        <!-- /top navigation -->

        <!-- page content -->
<div class="right_col" role="main">
<div class="content-wrapper" style="min-height: 564px;">
	<section class="content-header">
		<h1><i class=""></i> Chi tiết đơn hàng</h1>
		<div class="breadcrumb">
			<a class="btn btn-primary btn-sm" href="ds_donhang.php" role="button">
				<span class="thoat"></span> Thoát
			</a>
		</div>
	</section>
	<section class="content">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-md-12">
				<div class="box-1">
					<div class="box-body">
						<!--ND-->
					
									
						<div id="view">
							

							
							<form action="" enctype="" method="get" accept-charset="utf-8">
									

								<h1 class="text-center" style="color: red; ">CHI TIẾT ĐƠN HÀNG</h1>
								<h4>Tên khách hàng: <?php echo $row['tenkh'];?></h4>
								<h4>Điện thoại: <?php echo $row['sdt'];?></h4>
								<h4>Thời gian đặt hàng: <?php echo $row['oderdate'];?></h4>
								<h4>Địa chỉ: <?php echo $row['diachi'];?>

								</h4>
								<h4>Mã đơn hàng: <?php echo $row['code_order']?></h4>
								<br />
							
								<div class="table-responsive">
									<table class="table table-hover table-bordered">
										<thead>
											<tr>
												<th class="text-center">STT</th>
												<th>Tên sản phẩm</th>
												<th class="text-center" style="width:100px">Số lượng</th>
												<th style="width:120px">Giá bán</th>
												
												<th class="text-right" style="width:120px">Thành tiền</th>
											</tr>
										</thead>
										<tbody>
											
										
								
											<?php 
											$i=1;
											$thanhtien=0;
											$tongtien=0;
											foreach ($query_xemdon as $row){
												$thanhtien=$row['soluongmua']*$row['gia'];
												$tongtien += $thanhtien;
												?>

											


										

											<tr>
											
												<td class="text-center"><?php echo $i++ ?></td>
												
												<td><?php echo $row['ds_sanpham_ten'] ?></td>
												<td class="text-center"><?php echo $row['soluongmua'] ?></td>
												<td><?php echo number_format($row['gia'],0,',','.').' VND';?></td>
												
												<td class="text-right">
													
												<?php echo number_format($thanhtien,0,',','.').' VND';?>
												</td>
									
											</tr>
											<?php }
											?>
										
											<tr>
												<td colspan="6" class="text-right"
													style="border: none; font-size: 1.1em;">Tổng cộng: <?php echo number_format($tongtien,0,',','.').' VND';?></td>
											</tr>
											<tr>
												<td colspan="6" class="text-right"
													style="border: none; font-size: 1.1em;">Voucher giảm giá : 0₫</td>
											</tr>

											<tr>
												<td colspan="6" class="text-right"
													style="border: none; font-size: 0.9em;"><i>Phí vận chuyển: </i>
													0₫
												</td>
											</tr>
											<tr>
												<td colspan="6" class="text-right"
													style="border: none; color: red; font-size: 1.3em;">Thành tiền:
													<?php echo number_format($tongtien,0,',','.').' VND';?></td>
											</tr>
										
											<tr>
												<td class="text-right" colspan="6">
													<a class="btn btn-primary btn-md" role="button"
														onclick="window.print()">
														<span class="glyphicon glyphicon-print"></span> In đơn hàng
													</a>
												</td>
											</tr>
										
										</tbody>
									</table>
								</div>
								<div class="row">
									<div class="col-md-12 text-right">
										<ul class="pagination">
										</ul>
									</div>
								</div>
								
						
							</form>
					
						</div>
						
						<!--/.ND-->
					</div>
				</div><!-- /.box -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</section><!-- /.content -->
</div>
</div>
<style>
	.nen{
		background-color:#2e6da4;
		width: 100%;
		min-height: 30px;
	}
	.box-1{
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}
	.content-header > h1 {
		
    margin: 0;
    font-size: 24px;
}
.breadcrumb a{
	margin-top :-15px;
	font-size: 14px;
}
.content-header > .breadcrumb {
    float: right;
    background: transparent;
    margin-top: 0;
    margin-bottom: 0;
    padding: 7px 5px;
    position: absolute;
    top: 15px;
    right: 10px;
    border-radius: 2px;
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}
.breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #f5f5f5;
    border-radius: 4px;
}
	.skin-blue .content-header {
    background: transparent;
}
.content-header {
    position: relative;
    padding: 15px 15px 0 15px;
}
	.text-center {
		text-align: center;
	}

h1,h2,h3,h4
	 {
		font-family: 'Source Sans Pro', sans-serif;
		
	}
h4{
	color:black;
	font-weight: 600;
	font-family: 'Source Sans Pro', sans-serif;
}
	h1 {
	
		font-size: 36px;
	}

	.h1,
	.h2,
	.h3 {
		margin-top: 20px;
		margin-bottom: 10px;
	}

	.h1,h2,h3 {
		font-family: inherit;
		font-weight: 500;
		line-height: 1.1;
		color: inherit;
	}

	h4 {
		font-size: 18px;
	}

	h1 {
		margin: .67em 0;
		font-size: 2em;
	}

	.table-responsive {
		min-height: .01%;
		overflow-x: auto;
	}

	.table-bordered {
		border: 1px solid #f4f4f4;
	}

	table {
		width: 100%;
		max-width: 100%;
		margin-bottom: 20px;
	}

	table {
		background-color: transparent;
		border-spacing: 0;
		border-collapse: collapse;
	}

	thead {
		display: table-header-group;
		vertical-align: middle;
		unicode-bidi: isolate;
		border-color: inherit;
	}

	tr {
		display: table-row;
		vertical-align: inherit;
		unicode-bidi: isolate;
		border-color: inherit;
	}

	.table>tbody>tr>td,
	.table>tbody>tr>th,
	.table>tfoot>tr>td,
	.table>tfoot>tr>th,
	.table>thead>tr>td,
	.table>thead>tr>th {
		padding: 8px;
		line-height: 1.42857143;
		vertical-align: top;
		border-top: 1px solid #ddd;
		border-bottom-width: 2px;
		border: 1px solid #ddd;;
		border-bottom: 1px solid #ddd;
		
	}

	.text-right {
		text-align: right;
	}

	.btn-primary {
		background-color: #3c8dbc;
		border-color: #367fa9;
	}

	.btn {
		border-radius: 3px;
		-webkit-box-shadow: none;
		box-shadow: none;
		border: 1px solid transparent;
	}

	.btn-primary {
		color: #fff;
		background-color: #337ab7;
		border-color: #2e6da4;
	}

	.btn {
		display: inline-block;
		padding: 6px 12px;
		margin-bottom: 0;
		font-size: 14px;
		font-weight: 400;
		line-height: 1.42857143;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		-ms-touch-action: manipulation;
		touch-action: manipulation;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		background-image: none;
		border: 1px solid transparent;
		border-radius: 4px;
	}

.col-lg-12
{
		position: relative;
		min-height: 1px;
		padding-right: 15px;
		padding-left: 15px;
	}

.text-right {
		text-align: right;
	}
a {
    
    color: #337ab7;
    text-decoration: none;
    background-color: transparent;
}
</style>