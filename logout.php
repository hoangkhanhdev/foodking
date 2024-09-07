<?php
session_start();
del_session();
header('location:index.php');
function del_session(){
    unset($_SESSION['objectuser']);
}