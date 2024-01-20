<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Logosite.png" type="image/x-icon">
    <link rel="stylesheet" href="css/singup.css">
    <link rel="stylesheet" href="/css/ao21b20z/require.css">
    <link rel="stylesheet" href="/css/ao21b20z/font.css">
    <link rel="stylesheet" href="/css/scrol.css">
    <script src="/js/font1.js"></script>
    <script src="/js/idk.js"></script>
    <link rel="shortcut icon" href="/Logosite.png" type="image/x-icon">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2M5PZQW8D4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-2M5PZQW8D4');
    </script>
    <title>Đăng ký</title>
</head>
<body>
    <div class="sidebar" id="sidebar" style="display: block;">
        <div class="logo">
            <a class="logo-font" href="/index" style="font-family: IntoRrust;">FNSURVIVAL</a>
        </div>
        <nav>
            <ul class="mother-content">
                <li class="main-content"><a href="/caythue/index" style="color: green;">Shop roblox</a></li>
                <li class="main-content"><a href="login.php">Đăng nhập</a></li>
            </ul>
            <div class="icon">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </div><br>
    <?php
        require('db.php');
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($con, $username);
            $email    = stripslashes($_REQUEST['email']);
            $email    = mysqli_real_escape_string($con, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $create_datetime = date("Y-m-d H:i:s");
            $query    = "INSERT into `users` (username, password, email, create_datetime)
                        VALUES ('$username', '$password', '$email', '$create_datetime')";
            $result   = mysqli_query($con, $query);
            if ($result) {
                echo "<div class='form'>
                    <h3>You are registered successfully.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                    </div>";
            } else {
                echo "<div class='form'>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                    </div>";
            }
        } else {
    ?>
    <br>
    <form class="form" action="" method="post">
        <h1 class="login-title">Đăng ký</h1><hr><br>   
        <input type="text" class="login-input" name="username" autocomplete="on" placeholder="Tên đăng ký" title="Tên đăng ký" required /><br><br>
        <input type="password" class="login-input" name="password" placeholder="Mật khẩu" title="Mật khẩu" required><br><br>
        <input type="text" class="login-input" name="email" autocomplete="off" placeholder="Email" title="email"><br><br>
        <input type="submit" name="submit" value="Đăng ký" class="login-button"><br><br>
        <p class="link">Có tài khoản r sao? <a href="login.php">Đăng nhập đê</a></p>
    </form>
<?php
    }
?>
    <div id="contextMenu" class="context-menu" style="display:none">
        <ul>
            <li class="menu"><a class="link1" href="/index.html"><i class="fa-solid fa-house-user">&nbsp;</i>Home</a></li>
            <li class="menu"><a class="link2" href="https://discord.com/invite/nfTUEWrEe6" target="_blank"><i class="fa-brands fa-discord">&nbsp;</i>Discord</a></li>
            <li class="menu"><a class="link3" href="#"><i class="fa-regular fa-circle-xmark">&nbsp;</i>Chưa có</a></li>
            <li class="menu"><a class="link4" href="#"><i class="fa-regular fa-circle-xmark">&nbsp;</i>Chưa có</a></li>
        </ul>
    </div>
</body>
</html>