<?php
session_start();
if (!isset($_SESSION['username'])) {
    // echo '<a href="dangnhap.php">Đăng nhập</a>';
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Danh Mục Đơn Hàng</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    /* Phần CSS của bạn */
    img {
        height: 150px;
        width: 130px;
    }

    /* Thêm màu #FE6333 cho các phần tử */
    .login-link,
    a {
        color: #FE6333;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #FE6333;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #FE6333;
        color: white;
    }

    h2 {
        color: #FE6333;
    }

    .home-link {
        color: #FE6333;
    }

    .home-link:hover {
        text-decoration: underline;
    }
</style>

<body>
<?php include 'header.php'; ?>
    <h2>Cart</h2>

    <?php
include '../db_connect.php';
$sql = "SELECT * FROM GioHang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Tên Sản Phẩm</th><th>Hình Ảnh</th><th>Mô Tả</th><th>Số Lượng Sản Phẩm</th><th>Ngày Đặt</th><th>Hãng Sản Xuất</th><th>Số Lượng Đã Bán</th><th>Trạng Thái</th><th>Tổng Tiền</th><th>Thao Tác</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["TenSanPham"] . "</td>";
        echo "<td><img src='../sanpham/img/" . $row["HinhAnh"] . "'></td>";
        echo "<td>" . $row["MoTa"] . "</td>";
        echo "<form method='post' action='DatHang.php'>";
        echo "<input type='hidden' name='MaGioHang' value='" . $row["MaGioHang"] . "'>";
        echo "<input type='hidden' name='Username' value='" . $row['Username'] . "'>"; 
        echo "<td>" . $row["SoLuong"] . "</td>";
        echo "<td>" . $row["NgayDat"] . "</td>";
        echo "<td>" . $row["HangSanXuat"] . "</td>";
        echo "<td>" . $row["SoLuongDaBan"] . "</td>";
        echo "<td>" . $row["TrangThai"] . "</td>";
        echo "<td>" . $row["TongTien"] . "</td>";
        echo "<td><input type='submit' value='Đặt Hàng'></td>";
        echo "</form>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có đơn hàng nào được tìm thấy.";
}

$conn->close();
?>

    <a href="../shopee-main/index.php" class="home-link"><i class="fas fa-th-list"></i>Home</a>
</body>

</html>
