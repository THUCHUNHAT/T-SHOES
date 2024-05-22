<?php
    include '../db_connect.php';

    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $hoten = $_POST['hoten'];
        $diachi = $_POST['diachi'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $phanquyen = $_POST['phanquyen'];

        // Cập nhật thông tin người dùng trong cơ sở dữ liệu
        $sql = "UPDATE NguoiDung SET HoTen='$hoten', DiaChi='$diachi', Email='$email', SoDienThoai='$sdt', PhanQuyen='$phanquyen' WHERE Username='$id'";
        
        if ($conn->query($sql) === TRUE) {
            // Hiển thị thông báo cảnh báo và chuyển hướng sau khi người dùng nhấn OK
            echo "<script>alert('Thông tin người dùng đã được cập nhật thành công.'); window.location.href = 'hienthi.php';</script>";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Không có thông tin người dùng được cung cấp.";
    }

    $conn->close();
?>
