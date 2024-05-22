<?php
include '../db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoTen = $_POST['ho_ten'];
    $diaChi = $_POST['dia_chi'];
    $email = $_POST['email'];
    $soDienThoai = $_POST['so_dien_thoai'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phanQuyen = $_POST['phan_quyen'];

    $sql = "INSERT INTO NguoiDung (HoTen, DiaChi, Email, SoDienThoai, Username, Password, PhanQuyen) 
            VALUES ('$hoTen', '$diaChi', '$email', '$soDienThoai', '$username', '$password', '$phanQuyen')";

    if ($conn->query($sql) === TRUE) {
        $message = "Dữ liệu đã được thêm vào bảng NguoiDung thành công.";
    } else {
        if ($conn->errno == 1062) { 
            $error = "Tên đăng nhập đã tồn tại. Vui lòng chọn tên khác.";
        } else {
            $error = "Lỗi: " . $sql . "<br>" . $conn->error;
        }
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
    <h2>Thêm Người Dùng</h2>
    <?php if(isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="ho_ten">Họ và Tên:</label><br>
        <input type="text" id="ho_ten" name="ho_ten"><br><br>
        <label for="dia_chi">Địa Chỉ:</label><br>
        <input type="text" id="dia_chi" name="dia_chi"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="so_dien_thoai">Số Điện Thoại:</label><br>
        <input type="text" id="so_dien_thoai" name="so_dien_thoai"><br><br>
        <label for="username">Tên Đăng Nhập:</label><br>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Mật Khẩu:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <label for="phan_quyen">Phân Quyền:</label><br>
        <select id="phan_quyen" name="phan_quyen">
            <option value="nhanvien">Nhân Viên</option>
            <option value="khachhang">Khách Hàng</option>
        </select><br><br>
        <input type="submit" value="Thêm">
        <a href="hienthi.php">Hiển thị danh sách người dùng</a>
    </form>
</body>

</html>

