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
    width: 120%;
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
img{
    width:150px;
    height:200px
}

</style>
<body>
    <h2>Thông tin Danh Mục Sản Phẩm</h2>
    <form method="GET" action="timkiem.php">
    Nhập mã sản phẩm: <input type="text" name="search">
    <input type="submit" value="Tìm kiếm">
    <a href="them.php">Thêm sản phẩm</a>
    </form>
    <?php
    include '../db_connect.php';

    $sql = "SELECT * FROM SanPham";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Mã Sản Phẩm</th><th>Tên Sản Phẩm</th><th>Hình Ảnh</th><th>Mô Tả</th><th>Số Lượng</th><th>Hãng Sản Xuất</th><th>Số Lượng Đã Bán</th><th>Trạng Thái</th><th>Thao Tác</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["MaSanPham"] . "</td>";
            echo "<td>" . $row["TenSanPham"] . "</td>";
            echo "<td><img src='img/" . $row["HinhAnh"] . "'></td>";
            echo "<td>" . $row["MoTa"] . "</td>";
            echo "<td>" . $row["SoLuong"] . "</td>";
            echo "<td>" . $row["HangSanXuat"] . "</td>";
            echo "<td>" . $row["SoLuongDaBan"] . "</td>";
            echo "<td>" . $row["TrangThai"] . "</td>";
            echo "<td>
            <a href='xoa.php?id=" . $row["MaSanPham"] . "'>Xóa</a>
            <a href='sua.php?id=" . $row["MaSanPham"] . "'>Sửa</a>
          </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Không có sản phẩm nào được tìm thấy.";
    }

    $conn->close();
?>
<a href="../DangKyNhanVien/admin.php"><i class="fas fa-th-list"></i>Thoát</a>
</body>
</html>
