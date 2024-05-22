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
    <h2>Thông tin Danh Mục Sản Phẩm</h2>
    <form method="GET" action="timkiem.php">
    Nhập mã sản phẩm: <input type="text" name="search">
    <input type="submit" value="Tìm kiếm">
    <a href="them.php">Thêm danh mục</a>
    </form>
    <?php
    include '../db_connect.php';

    $sql = "SELECT * FROM DanhMucSanPham";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Mã Danh Mục</th><th>Tên Danh Mục</th><th>Thao Tác</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["MaDanhMuc"] . "</td>";
            echo "<td>" . $row["TenDanhMuc"] . "</td>";
            echo "<td>
            <a href='xoa.php?id=" . $row["MaDanhMuc"] . "'>Xóa</a>
            <a href='sua.php?id=" . $row["MaDanhMuc"] . "'>Sửa</a>
          </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Không có danh mục nào được tìm thấy.";
    }

    $conn->close();
    ?>
     <a href="../DangKyNhanVien/admin.php"><i class="fas fa-th-list"></i>Thoát</a>
</body>
</html>
