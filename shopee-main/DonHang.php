    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php include 'header.php'; ?>

<?php
include '../db_connect.php';

// Truy vấn dữ liệu từ bảng DonHang
$sql = "SELECT * FROM DonHang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị dữ liệu trong bảng HTML
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Username</th>
            <th>Mã Đơn Hàng</th>
            <th>Mã Sản Phẩm</th>
            <th>Mã Giỏ Hàng</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình Ảnh</th>
            <th>Mã Danh Mục</th>
            <th>Mô Tả</th>
            <th>Số Lượng</th>
            <th>Ngày Đặt</th>
            <th>Hãng Sản Xuất</th>
            <th>Số Lượng Đã Bán</th>
            <th>Trạng Thái</th>
            <th>Tổng Tiền</th>
          </tr>";

    // Lặp qua từng hàng dữ liệu và hiển thị
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['Username']) . "</td>";
        echo "<td>" . $row['MaDonHang'] . "</td>";
        echo "<td>" . $row['MaSanPham'] . "</td>";
        echo "<td>" . $row['MaGioHang'] . "</td>";
        echo "<td>" . htmlspecialchars($row['TenSanPham']) . "</td>";
        echo "<td><img src='../sanpham/img/" . htmlspecialchars($row['HinhAnh']) . "' alt='Hình Ảnh' style='width: 100px; height: auto;'></td>";
        echo "<td>" . $row['MaDanhMuc'] . "</td>";
        echo "<td>" . htmlspecialchars($row['MoTa']) . "</td>";
        echo "<td>" . $row['SoLuong'] . "</td>";
        echo "<td>" . $row['NgayDat'] . "</td>";
        echo "<td>" . htmlspecialchars($row['HangSanXuat']) . "</td>";
        echo "<td>" . $row['SoLuongDaBan'] . "</td>";
        echo "<td>" . htmlspecialchars($row['TrangThai']) . "</td>";
        echo "<td>" . $row['TongTien'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có đơn hàng nào.";
}

$conn->close();
?>
