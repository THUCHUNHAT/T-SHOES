<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: dangnhap.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chào mừng</title>
</head>
<body>
    <h2>Xin chào <?php echo $_SESSION['username']; ?>!</h2>
    <p>Đã đăng nhập thành công.</p>
    <a href="dangxuat.php">Đăng xuất</a>
</body>
</html>
