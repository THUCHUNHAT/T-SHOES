<!DOCTYPE html>
<html>
<head>
    <title>Sửa Thông Tin Danh Mục</title>
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
    <?php
    include '../db_connect.php';

    // Kiểm tra xem có tham số id được truyền qua không
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        // Lấy thông tin người dùng từ cơ sở dữ liệu
        $sql = "SELECT * FROM NguoiDung WHERE Username = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Người Dùng</title>
</head>
<body>
    <h2>Sửa Thông Tin Người Dùng</h2>
    <form action="capnhat.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['Username']; ?>">
        <label for="hoten">Họ và Tên:</label>
        <input type="text" id="hoten" name="hoten" value="<?php echo $user['HoTen']; ?>"><br><br>
        <label for="diachi">Địa Chỉ:</label>
        <input type="text" id="diachi" name="diachi" value="<?php echo $user['DiaChi']; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['Email']; ?>"><br><br>
        <label for="sdt">Số Điện Thoại:</label>
        <input type="text" id="sdt" name="sdt" value="<?php echo $user['SoDienThoai']; ?>"><br><br>
        <label for="phanquyen">Phân Quyền:</label>
        <input type="text" id="phanquyen" name="phanquyen" value="<?php echo $user['PhanQuyen']; ?>"><br><br>
        <input type="submit" value="Cập Nhật">
    </form>
</body>
</html>
<?php
        } else {
            echo "Người dùng không tồn tại.";
        }
    } else {
        echo "Không có thông tin người dùng được cung cấp.";
    }

    $conn->close();
?>
</body>
</html>
