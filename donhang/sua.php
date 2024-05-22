<!DOCTYPE html>
<html>
<head>
    <title>Sửa Thông Tin Đơn Hàng</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<style> 
 form {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    width: 100%;
    background-color: #1B4EA0;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0e2c5f; 
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus {
    outline: none;
    border: 1px solid #4CAF50;
}

.error {
    color: red;
    font-size: 0.9em;
    margin-top: 5px;
}

.success {
    color: green;
    font-size: 0.9em;
    margin-top: 5px;
}

h2{
    text-align: center;
    color:#1B4EA0;
}

a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #1B4EA0;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: #0056b3;
}

</style>
<body>
    <h2>Sửa Thông Tin Đơn Hàng</h2>

    <?php
include '../db_connect.php';

// Kiểm tra xem có dữ liệu được gửi từ form không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý thông tin đơn hàng được gửi từ form
    $maDonHang = $_POST["maDonHang"];
    $maNguoiDung = $_POST["maNguoiDung"];
    $hoTen = $_POST["hoTen"];
    $diaChi = $_POST["diaChi"];
    $email = $_POST["email"];
    $soDienThoai = $_POST["soDienThoai"];
    $ngayDat = $_POST["ngayDat"];
    $tongTien = $_POST["tongTien"];
    $maSanPham = $_POST["maSanPham"];
    $tenSanPham = $_POST["tenSanPham"];
    $maDanhMuc = $_POST["maDanhMuc"];

    // Cập nhật thông tin đơn hàng trong cơ sở dữ liệu
    $sql = "UPDATE DonHang SET MaNguoiDung='$maNguoiDung', HoTen='$hoTen', DiaChi='$diaChi', Email='$email', SoDienThoai='$soDienThoai', NgayDat='$ngayDat', TongTien='$tongTien', MaSanPham='$maSanPham', TenSanPham='$tenSanPham', MaDanhMuc='$maDanhMuc' WHERE MaDonHang='$maDonHang'";

    if ($conn->query($sql) === TRUE) {
        echo "Thông tin đơn hàng đã được cập nhật thành công.";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}

// Lấy mã đơn hàng từ URL
$maDonHang = isset($_GET['id']) ? $_GET['id'] : '';

if (!empty($maDonHang)) {
    // Truy vấn để lấy thông tin đơn hàng cần sửa
    $sql = "SELECT * FROM DonHang WHERE MaDonHang='$maDonHang'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <h2>Sửa Thông tin Đơn Hàng</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="maDonHang" value="<?php echo $row['MaDonHang']; ?>">
            Mã Người Dùng: <input type="text" name="maNguoiDung" value="<?php echo $row['MaNguoiDung']; ?>"><br>
            Họ và Tên: <input type="text" name="hoTen" value="<?php echo $row['HoTen']; ?>"><br>
            Địa Chỉ: <input type="text" name="diaChi" value="<?php echo $row['DiaChi']; ?>"><br>
            Email: <input type="text" name="email" value="<?php echo $row['Email']; ?>"><br>
            Số Điện Thoại: <input type="text" name="soDienThoai" value="<?php echo $row['SoDienThoai']; ?>"><br>
            Ngày Đặt: <input type="text" name="ngayDat" value="<?php echo $row['NgayDat']; ?>"><br>
            Tổng Tiền: <input type="text" name="tongTien" value="<?php echo $row['TongTien']; ?>"><br>
            Mã Sản Phẩm: <input type="text" name="maSanPham" value="<?php echo $row['MaSanPham']; ?>"><br>
            Tên Sản Phẩm: <input type="text" name="tenSanPham" value="<?php echo $row['TenSanPham']; ?>"><br>
            Mã Danh Mục: <input type="text" name="maDanhMuc" value="<?php echo $row['MaDanhMuc']; ?>"><br>
            <input type="submit" value="Cập nhật">
        </form>
        <?php
    } else {
        echo "Không tìm thấy đơn hàng.";
    }
} else {
    echo "Không có mã đơn hàng được cung cấp.";
}

$conn->close();
?>
        <a href="hienthi.php">hiển thị đơn hàng</a>
</body>
</html>
