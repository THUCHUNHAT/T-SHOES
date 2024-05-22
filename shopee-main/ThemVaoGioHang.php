<?php
session_start(); // Bắt đầu session

include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['order'])) {
    // Lấy thông tin sản phẩm từ biến POST
    $maSanPham = $_POST['maSanPham'];
    $tenSanPham = mysqli_real_escape_string($conn, $_POST['tenSanPham']);
    $hinhAnh = mysqli_real_escape_string($conn, $_POST['hinhAnh']);
    $maDanhMuc = $_POST['maDanhMuc'];
    $moTa = $_POST['moTa'];
    $soLuong = $_POST['soLuong'];
    $hangSanXuat = $_POST['hangSanXuat'];
    $soLuongDaBan = $_POST['soLuongDaBan'];
    $trangThai = $_POST['trangThai'];
    $username = $_POST['username'];
    
    // Lấy thời gian hiện tại
    $ngayDat = date("Y-m-d H:i:s");

    // Lấy giá của sản phẩm từ bảng SanPham
    $sql_gia = "SELECT Gia FROM SanPham WHERE MaSanPham = '$maSanPham'";
    $result_gia = $conn->query($sql_gia);
    if ($result_gia->num_rows > 0) {
        $row_gia = $result_gia->fetch_assoc();
        $gia = $row_gia['Gia'];

        // Thêm đơn hàng vào bảng DonHang và cập nhật tổng tiền
        $sql_insert = "INSERT INTO GioHang (Username, MaSanPham, TenSanPham, HinhAnh, MaDanhMuc, MoTa, SoLuong, HangSanXuat, SoLuongDaBan, TrangThai, NgayDat, TongTien) 
                        VALUES ('$username', '$maSanPham', '$tenSanPham', '$hinhAnh', '$maDanhMuc', '$moTa', '$soLuong', '$hangSanXuat', '$soLuongDaBan', '$trangThai', '$ngayDat', '$gia')";
        
        if ($conn->query($sql_insert) === TRUE) {
            header("Location: GioHang.php");
            exit();
        } else {
            echo "Đã xảy ra lỗi: " . $conn->error;
        }
    } else {
        echo "Không tìm thấy giá của sản phẩm.";
    }
}

$conn->close();
?>
