<?php
include '../db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenDanhMuc = $_POST['ten_danh_muc'];

    $sql = "INSERT INTO DanhMucSanPham (TenDanhMuc) VALUES ('$tenDanhMuc')";

    if ($conn->query($sql) === TRUE) {
        $message = "Dữ liệu đã được thêm vào bảng DanhMucGiay thành công.";
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
    <h2>Thêm Danh Mục Sản Phẩm</h2>
    <?php if(isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="ten_danh_muc">Tên Danh Mục:</label><br>
        <input type="text" id="ten_danh_muc" name="ten_danh_muc"><br><br>
        <input type="submit" value="Thêm">
        <a href="hienthi.php">hiển thị danh mục</a>
    </form>
</body>
</html>
