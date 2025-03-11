<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đang đăng xuất tài khoản...</title>
    <script src="js/index.js"></script>
</head>
</html>
<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        header(header: "Location: ../");
    }
?>