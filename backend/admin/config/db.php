<?php 

    $connect = mysqli_connect("localhost","root","","do_an_nhanh");
    if ($connect) {
    mysqli_query($connect,"SET NAMES 'UTF8'");

    }else{
        echo "ketnoi that bai";
    }
?>