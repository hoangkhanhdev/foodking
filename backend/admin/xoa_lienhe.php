<?php
require_once('config/db.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM ds_lienhe WHERE id='$id'";
header("location: ds_lienhe.php");
if ($connect->query($sql) === TRUE) {
  
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $connect->error;
}

$connect->close();
}
?>