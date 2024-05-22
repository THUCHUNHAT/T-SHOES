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
    <h2>Sửa Thông Tin Sản Phẩm</h2>
    <?php
// Kiểm tra xem mã sản phẩm có được truyền từ trang trước hay không
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Kết nối đến cơ sở dữ liệu
    include '../db_connect.php';

    // Xử lý dữ liệu được gửi từ form
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kiểm tra xem dữ liệu đã được nhập và hợp lệ hay chưa
        if(isset($_POST['tenSanPham']) && !empty($_POST['tenSanPham']) && isset($_POST['hinhAnh']) && isset($_POST['moTa']) && isset($_POST['soLuong']) && isset($_POST['hangSanXuat']) && isset($_POST['soLuongDaBan']) && isset($_POST['trangThai'])) {
            $tenSanPham = $_POST['tenSanPham'];
            $hinhAnh = $_POST['hinhAnh'];
            $moTa = $_POST['moTa'];
            $soLuong = $_POST['soLuong'];
            $hangSanXuat = $_POST['hangSanXuat'];
            $soLuongDaBan = $_POST['soLuongDaBan'];
            $trangThai = $_POST['trangThai'];

            // Sử dụng prepared statement để thực thi câu lệnh SQL
            $sql = "UPDATE SanPham SET TenSanPham = ?, HinhAnh = ?, MoTa = ?, SoLuong = ?, HangSanXuat = ?, SoLuongDaBan = ?, TrangThai = ? WHERE MaSanPham = ?";

            // Chuẩn bị prepared statement
            $stmt = $conn->prepare($sql);
            
            // Gán các giá trị vào các tham số của prepared statement
            $stmt->bind_param("sssisisi", $tenSanPham, $hinhAnh, $moTa, $soLuong, $hangSanXuat, $soLuongDaBan, $trangThai, $id);

            // Thực thi câu lệnh SQL
            if ($stmt->execute()) {
                echo "Thông tin của sản phẩm đã được cập nhật thành công.";
            } else {
                echo "Lỗi: " . $conn->error;
            }

            // Đóng prepared statement
            $stmt->close();
        } else {
            echo "Vui lòng điền đầy đủ thông tin sản phẩm.";
        }
    }

    // Truy vấn để lấy thông tin của sản phẩm cần sửa
    $sql = "SELECT * FROM SanPham WHERE MaSanPham = ?";
    
    // Chuẩn bị prepared statement
    $stmt = $conn->prepare($sql);
    
    // Gán giá trị vào tham số của prepared statement
    $stmt->bind_param("i", $id);
    
    // Thực thi câu lệnh SQL
    $stmt->execute();
    
    // Lấy kết quả
    $result = $stmt->get_result();

    // Kiểm tra xem có dữ liệu trả về hay không
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!-- Form để nhập thông tin mới của sản phẩm -->
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            Tên sản phẩm: <input type="text" name="tenSanPham" value="<?php echo $row['TenSanPham']; ?>"><br><br>
            Hình ảnh: <input type="file" name="hinhAnh" value="<?php echo $row['HinhAnh']; ?>"><br><br>
            Mô tả: <textarea name="moTa"><?php echo $row['MoTa']; ?></textarea><br><br>
            Số lượng: <input type="number" name="soLuong" value="<?php echo $row['SoLuong']; ?>"><br><br>
            Hãng sản xuất: <input type="text" name="hangSanXuat" value="<?php echo $row['HangSanXuat']; ?>"><br><br>
            Số lượng đã bán: <input type="number" name="soLuongDaBan" value="<?php echo $row['SoLuongDaBan']; ?>"><br><br>
            <label for="trang_thai">Trạng Thái:</label><br>
            <select id="trang_thai" name="trangThai">
                <option value="Đang bán" <?php if($row['TrangThai'] == 'Đang bán') echo 'selected'; ?>>Đang bán</option>
                <option value="Hết hàng" <?php if($row['TrangThai'] == 'Hết hàng') echo 'selected'; ?>>Hết hàng</option>
                <option value="Đã ngừng kinh doanh" <?php if($row['TrangThai'] == 'Đã ngừng kinh doanh') echo 'selected'; ?>>Đã ngừng kinh doanh</option>
            </select><br><br>

            <input type="submit" value="Lưu">
        </form>
        <a href="hienthi.php">Hiển thị sản phẩm</a>
        <?php
    } else {
        echo "Không tìm thấy sản phẩm.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Mã sản phẩm không được cung cấp.";
}
?>



</body>
</html>
