<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: dangnhap.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chào mừng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-e4/GtCMtZfVYnB7Fk3HMzv0+L3hROU58UoowQwWhu9ih9zuc7f9f1QXVn/PSfowUrIiBkYjjXpQVWZn3CsI8nQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a {
            text-decoration: none;
            color: #333;
            display: inline-block;
            margin-right: 10px;
            padding: 10px;
            border-radius: 5px;
            background-color: #ddd;
            transition: background-color 0.3s ease;
        }

        /* CSS khi rê chuột qua các liên kết */
        a:hover {
            background-color: #ccc;
        }

        /* CSS cho biểu tượng fontawesome */
        .fa {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Trang Quản Lý T-shoes</h1>
    </header>
    <div class="container">
        <h2>Xin chào <?php echo $_SESSION['username']; ?>!</h2>
        <p>Chào mừng tới trang Quản lý.</p>
        <a href="dangxuat.php"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
        <a href="../danhmuc/hienthi.php"><i class="fas fa-th-list"></i> Danh Mục</a>
        <a href="../sanpham/hienthi.php"><i class="fas fa-box-open"></i> Sản Phẩm</a>
        <a href="../nguoidung/hienthi.php"><i class="fas fa-users"></i> Người Dùng</a>
        <a href="../donhang/hienthi.php"><i class="fas fa-shopping-cart"></i> Đơn Hàng</a>
    </div>
</body>
</html>
