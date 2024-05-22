<?php
include '../db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenSanPham = mysqli_real_escape_string($conn, $_POST['ten_san_pham']);
    $hinhAnh = mysqli_real_escape_string($conn, $_POST['hinh_anh']);
    $maDanhMuc = mysqli_real_escape_string($conn, $_POST['ma_danh_muc']);
    $moTa = mysqli_real_escape_string($conn, $_POST['mo_ta']);
    $soLuong = mysqli_real_escape_string($conn, $_POST['so_luong']);
    $hangSanXuat = mysqli_real_escape_string($conn, $_POST['hang_san_xuat']);
    $soLuongDaBan = mysqli_real_escape_string($conn, $_POST['so_luong_da_ban']);
    $trangThai = mysqli_real_escape_string($conn, $_POST['trang_thai']);
    $gia = mysqli_real_escape_string($conn, $_POST['gia']); // Thêm dòng này để lấy giá từ dữ liệu POST

    $sql = "INSERT INTO SanPham (TenSanPham, HinhAnh, MaDanhMuc, MoTa, SoLuong, HangSanXuat, SoLuongDaBan, TrangThai, Gia) 
            VALUES ('$tenSanPham', '$hinhAnh', '$maDanhMuc', '$moTa', '$soLuong', '$hangSanXuat', '$soLuongDaBan', '$trangThai', '$gia')";

    if ($conn->query($sql) === TRUE) {
        $message = "Dữ liệu đã được thêm vào bảng SanPham thành công.";
    } else {
        $error = "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm Danh Mục</title>
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
<h2>Thêm Sản Phẩm</h2>
<?php if(isset($message)) { ?>
    <p><?php echo $message; ?></p>
<?php } ?>
<?php if(isset($error)) { ?>
    <p><?php echo $error; ?></p>
<?php } ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="ten_san_pham">Tên Sản Phẩm:</label><br>
    <input type="text" id="ten_san_pham" name="ten_san_pham"><br><br>
    <label for="hinh_anh">Hình Ảnh:</label><br>
    <input type="file" id="hinh_anh" name="hinh_anh"><br><br>
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
    <label for="mo_ta">Mô Tả:</label><br>
    <textarea id="mo_ta" name="mo_ta"></textarea><br><br>
    <label for="so_luong">Số Lượng:</label><br>
    <input type="text" id="so_luong" name="so_luong"><br><br>
    <label for="hang_san_xuat">Hãng Sản Xuất:</label><br>
    <input type="text" id="hang_san_xuat" name="hang_san_xuat"><br><br>
    <label for="so_luong_da_ban">Số Lượng Đã Bán:</label><br>
    <input type="text" id="so_luong_da_ban" name="so_luong_da_ban"><br><br>
    <label for="gia">Giá:</label><br>
    <input type="text" id="gia" name="gia"><br><br> <!-- Thêm trường nhập giá -->
    <label for="trang_thai">Trạng Thái:</label><br>
    <select id="trang_thai" name="trang_thai">
        <option value="Đang bán">Đang bán</option>
        <option value="Hết hàng">Hết hàng</option>
        <option value="Đã ngừng kinh doanh">Đã ngừng kinh doanh</option>
    </select><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>

