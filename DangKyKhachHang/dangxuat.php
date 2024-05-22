<?php
session_start();
session_destroy();
header("location: ../shopee-main/index.php");
exit;
?>
