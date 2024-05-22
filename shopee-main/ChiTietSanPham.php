<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  h1 {
    color: #EE4D2D;
    text-align: center;
    margin-bottom: 20px;
  }

  p {
    margin-bottom: 10px;
  }

  img {
    max-width: 50%;
    height: auto;
    margin-bottom: 10px;
    float: left;
    padding: 0 30px;
  }

  .ten-san-pham {
    font-size: 24px;
    font-weight: 2px;
    margin-bottom: 10px;
  }


  .hinh-anh-san-pham {
    text-align: center;
  }

  .mo-ta-san-pham {
    text-align: justify;
  }

  .thong-tin-chi-tiet {
    list-style: none;
    padding: 0;
  }

  .thong-tin-chi-tiet li {
    margin-bottom: 10px;
  }

  .ten-thong-tin {
    font-weight: bold;
    display: inline-block;
    width: 150px;
  }

  .gia-tri-thong-tin {
    display: inline-block;
  }

  .btn-mua-hang {
    background-color: #EE4D2D;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    margin-right: 10px;
  }


  .gia {
    color: #EE4D2D;
    font-size: 24px;
    font-weight: 20px;
    margin-bottom: 10px;
  }

  .comment-form {
    margin-top: 20px;
  }

  .comment-form form {
    display: flex;
    flex-direction: column;
  }

  .comment-form textarea {
    width: 100%;
    min-height: 100px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: vertical;
  }

  .comment-form input[type="submit"] {
    width: auto;
    padding: 10px 20px;
    background-color: #EE4D2D;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }



  .comments-section {
    margin-top: 20px;
  }

  .comment {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
  }

  .comment h3 {
    margin-top: 0;
    margin-bottom: 5px;
  }

  .comment p {
    margin-bottom: 5px;
  }

  .comment small {
    color: #666;
  }

  h2 {
    margin-top: 180px;
  }

  .product-container {
    margin-top: 80px;
  }
</style>
<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['username'])) {
  $tenNguoiDung = $_SESSION['username'];
} else {
  // Nếu chưa đăng nhập, gán một giá trị mặc định cho tên người dùng
  $tenNguoiDung = "Khách";
}
?>
<title>T-SHOES</title>
<!-- <link rel="icon" href="./assets/img/logo/shopee-logo.png" type="image/x-icon"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" href="./assets/css/base.css">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/grid.css">
<link rel="stylesheet" href="./assets/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class="app">
  <?php include 'header.php'; ?>
</div>
<?php
include '../db_connect.php';

