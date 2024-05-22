<?php
include '../db_connect.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM DanhMucSanPham WHERE MaDanhMuc = $id";
        if ($conn->query($sql) === TRUE) {
            header("location: hienthi.php");
        } else {
            throw new Exception("Không thể xóa danh mục sản phẩm.");
        }
    } catch (Exception $e) {
        // Sử dụng JavaScript để hiển thị thông báo và chuyển hướng sau khi nhấn OK
        echo "<script>alert('Lỗi: " . $e->getMessage() . "'); window.location.href = 'hienthi.php';</script>";
    }
} else {
    echo "Không tìm thấy ID danh mục.";
}

$conn->close();
?>
