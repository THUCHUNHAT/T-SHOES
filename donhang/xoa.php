<?php
include '../db_connect.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM DonHang WHERE MaDonHang = $id";

    if ($conn->query($sql) === TRUE) {
        header("location: hienthi.php");
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Không tìm thấy ID đơn hàng.";
}

$conn->close();
?>
