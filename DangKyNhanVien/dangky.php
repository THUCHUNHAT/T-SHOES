<?php
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoTen = $_POST["hoTen"];
    $diaChi = $_POST["diaChi"];
    $email = $_POST["email"];
    $soDienThoai = $_POST["soDienThoai"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phanQuyen = "nhanvien";

    if (strlen($password) < 8) {
        echo "Mật khẩu phải có ít nhất 8 ký tự.";
    } else {
        $check_username = "SELECT * FROM NguoiDung WHERE Username = '$username'";
        $result = $conn->query($check_username);
        if ($result->num_rows > 0) {
            echo "Tên người dùng đã tồn tại. Vui lòng chọn tên khác.";
        } else {
            $hashed_password = $password;
            $insert_user = "INSERT INTO NguoiDung (HoTen, DiaChi, Email, SoDienThoai, Username, Password, PhanQuyen) VALUES ('$hoTen', '$diaChi', '$email', '$soDienThoai', '$username', '$hashed_password', '$phanQuyen')";
            if ($conn->query($insert_user) === TRUE) {
                echo "Đăng ký thành công!";
            } else {
                echo "Lỗi: " . $insert_user . "<br>" . $conn->error;
            }
        }
    }
    $conn->close();
}
?>


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

</style>
<h2>Nhân viên đăng ký tài khoản</h2>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Họ và tên: <input type="text" name="hoTen" required><br>
    Địa chỉ: <input type="text" name="diaChi"><br>
    Email: <input type="email" name="email" required><br>
    Số điện thoại: <input type="text" name="soDienThoai"><br>
    Username: <input type="text" name="username" required><br>
    <div class="password-field">
        Password: <input type="password" name="password" id="password" required>
        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span><br>
    </div>
    <input type="hidden" name="phanQuyen" value="nhanvien">
    <input type="submit" value="Đăng ký">
    <a href="dangnhap.php">Đăng nhập</a>
</form>

<script>
const togglePassword = document.querySelector('.toggle-password');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
});
</script>
