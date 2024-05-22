<?php
include '../db_connect.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM GioHang WHERE MaGioHang = $id";

    if ($conn->query($sql) === TRUE) {
        header("location: GioHang.php");
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Không tìm thấy sản phẩm trong giỏ hàng.";
}

$conn->close();
?>
