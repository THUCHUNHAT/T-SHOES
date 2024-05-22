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
    <h2>Sửa Thông Tin Danh Mục</h2>

    <?php
    // Kiểm tra xem mã danh mục có được truyền từ trang trước hay không
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // Kết nối đến cơ sở dữ liệu
        include '../db_connect.php';

        // Xử lý dữ liệu được gửi từ form
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // Kiểm tra xem dữ liệu đã được nhập và hợp lệ hay chưa
            if(isset($_POST['tenDanhMuc']) && !empty($_POST['tenDanhMuc'])) {
                $tenDanhMuc = $_POST['tenDanhMuc'];

                // Cập nhật thông tin của danh mục trong cơ sở dữ liệu
                $sql = "UPDATE DanhMucSanPham SET TenDanhMuc = '$tenDanhMuc' WHERE MaDanhMuc = $id";

                if ($conn->query($sql) === TRUE) {
                    echo "Thông tin của danh mục đã được cập nhật thành công.";
                } else {
                    echo "Lỗi: " . $conn->error;
                }
            } else {
                echo "Vui lòng nhập tên danh mục.";
            }
        }

        // Truy vấn để lấy thông tin của danh mục cần sửa
        $sql = "SELECT * FROM DanhMucSanPham WHERE MaDanhMuc = $id";
        $result = $conn->query($sql);

        // Kiểm tra xem có dữ liệu trả về hay không
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <!-- Form để nhập thông tin mới của danh mục -->
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                Tên danh mục: <input type="text" name="tenDanhMuc" value="<?php echo $row['TenDanhMuc']; ?>"><br><br>
                <input type="submit" value="Lưu">
            </form>
            <a href="hienthi.php">hiển thị danh mục</a>
            <?php
        } else {
            echo "Không tìm thấy danh mục.";
        }

        // Đóng kết nối đến cơ sở dữ liệu
        $conn->close();
    } else {
        echo "Mã danh mục không được cung cấp.";
    }
    ?>
</body>
</html>
