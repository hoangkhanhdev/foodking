<?php
 include "./backend/admin/config/db.php";
if(isset($_REQUEST['id_order']) and $_REQUEST['id_order']!=""){
$id=$_GET['id_order'];
$sql = "DELETE FROM orders WHERE id_order='$id'";
header("location: lichsudonhang.php");
if ($connect->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $connect->error;
}

$connect->close();
}
?>