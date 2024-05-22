<?php
session_start();

// Hủy phiên đăng nhập
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập hoặc trang chính
header("location: dangnhap.php");
exit;
?>
