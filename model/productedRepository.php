<?php
require_once __DIR__ . './connectdb.php';
class productedRepository
{
    public function getAll($limit)
    {
        global $conn;
        $sql =
            'select s.id as p_id, s.ten as p_ten, s.*, c.* from ds_sanpham s join danhmucsp c on c.id_danhmuc=s.id_danhmuc order by s.id desc ';
        if ($limit != null) {
            $sql .= 'limit 0,' . $limit;
        }
        return mysqli_query($conn, $sql);
    }
    public function getById($id)
    {
        global $conn;
        $sql = "select s.id as p_id, s.ten as p_ten, s.*, c.* from ds_sanpham s join danhmucsp c on c.id_danhmuc=s.id_danhmuc and s.id =$id";
        return mysqli_query($conn, $sql);
    }

    public function countProductedByCategoryName($name)
    {
        global $conn;
        $sql =
            'select * from ds_sanpham s join danhmucsp c on c.id_danhmuc=s.id_danhmuc';
        if ($name != '') {
            $sql = "select * from ds_sanpham s join danhmucsp c on c.id_danhmuc=s.id_danhmuc and c.danhmuc='$name'";
        }
        return mysqli_query($conn, $sql)->num_rows;
    }
}
?>