<?php
include '../db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maNguoiDung = mysqli_real_escape_string($conn, $_POST['ma_nguoi_dung']);
    $hoTen = mysqli_real_escape_string($conn, $_POST['ho_ten']);
    $diaChi = mysqli_real_escape_string($conn, $_POST['dia_chi']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $soDienThoai = mysqli_real_escape_string($conn, $_POST['so_dien_thoai']);
    $ngayDat = mysqli_real_escape_string($conn, $_POST['ngay_dat']);
    $tongTien = mysqli_real_escape_string($conn, $_POST['tong_tien']);
    $maSanPham = mysqli_real_escape_string($conn, $_POST['ma_san_pham']);
    $tenSanPham = mysqli_real_escape_string($conn, $_POST['ten_san_pham']);
    $maDanhMuc = mysqli_real_escape_string($conn, $_POST['ma_danh_muc']);

    $sql = "INSERT INTO DonHang (MaNguoiDung, HoTen, DiaChi, Email, SoDienThoai, NgayDat, TongTien, MaSanPham, TenSanPham, MaDanhMuc) 
            VALUES ('$maNguoiDung', '$hoTen', '$diaChi', '$email', '$soDienThoai', '$ngayDat', '$tongTien', '$maSanPham', '$tenSanPham', '$maDanhMuc')";

    if ($conn->query($sql) === TRUE) {
        $message = "Dữ liệu đã được thêm vào bảng DonHang thành công.";
    } else {
        $error = "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thêm Đơn Hàng</title>
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
<h2>Thêm Đơn Hàng</h2>
<?php if(isset($message)) { ?>
    <p><?php echo $message; ?></p>
<?php } ?>
<?php if(isset($error)) { ?>
    <p><?php echo $error; ?></p>
<?php } ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label for="ma_nguoi_dung">Mã Người Dùng:</label><br>
<select id="ma_nguoi_dung" name="ma_nguoi_dung">
    <?php
    include '../db_connect.php';

    $sql = "SELECT Username FROM NguoiDung";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['Username'] . "'>" . $row['Username'] . "</option>";
        }
    } else {
        echo "<option value=''>Không có người dùng nào</option>";
    }

    $conn->close();
    ?>
</select><br><br>
    <label for="ho_ten">Họ và Tên:</label><br>
    <input type="text" id="ho_ten" name="ho_ten"><br><br>
    <label for="dia_chi">Địa Chỉ:</label><br>
    <input type="text" id="dia_chi" name="dia_chi"><br><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br><br>
    <label for="so_dien_thoai">Số Điện Thoại:</label><br>
    <input type="text" id="so_dien_thoai" name="so_dien_thoai"><br><br>
    <label for="ngay_dat">Ngày Đặt:</label><br>
    <input type="datetime-local" id="ngay_dat" name="ngay_dat"><br><br>
    <label for="tong_tien">Tổng Tiền:</label><br>
    <input type="text" id="tong_tien" name="tong_tien"><br><br>
    <label for="ma_san_pham">Mã Sản Phẩm:</label><br>
<select id="ma_san_pham" name="ma_san_pham">
    <?php
    include '../db_connect.php';

    $sql = "SELECT MaSanPham FROM SanPham";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['MaSanPham'] . "'>" . $row['MaSanPham'] . "</option>";
        }
    } else {
        echo "<option value=''>Không có sản phẩm nào</option>";
    }

    $conn->close();
    ?>
</select><br><br>
    <label for="ten_san_pham">Tên Sản Phẩm:</label><br>
    <input type="text" id="ten_san_pham" name="ten_san_pham"><br><br>
    <label for="ma_danh_muc">Mã Danh Mục:</label><br>
    <select id="ma_danh_muc" name="ma_danh_muc">
        <?php
        include '../db_connect.php';

        $sql = "SELECT MaDanhMuc, TenDanhMuc FROM DanhMucSanPham";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['MaDanhMuc'] . "'>" . $row['TenDanhMuc'] . "</option>";
            }
        } else {
            echo "<option value=''>Không có danh mục nào</option>";
        }

        $conn->close();
        ?>
    </select><br><br>
    <input type="submit" value="Thêm">
    <a href="hienthi.php">Hiển thị đơn hàng</a>
</form>


</body>
</html>

