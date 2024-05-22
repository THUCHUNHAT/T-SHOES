<?php
include '../db_connect.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];

    // Sử dụng prepared statement để tránh tấn công SQL Injection
    $stmt = $conn->prepare("DELETE FROM NguoiDung WHERE Username = ?");
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        header("location: hienthi.php");
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Không tìm thấy Username người dùng.";
}

$conn->close();
?>
