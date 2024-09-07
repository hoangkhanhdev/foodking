<?php
// Kiểm tra xem phương thức yêu cầu là POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kiểm tra xem có dữ liệu được gửi lên không
    if (isset($_POST['productId'])) {
        // Lấy productId từ dữ liệu gửi lên
        $productId = $_POST['productId'];

        // Lấy thông tin sản phẩm từ cơ sở dữ liệu dựa trên productId
        // Ví dụ: 
        $query = "SELECT * FROM ds_sanpham WHERE id = $productId";
        $result = mysqli_query($conn, $query);
        $product = mysqli_fetch_assoc($result);

        // Kiểm tra xem sản phẩm có tồn tại không
        if ($product) {
            // Thêm thông tin sản phẩm vào giỏ hàng (xử lý logic ở đây)
            // Ví dụ:
            // - Lưu thông tin sản phẩm vào session cart
            // - Hoặc lưu vào cơ sở dữ liệu

            // Thông báo đã thêm vào giỏ hàng
            echo "Đã thêm sản phẩm có id $productId vào giỏ hàng.";

            // Chuyển hướng đến trang cart.php
            header("Location: cart.php");
            exit();
        } else {
            // Nếu không tìm thấy sản phẩm
            echo "Lỗi: Không tìm thấy thông tin sản phẩm.";
        }
    } else {
        // Nếu không có dữ liệu gửi lên
        echo "Lỗi: Không tìm thấy thông tin sản phẩm.";
    }
} else {
    // Nếu phương thức yêu cầu không phải POST
    echo "Lỗi: Yêu cầu không hợp lệ.";
}
?>

