<header class="header">
            <div class="grid wide">
                <!-- navbar -->
                <nav class="header__navbar hide-on-mobile-tablet">
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Kênh Người Bán
                        </li>
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Chào mừng tới
                            cửa hàng T-SHOES</li>
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate header__show-qr">
                            Mua hàng
                        </li>
                        <!-- qr code -->
                        <div class="header__qrcode">
                            <img src="./assets/img/qr/qr-code.png" class="header__qr">
                            <div class="header__apps">
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/app-store.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/gg-play.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/app-gallery.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/ltp-img.png" class="header__app-img">
                                </a>
                            </div>
                        </div>
                        <li class="header__nav-item">
                            Kết nối
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-facebook"></i>
                            </a>
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__show-note">
                            <a href="#" class="header__nav-item-link">
                                <i class="header__nav-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <!-- thông báo -->
                            <div class="header__notifi">
                                <header class="header__notifi-header">
                                    <h3>Thông Báo Mới Nhận</h3>
                                </header>
                                <ul class="header__notifi-list">
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/casio.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Casio fx 580 VN Plus
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Mua Casio 580 của LTP bao xịn, bao mượt, bao đẹp
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/iphone.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Điện Thoại iPhone 13 Pro 128GB - Hàng Nhập Khẩu
                                                </div>
                                                <div class="header__notifi-desc">
                                                    3 Camera: Ống kính góc rộng f/1.5 - Tele f/2.8 - Siêu rộng f/1.8
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/iphone2.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Apple iPhone 12 Pro Max 128GB
                                                </div>
                                                <div class="header__notifi-desc">
                                                    iPhone 12 Pro Max. Màn hình Super Retina XDR 6.7 inch
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/laptop.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Laptop HP 650 g1 siêu khỏe bền
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Laptop siêu bền, HP 650 g1 siêu khỏe bền ssd 120gb 15,6inh FULL HD
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/laptop2.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Laptop thinkpad x240 chất mỏng nhẹ i5 4300u Ram 4gb Ssd 128gb
                                                </div>
                                                <div class="header__notifi-desc">
                                                    HP 650 g1 chip M đời 4, cpu i5 4200M ram 4gb -8gb
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notifi-footer">
                                    <a href="#" class="header__notifi-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-item-link">
                                <i class="header__nav-icon far fa-question-circle"></i>
                                Hỗ trợ
                            </a>
                        </li>


                        <a href="../DangKyKhachHang/dangky.php" class="header__nav-item-link">Đăng ký</a>

                        <?php if (isset($_SESSION['username'])): ?>
                            <li class="header__nav-item header__nav-item--bold">
                                <a href="#"
                                    class="header__nav-item-link"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="header__nav-item header__nav-item--bold">
                                <a href="../DangKyKhachHang/dangnhap.php" class="header__nav-item-link">Đăng nhập</a>
                            </li>
                        <?php endif; ?>
                        <a href="../DangKyKhachHang/dangxuat.php" class="header__nav-item-link">Đăng xuất</a>

                        <!-- #region -->
                        <!-- <li class="header__nav-item header__nav-user">
                            <img src="./assets/img/user.png" class="header__nav-user-avt">
                            <a href="#" class="header__nav-item-link header__nav-item--bold">Lục Thiên Phong</a>
                            <ul class="header__nav-user-menu">
                                <li class="header__nav-user-item">
                                    <a href="#">Tài khoản của tôi</a>
                                </li>
                                <li class="header__nav-user-item">
                                    <a href="#">Đơn mua</a>
                                </li>
                                <li class="header__nav-user-item">
                                    <a href="#">Đăng xuất</a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <!-- search -->
                <div class="header__contain">
                    <label for="mobile-search" class="header__mobile-search">
                        <i class="header__mobile-search-icon fas fa-search"></i>
                    </label>
                    <div class="header__logo">
                        <!-- <a href="#" class="header__logo-link">
                            <img src="./assets/img/logo/logo-full-white.png" class="header__logo-img">
                        </a> -->
                        <h1 style="color:white; font-size:50px;">T-SHOES</h1>
                    </div>
                    <input type="checkbox" id="mobile-search" class="header__search-check" hidden>
                    <form action="timkiem.php" method="GET">
                        <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm...">
                        <button type="submit">Tìm kiếm</button>
                    </form>
                    <style>
                        input[type="text"] {
                            width: 300px;
                            /* Điều chỉnh theo nhu cầu */
                            background-color: white;
                            color: grey;
                            /* Màu chữ mặc định */
                            padding: 10px 15px;
                            border-radius: 5px;
                            font-size: 16px;
                            border: 1px solid #ccc;
                            /* Thêm đường viền */
                        }

                        /* Thiết lập màu chữ khi input được focus */
                        input[type="text"]:focus {
                            color: black;
                        }

                        /* Thiết lập màu nền của input là màu trắng */
                        input[type="text"] {
                            background-color: white;
                            color: grey;
                            /* Màu chữ mặc định */
                        }

                        /* Thiết lập kiểu dáng cho nút */
                        button {
                            background-color: #FB6445;
                            border-color: white;
                            color: white;
                            padding: 10px 15px;
                            border-radius: 5px;
                            font-size: 16px;
                            cursor: pointer;
                        }

                        /* Định dạng nút khi di chuột vào */
                        button:hover {
                            background-color: darkorange;
                        }
                    </style>
                    <!-- header__cart--no-cart --><!-- header__cart--has-cart -->
                    <div class="header__cart header__cart--has-cart">
                        <i class="header__cart-icon fas fa-shopping-cart"></i>
                        <?php
                        include '../db_connect.php';
                        // Đếm số hàng trong bảng GioHang
                        $count_sql = "SELECT COUNT(*) as count FROM GioHang";
                        $count_result = $conn->query($count_sql);
                        $row_count = $count_result->fetch_assoc()['count'];

                        ?>
                        <div class="header__cart-count"><?php echo $row_count; ?></div>

                        <div class="header__cart-list no-cart">
                            <img src="./assets/img/sp/no-cart.png" class="header__no-cart-img">
                            <p class="header__no-cart-text">Chưa có sản phẩm</p>
                        </div>

                        <div class="header__cart-list has-cart">
                            <h4 class="header__cart-heading">Sản phẩm đã chọn</h4>
                            <ul class="header__cart-list-item">
                                <!-- <li class="header__cart-item">
                                    <img src="./assets/img/buy/1.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Thanh Thanh 2000 1m57 46kg 88-62-89</h3>
                                            <p class="header__cart-item-price">2.000.000đ</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 2</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <?php
                                include '../db_connect.php';
                                $sql = "SELECT * FROM GioHang";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // echo "<ul class='cart-list'>";
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<li class='header__cart-item'>";
                                        echo "<img src='../sanpham/img/" . $row["HinhAnh"] . "' class='header__cart-item-img'>";
                                        echo "<div class='header__cart-item-info'>";
                                        echo "<div class='header__cart-item-heading'>";
                                        echo "<h3 class='header__cart-item-name'>" . $row["TenSanPham"] . "</h3>";
                                        echo "<p class='header__cart-item-price'>" . number_format($row["TongTien"], 0, ',', '.') . "đ</p>";
                                        echo "</div>";
                                        echo "<div class='header__cart-item-body'>";
                                        echo "<p class='header__cart-item-number'>x " . $row["SoLuong"] . "</p>";
                                        echo "<div class='header__cart-item-close' onclick='removeItem(" . $row["MaGioHang"] . ")'>";
                                        echo "Xoá <i class='fas fa-times'></i>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</li>";
                                    }
                                    // echo "</ul>";
                                } else {
                                    echo "Không có đơn hàng nào được tìm thấy.";
                                }

                                $conn->close();
                                ?>
                                <script>
                                    function removeItem(id) {
                                        if (confirm('Bạn có chắc chắn muốn xóa đơn hàng này không?')) {
                                            window.location.href = 'xoagiohang.php?id=' + id;
                                        }
                                    }
                                </script>

                            </ul>
                            <div class="header__cart-footer">
                                <a href="GioHang.php" class="btn btn--primary header__cart-see-cart">Xem giỏ hàng</a>
                                <a href="DonHang.php" class="btn btn--primary header__cart-see-cart">Xem đơn hàng</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="header__sort-bar">
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Liên quan</a>
                </li>
                <li class="header__sort-item header__sort-item--active">
                    <a href="#" class="header__sort-link">Mới nhất</a>
                </li>
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Bán chạy</a>
                </li>
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Giá</a>
                </li>
            </ul>
        </header>