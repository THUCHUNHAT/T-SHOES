<?php
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra sự tồn tại của các biến POST
    if (isset($_POST['MaGioHang']) && isset($_POST['Username'])) {
        $MaGioHang = $_POST['MaGioHang'];
        $Username = $_POST['Username'];

        // Lấy thông tin từ bảng GioHang
        $sql = "SELECT * FROM GioHang WHERE MaGioHang = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $MaGioHang);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Chèn thông tin vào bảng DonHang
            $insert_sql = "INSERT INTO DonHang (Username, MaSanPham, MaGioHang, TenSanPham, HinhAnh, MaDanhMuc, MoTa, SoLuong, NgayDat, HangSanXuat, SoLuongDaBan, TrangThai, TongTien)
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $insert_stmt = $conn->prepare($insert_sql);
            $insert_stmt->bind_param("siissisissisi", $Username, $row['MaSanPham'], $row['MaGioHang'], $row['TenSanPham'], $row['HinhAnh'], $row['MaDanhMuc'], $row['MoTa'], $row['SoLuong'], $row['NgayDat'], $row['HangSanXuat'], $row['SoLuongDaBan'], $row['TrangThai'], $row['TongTien']);

            if ($insert_stmt->execute()) {
                echo "Đặt hàng thành công!";
            } else {
                echo "Lỗi: " . $conn->error;
            }

            // Xóa sản phẩm khỏi bảng GioHang sau khi đặt hàng
            $delete_sql = "DELETE FROM GioHang WHERE MaGioHang = ?";
            $delete_stmt = $conn->prepare($delete_sql);
            $delete_stmt->bind_param("i", $MaGioHang);
            $delete_stmt->execute();
        } else {
            echo "Không tìm thấy sản phẩm trong giỏ hàng.";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Thiếu thông tin đặt hàng.";
    }
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