// Kiểm tra xem biến $_GET['id'] có tồn tại và có giá trị không
if (isset($_GET['id']) && !empty($_GET['id'])) {
  // Lấy mã sản phẩm từ URL
  $maSanPham = $_GET['id'];

  // Truy vấn để lấy thông tin chi tiết của sản phẩm
  $sql = "SELECT * FROM SanPham WHERE MaSanPham = $maSanPham";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Hiển thị thông tin chi tiết của sản phẩm
    while ($row = $result->fetch_assoc()) {
      echo '<div class="product-container">';
      // echo '<h1>T-SHOES</h1>';

      echo '<div class="thong-tin-san-pham">';
      echo '<div class="hinh-anh-san-pham">';
      echo '<img src="../sanpham/img/' . $row["HinhAnh"] . '" alt="' . $row["TenSanPham"] . '">';
      echo '</div>';
      echo '<div class="ten-san-pham">' . $row["TenSanPham"] . '</div>';
      $gia = $row["Gia"];
      $gia_formatted = number_format($gia, 0, ',', '.') . 'đ';
      echo '<div class="gia">' . $gia_formatted . '</div>';
      echo '<div class="mo-ta-san-pham">' . $row["MoTa"] . '</div>';
      echo '<ul class="thong-tin-chi-tiet">';
      function convertToK($number)
      {
        if ($number >= 1000) {
          return round($number / 1000, 1) . 'k';
        } else {
          return $number;
        }
      }
      echo '<li><span class="ten-thong-tin">Số lượng:</span><span class="gia-tri-thong-tin">' . convertToK($row["SoLuong"]) . '</span></li>';
      echo '<li><span class="ten-thong-tin">Hãng sản xuất:</span><span class="gia-tri-thong-tin">' . $row["HangSanXuat"] . '</span></li>';
      echo '<li><span class="ten-thong-tin">Số lượng đã bán:</span><span class="gia-tri-thong-tin">' . $row["SoLuongDaBan"] . '</span></li>';
      echo '<li><span class="ten-thong-tin">Trạng thái:</span><span class="gia-tri-thong-tin">' . $row["TrangThai"] . '</span></li>';
      echo '</ul>';
      echo '<form method="post" action="ThemVaoGioHang.php">';
      if (isset($_SESSION['username'])) {
        echo '<input type="hidden" name="username" value="' . htmlspecialchars($_SESSION['username']) . '">';
      }
      echo '<input type="hidden" name="maSanPham" value="' . $row["MaSanPham"] . '">';
      echo '<input type="hidden" name="tenSanPham" value="' . $row["TenSanPham"] . '">';
      echo '<input type="hidden" name="hinhAnh" value="' . $row["HinhAnh"] . '">';
      echo '<input type="hidden" name="maDanhMuc" value="' . $row["MaDanhMuc"] . '">';
      echo '<input type="hidden" name="moTa" value="' . $row["MoTa"] . '">';
      echo '<input type="hidden" name="soLuong" value="' . $row["SoLuong"] . '">';
      echo '<input type="hidden" name="hangSanXuat" value="' . $row["HangSanXuat"] . '">';
      echo '<input type="hidden" name="soLuongDaBan" value="' . $row["SoLuongDaBan"] . '">';
      echo '<input type="hidden" name="trangThai" value="' . $row["TrangThai"] . '">';
      echo '<input type="hidden" name="gia" value="' . $row["Gia"] . '">';
      if (isset($_SESSION['username'])) {
      echo '<button class="btn-mua-hang" name="order">Thêm vào giỏ hàng</button>';
      echo '<button class="btn-mua-hang" name="order">Đặt hàng</button>';
      echo '<a href="index.php" style="font-size:40px">Home</a>';

      } else {
        echo 'Vui lòng đăng nhập để đặt hàng';
      }
      echo '</form>';

      // echo '<button class="btn-mua-hang">Đặt hàng</button>';
      // echo '<a href="index.php" style="font-size:40px">Home</a>';
      echo '</div>';
      echo '</div>';

    }
  } else {
    echo "Không có sản phẩm nào được tìm thấy.";
  }
} else {
  echo "Mã sản phẩm không hợp lệ.";
}

// Kiểm tra trạng thái đăng nhập và đặt tên người dùng
$tenNguoiDung = isset($_SESSION['username']) ? $_SESSION['username'] : 'khach';

// Chức thêm bình luận
if (isset($_POST['submit'])) {
  $noiDung = $_POST['noiDung'];

  $sql = "INSERT INTO BinhLuan (MaSanPham, TenNguoiDung, NoiDung) VALUES ('$maSanPham', '$tenNguoiDung', '$noiDung')";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Lỗi: " . $conn->error;
  }
}

// Xóa bình luận
if (isset($_POST['delete_comment'])) {
  $maBinhLuan = $_POST['maBinhLuan'];
  $sql = "DELETE FROM BinhLuan WHERE MaBinhLuan = '$maBinhLuan' AND TenNguoiDung = '$tenNguoiDung'";
  if ($conn->query($sql) === TRUE) {
    // Xóa thành công
  } else {
    echo "Lỗi: " . $conn->error;
  }
}

//

echo '<div class="comment-form">';
echo '<form method="post" action="">';
echo '<textarea id="noiDung" name="noiDung" required></textarea><br>';
echo '<input type="submit" name="submit" value="Gửi bình luận">';
echo '</form>';
echo '</div>';

// Hiển thị các bình luận
$sql = "SELECT * FROM BinhLuan WHERE MaSanPham = $maSanPham ORDER BY NgayBinhLuan DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<div class="comments-section">';
  echo '<h2>Bình luận</h2>';
  while ($row = $result->fetch_assoc()) {
    echo '<div class="comment">';
    echo '<h3>' . $row["TenNguoiDung"] . '</h3>';
    echo '<p>' . $row["NoiDung"] . '</p>';
    echo '<small>' . $row["NgayBinhLuan"] . '</small>';
    // Thêm form xóa bình luận
    echo '<form method="post" action="">';
    echo '<input type="hidden" name="maBinhLuan" value="' . $row["MaBinhLuan"] . '">';
    echo '<input type="submit" name="delete_comment" value="Xóa">';
    echo '</form>';
    echo '</div>';
  }
  echo '</div>';
} else {
  echo "Chưa có bình luận nào.";
}

?>