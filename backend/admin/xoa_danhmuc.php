<?php
require_once('config/db.php');
if(isset($_REQUEST['id_danhmuc']) and $_REQUEST['id_danhmuc']!=""){
$id=$_GET['id_danhmuc'];
$sql = "DELETE FROM danhmucsp WHERE id_danhmuc='$id'";
header("location: danhmuc.php");
if ($connect->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $connect->error;
}
$connect->close();
}
?>