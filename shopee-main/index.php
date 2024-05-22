<?php
session_start();
if (!isset($_SESSION['username'])) {
    // echo '<a href="dangnhap.php">Đăng nhập</a>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-SHOES</title>
    <!-- <link rel="icon" href="./assets/img/logo/shopee-logo.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- main -->
    <div class="app">
        <!-- header -->
        <?php include 'header.php'; ?>
        <!-- container -->
        <div class="container">
            <div class="grid wide">
                <div class="row sm-gutter">
                    <div class="col l-2 m-0 c-0">
                        <!-- category -->
                        <nav class="category">
                            <h3 class="category-heading">
                                <i class="category-heading-icon fas fa-list-ul"></i>
                                Bộ lọc tìm kiếm
                            </h3>
                            <div class="category-group">
                                <div class="category-group-title">Theo Danh Mục</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Giày thể thao
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Giày lười
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Giày cao gót
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Giày boots
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Giày sandal
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Nơi Bán</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hà Nội
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hồ Chí Minh
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Đà Nẵng
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Đơn Vị Vận Chuyển</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hoả tốc
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Nhanh
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Tiết kiệm
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Thương Hiệu</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Kingston
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Sandisk
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Seagate
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Khoảng Giá</div>
                                <div class="category-group-filter">
                                    <input type="number" placeholder="đ TỪ" class="category-group-filter-input">
                                    <i class="fas fa-arrow-right"></i>
                                    <input type="number" placeholder="đ ĐẾN" class="category-group-filter-input">
                                </div>
                                <button class="btn btn--primary category-group-filter-btn">Áp dụng</button>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Loại Shop</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shoppee
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shoppee Mail
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shop yêu thích
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Tình Trạng</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Mới
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Đã sử dụng
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Lựa Chọn Thanh Toán</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Thanh toán khi nhận hàng
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Chuyển khoản
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Trả góp 0%
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Đánh Giá</div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Dịch Vụ & Khuyến Mãi</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Freeship Xtra
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hoàn xu Xtra
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Đang giảm giá
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Miễn phí vận chuyển
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Gì cũng rẻ
                                    </li>
                                </ul>
                            </div>
                            <button class="btn btn--primary category-group-filter-btn category-group--margin">LÀM
                                MỚI</button>
                        </nav>
                    </div>
                    <div class="col l-10 m-12 c-12">
                        <!-- home filter -->
                        <div class="home-filter hide-on-mobile-tablet">
                            <div class="home-filter-control">
                                <p class="home-filter-title">Sắp xếp theo</p>
                                <button class="btn btn--primary home-filter-btn">Phổ biến</button>
                                <button class="btn home-filter-btn">Mới nhất</button>
                                <button class="btn home-filter-btn">Bán chạy</button>
                                <div class="btn home-filter-sort">
                                    <p class="home-filter-sort-btn">Giá</p>
                                    <i class="fas fa-sort-amount-down-alt"></i>
                                    <ul class="home-filter-sort-list">
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">
                                                Giảm dần
                                                <i class="fas fa-sort-amount-down-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">
                                                Tăng dần
                                                <i class="fas fa-sort-amount-up-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="home-filter-page">
                                <div class="home-filter-page-number">
                                    <p class="home-filter-page-now">1</p>
                                    /14
                                </div>
                                <div class="home-filter-page-control">
                                    <a href="#" class="home-filter-page-btn home-filter-page-btn--disable">
                                        <i class="fas fa-angle-left"></i>
                                    </a>
                                    <a href="#" class="home-filter-page-btn">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- home product -->
                        <div class="home-product">
                            <nav class="mobile-category">
                                <ul class="mobile-category-list">
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Thiết bị mạng</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Chuột và bàn phím</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">USB</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Link kiện máy tính</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Wifi</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Ổ cứng</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">CD/DVD</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Tai nghe</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Lót chuột</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Micro</a>
                                    </li>
                                </ul>
                            </nav>

                            <div id="list-product" class="row sm-gutter"></div>
                            <div id="list-product" class="row sm-gutter">
                                <!-- <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(./assets/img/home/1.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống
                                                thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180.000đ</p>
                                                <p class="home-product-item__price-new">200.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div> -->

                                <?php
                                include '../db_connect.php';

                                $sql = "SELECT * FROM SanPham";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<div class="col l-2-4 m-3 c-6 home-product-item">';
                                        echo '<a class="home-product-item-link" href="ChiTietSanPham.php?id=' . $row["MaSanPham"] . '">';
                                        echo '<div class="home-product-item__img" style="background-image: url(\'../sanpham/img/' . $row["HinhAnh"] . '\');"></div>';
                                        echo '<div class="home-product-item__info">';
                                        echo '<h4 class="home-product-item__name">' . $row["TenSanPham"] . '</h4>';
                                        echo '<div class="home-product-item__price">';
                                        // echo '<p class="home-product-item__price-old">180.000đ</p>';
                                        $gia = $row["Gia"];
                                        // Định dạng lại giá theo tiền Việt Nam
                                        $gia_formatted = number_format($gia, 0, ',', '.') . 'đ';

                                        // Hiển thị giá trong thẻ <p>
                                        echo '<p class="home-product-item__price-new">' . $gia_formatted . '</p>';
                                        echo '<i class="home-product-item__ship fas fa-shipping-fast"></i>';
                                        echo '</div>';
                                        echo '<div class="home-product-item__footer">';
                                        echo '<div class="home-product-item__save">';
                                        echo '<input type="checkbox" name="save-check" id="heart-save">';
                                        echo '<label for="heart-save" class="far fa-heart"></label>';
                                        echo '</div>';
                                        echo '<div class="home-product-item__rating-star">';
                                        echo '<i class="star-checked far fa-star"></i>';
                                        echo '<i class="star-checked far fa-star"></i>';
                                        echo '<i class="star-checked far fa-star"></i>';
                                        echo '<i class="star-checked far fa-star"></i>';
                                        echo '<i class="star-checked far fa-star"></i>';
                                        echo '</div>';
                                        echo '<div class="home-product-item__saled">Đã bán ' . $row["SoLuongDaBan"] . '</div>';
                                        echo '</div>';
                                        echo '<div class="home-product-item__origin">Hà Nội</div>';
                                        // echo '<div class="home-product-item__favourite">Yêu thích</div>';
                                        // echo '<div class="home-product-item__sale-off">';
                                        // echo '<div class="home-product-item__sale-off-value">40%</div>';
                                        // echo '<div class="home-product-item__sale-off-label">GIẢM</div>';
                                        // echo '</div>';
                                        echo '</div>';
                                        // echo '<div class="home-product-item__footer">';
                                        echo '<form method="post" action="ThemVaoGioHang.php">';
                                        if(isset($_SESSION['username'])) {
                                            echo '<input type="hidden" name="username" value="' . htmlspecialchars($_SESSION['username']) . '">';
                                        } echo '<input type="hidden" name="maSanPham" value="' . $row["MaSanPham"] . '">';
                                        echo '<input type="hidden" name="tenSanPham" value="' . $row["TenSanPham"] . '">';
                                        echo '<input type="hidden" name="hinhAnh" value="' . $row["HinhAnh"] . '">';
                                        echo '<input type="hidden" name="maDanhMuc" value="' . $row["MaDanhMuc"] . '">';
                                        echo '<input type="hidden" name="moTa" value="' . $row["MoTa"] . '">';
                                        echo '<input type="hidden" name="soLuong" value="' . $row["SoLuong"] . '">';
                                        echo '<input type="hidden" name="hangSanXuat" value="' . $row["HangSanXuat"] . '">';
                                        echo '<input type="hidden" name="soLuongDaBan" value="' . $row["SoLuongDaBan"] . '">';
                                        echo '<input type="hidden" name="trangThai" value="' . $row["TrangThai"] . '">';
                                        echo '<input type="hidden" name="gia" value="' . $row["Gia"] . '">';
                                        if(isset($_SESSION['username'])) {
                                            echo '<button type="submit" name="order" style="width:100%">Thêm vào giỏ hàng</button>';
                                        } else {
                                            echo 'Vui lòng đăng nhập để đặt hàng';
                                        }
                                        
                                        echo '</form>';
                                        echo '</a>';
                                        echo '</div>';
                                    }
                                } else {
                                    echo "Không có sản phẩm nào được tìm thấy.";
                                }

                                $conn->close();
                                ?>
                            </div>
                        </div>
                        <!-- pagination -->
                        <ul class="pagination home-product-pagination">
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link pagination-item-link--disable">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="#" class="pagination-item-link">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item-link pagination-item-link--disable">. . .</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">8</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="footer">
            <!-- main footer -->
            <div class="main-footer">
                <div class="grid wide">
                    <div class="row sm-gutter main-footer-info">
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">CHĂM SÓC KHÁCH HÀNG</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link">Trung Tâm Trợ Giúp</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Shopee Blog</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Shopee Mall</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Hướng Dẫn Mua Hàng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Hướng Dẫn Bán Hàng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Thanh Toán</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Shopee Xu</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Vận Chuyển</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Trả Hàng & Hoàn Tiền</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chăm Sóc Khách Hàng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chính Sách Bảo Hành</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">VỀ SHOPEE</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link">Giới Thiệu Về Shopee Việt Nam</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Tuyển Dụng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Điều Khoản Shopee</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chính Sách Bảo Mật</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chính Hãng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Kênh Người Bán</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Flash Sales</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chương Trình Tiếp Thị Liên Kết Shopee</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Liên Hệ Với Truyền Thông</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-4 c-12 pay-and-ship">
                            <div>
                                <h3 class="footer__heading">THANH TOÁN</h3>
                                <div class="footer-sale-ship">
                                    <img src="./assets/img/pay/1.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/2.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/3.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/4.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/5.PNG" class="footer-item-sale-ship">
                                </div>
                            </div>
                            <div>
                                <h3 class="footer__heading">ĐƠN VỊ VẬN CHUYỂN</h3>
                                <div class="footer-sale-ship">
                                    <img src="./assets/img/ship/1.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/2.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/3.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/4.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/5.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/6.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/7.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/8.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/9.PNG" class="footer-item-sale-ship">
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">THEO DÕI CHÚNG TÔI</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-fb">
                                        <i class="footer-item-icon fab fa-facebook-square"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-is">
                                        <i class="footer-item-icon fab fa-instagram-square"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-li">
                                        <i class="footer-item-icon fab fa-linkedin"></i>
                                        LinkedIn
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-8 c-6">
                            <h3 class="footer__heading">TẢI ỨNG DỤNG SHOPEE</h3>
                            <div class="footer-download">
                                <a href="#" class="footer-download-link">
                                    <img src="./assets/img/qr/qr-code.png" class="footer-download-qr">
                                </a>
                                <div class="footer-download-app">
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/gg-play.png" class="footer-download-app-img">
                                    </a>
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/app-store.png" class="footer-download-app-img">
                                    </a>
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/app-gallery.png" class="footer-download-app-img">
                                    </a>
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/ltp-img.png" class="footer-download-app-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- copyright -->
                    <div class="row">
                        <div class="grid">
                            <p class="copyright-title">
                                © 2021 Shopee copyright - Công ty TNHH CRF - Product by LTP
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- other footer -->
            <div class="other-footer">
                <div class="grid wide">
                    <div class="row other-footer-heading">
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                CHÍNH SÁCH BẢO MẬT
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                QUY CHẾ HOẠT ĐỘNG
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                CHÍNH SÁCH VẬN CHUYỂN
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                TRẢ HÀNG VÀ HOÀN TIỀN
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="grid other-footer-info">
                            <p class="other-footer-title">Thông tin về Shoppee</p>
                            <p class="other-footer-more">
                                Địa chỉ: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai,
                                Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam.
                                Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.shopee.vn
                            </p>
                            <p class="other-footer-more">
                                Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức Trí -
                                Điện thoại liên hệ: 024 73081221 (ext 4678)
                            </p>
                            <p class="other-footer-more">
                                Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư
                                TP Hà Nội cấp lần đầu ngày 10/02/2015
                            </p>
                            <p class="other-footer-more">
                                Ngày sản xuất 2015 -
                                Bản quyền gốc thuộc về Công ty TNHH Shopee
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- modal -->
    <div class="modal">
        <div class="modal__body">
            <!-- authen signin-->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Ký</h3>
                        <div class="auth-form__switch-btn"><?php echo $_SESSION['username']; ?></div>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" placeholder="Số điện thoại" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Mật khẩu" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Nhập lại mật khẩu" class="auth-form__input">
                        </div>
                    </div>
                    <div class="auth-form__policy">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng ký, bạn đồng ý với Shoppee về
                            <a href="#" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                            <a href="#" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn auth-form__back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>
                <div class="auth-form__signin">
                    <a href="#" class="btn btn-signin auth-form__signin-fb">
                        <i class="auth-form__signin-icon fab fa-facebook-square"></i>
                        <p class="auth-form__signin-text">
                            Kết nối với Facebook
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-gg">
                        <i class="auth-form__signin-icon fab fa-google"></i>
                        <p class="auth-form__signin-text">
                            Kết nối với Google
                        </p>
                    </a>
                </div>
            </div>

            <!-- authen login-->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Nhập</h3>
                        <div class="auth-form__switch-btn">Đăng ký</div>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" placeholder="Số điện thoại" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Mật khẩu" class="auth-form__input">
                        </div>
                    </div>
                    <div class="auth-form__help">
                        <a href="#" class="auth-form__help-link auth-form__help-forgot">Quên Mật Khẩu</a>
                        <div class="auth-form__help--separate"></div>
                        <a href="#" class="auth-form__help-link">Cần trợ giúp?</a>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn auth-form__back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__signin">
                    <a href="#" class="btn btn-signin auth-form__signin-sms">
                        <i class="auth-form__signin-icon fas fa-sms"></i>
                        <p class="auth-form__signin-text">
                            SMS
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-fb">
                        <i class="auth-form__signin-icon fab fa-facebook-square"></i>
                        <p class="auth-form__signin-text">
                            Facebook
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-gg">
                        <i class="auth-form__signin-icon fab fa-google"></i>
                        <p class="auth-form__signin-text">
                            Google
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- script js -->
    <script src="./assets/js/product.js"></script>
</body>

</html>