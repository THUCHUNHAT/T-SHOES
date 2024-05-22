<!DOCTYPE html>
<html>
<head>
    <title>Danh Mục Giày</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
<style> 
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

h2 {
    text-align: center;
}

form {
    text-align: center;
    margin-bottom: 20px;
}

input[type="text"],
input[type="submit"] {
    padding: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

a {
    display: inline-block;
    padding: 5px 10px;
    background-color: #007bff;
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
    <h2>Thông tin Người Dùng</h2>
    <form method="GET" action="timkiem.php">
    Nhập tên người dùng: <input type="text" name="search">
    <input type="submit" value="Tìm kiếm">
    <a href="them.php">Thêm người dùng</a>
    </form>
    <?php
    include '../db_connect.php';

    $sql = "SELECT * FROM NguoiDung";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Họ và Tên</th><th>Địa Chỉ</th><th>Email</th><th>Số Điện Thoại</th><th>Tên Đăng Nhập</th><th>Phân Quyền</th><th>Thao Tác</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["HoTen"] . "</td>";
            echo "<td>" . $row["DiaChi"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["SoDienThoai"] . "</td>";
            echo "<td>" . $row["Username"] . "</td>";
            echo "<td>" . $row["PhanQuyen"] . "</td>";
            echo "<td>
            <a href='xoa.php?id=" . $row["Username"] . "'>Xóa</a>
            <a href='sua.php?id=" . $row["Username"] . "'>Sửa</a>
          </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Không có người dùng nào được tìm thấy.";
    }

    $conn->close();
    ?>
<a href="../DangKyNhanVien/admin.php"><i class="fas fa-th-list"></i>Thoát</a>
</body>
</html>
