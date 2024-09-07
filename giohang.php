<?php
session_start();

include './model/connectdb.php';
//tăng số lượng
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = [
                'ten' => $cart_item['ten'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'gia' => $cart_item['gia'],
                'image' => $cart_item['image'],
            ];
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] + 1;
            if ($cart_item['soluong'] <= 9) {
                $product[] = [
                    'ten' => $cart_item['ten'],
                    'id' => $cart_item['id'],
                    'soluong' => $tangsoluong,
                    'gia' => $cart_item['gia'],
                    'image' => $cart_item['image'],
                ];
            } else {
                $product[] = [
                    'ten' => $cart_item['ten'],
                    'id' => $cart_item['id'],
                    'soluong' => $cart_item['soluong'],
                    'gia' => $cart_item['gia'],
                    'image' => $cart_item['image'],
                ];
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('location:cart.php');
}
// Giảm số lượng
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = [
                'ten' => $cart_item['ten'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'gia' => $cart_item['gia'],
                'image' => $cart_item['image'],
            ];
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] - 1;
            if ($cart_item['soluong'] > 1) {
                $product[] = [
                    'ten' => $cart_item['ten'],
                    'id' => $cart_item['id'],
                    'soluong' => $tangsoluong,
                    'gia' => $cart_item['gia'],
                    'image' => $cart_item['image'],
                ];
            } else {
                $product[] = [
                    'ten' => $cart_item['ten'],
                    'id' => $cart_item['id'],
                    'soluong' => $cart_item['soluong'],
                    'gia' => $cart_item['gia'],
                    'image' => $cart_item['image'],
                ];
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('location:cart.php');
}
//xóa 1 sản phẩm
if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = [
                'ten' => $cart_item['ten'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'gia' => $cart_item['gia'],
                'image' => $cart_item['image'],
            ];
        }
        $_SESSION['cart'] = $product;
        header('location:cart.php');
    }
}
//xóa tất cả
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['cart']);
    header('location:cart.php');
}

//thêm vào giỏ hàng
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //  session_destroy();
    $soluong = 1;
    $sql = "SELECT * FROM ds_sanpham where id = '" . $id . "' LIMIT 1";
    $sql_run = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($sql_run);
    if ($row) {
        $new_product = [
            [
                'ten' => $row['ten'],
                'id' => $row['id'],
                'soluong' => $soluong,
                'gia' => $row['gia'],
                'image' => $row['image'],
            ],
        ];
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                if ($cart_item['id'] == $id) {
                    $product[] = [
                        'ten' => $cart_item['ten'],
                        'id' => $cart_item['id'],
                        'soluong' => $soluong + 1,
                        'gia' => $cart_item['gia'],
                        'image' => $cart_item['image'],
                    ];
                    $found = true;
                } else {
                    $product[] = [
                        'ten' => $cart_item['ten'],
                        'id' => $cart_item['id'],
                        'soluong' => $cart_item['soluong'],
                        'gia' => $cart_item['gia'],
                        'image' => $cart_item['image'],
                    ];
                }
            }
            if ($found == false) {
                $_SESSION['cart'] = array_merge($product, $new_product);
            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
   header('location:cart.php');
}
?>