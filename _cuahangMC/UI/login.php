<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <title>Đăng nhập</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Logosite.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/UI/login.css">
    <link rel="stylesheet" href="/css/ao21b20z/require.css">
    <link rel="stylesheet" href="/css/ao21b20z/font.css">
    <link rel="stylesheet" href="/css/scrol.css">
    <script src="/js/idk.js"></script>
    <link rel="shortcut icon" href="/Logosite.png" type="image/x-icon">
    <script src="js/index.js"></script>
</head>
<body>
    <div class="nav" id="nav" style="border: 1px solid whitesmoke;">
        <div class="user-s">
            <a href="../">
                <img src="/Logosite.png" alt="FNSURVIVAL">
            </a>
            <div class="playnow">
                <a href="registration">Đăng Ký</a>
            </div>
        </div>
        <hr>
    </div>
    <form class="form" action="../session/userLoginHandling.php" method="POST" name="login">
        <h1 class="login-title">Đăng nhập</h1><hr>
        <input type="text" class="login-input" name="username" placeholder="Tên đã đăng ký" title="Tên đã đăng ký" autocomplete="on" autofocus="true" required/>
        <input type="password" class="login-input" name="password" placeholder="Mật khẩu" title="Mật khẩu" required autocomplete="on"/>
        <input type="submit" value="Đăng nhập" name="submit" class="login-button" />
        <p class="link_redirect">Chưa có tài khoản O_o?<br><a href="registration">Cút đi đăng ký</a></p>
    </form>
</body>
</html>