
<?php
require_once('config/db.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM ds_sanpham WHERE id='$id'";
header("location: ds_sanpham.php");
if ($connect->query($sql) === TRUE) {
   echo'Xoá thành công!';

} else {
echo "Error updating record: " . $connect->error;
}

$connect->close();
}
?>
        
 