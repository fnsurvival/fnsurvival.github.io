<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <title>Đăng ký</title>
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Logosite.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/ao21b20z/require.css">
    <link rel="stylesheet" href="/css/ao21b20z/font.css">
    <link rel="stylesheet" href="/css/scrol.css">
    <script src="/js/font1.js"></script>
    <script src="/js/idk.js"></script>
    <link rel="shortcut icon" href="/Logosite.png" type="image/x-icon">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YSEL8YGQZK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YSEL8YGQZK');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2M5PZQW8D4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2M5PZQW8D4');
    </script>
</head>

<body>
<div class="sidebar">
            <div class="logo">
                <h4>LOGO</h4>
            </div>
            <nav>
                <ul class="mother-content">
                    <noscript>
                    <!-- <li class="main-content">
                        <a href="#">Home</a>
                        <ul class="cap_2">
                            <li>1QUE</li>
                            <li>2QUE</li>
                            <li>3QUE</li>
                        </ul>
                    </li> -->
                    </noscript>
                    <li class="main-content"><a href="index.html">Shop <i class="fa-solid fa-chevron-down fa-xs" style="color: #ffffff;"></i></a></li>
                    <li class="main-content"><a href="caythue/dashboard.php">Đăng ký</a></li>
                </ul>
                <div class="icon">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die($mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "  <br>
                    <div class='form'>
                    <h3>Incorrect Username/password.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                    </div>";
        }
    } else {
    ?><br>
        <form class="form" method="post" name="login">
            <h1 class="login-title">Đăng nhập</h1><hr><br>
            <input type="text" class="login-input" name="username" placeholder="Tên đã đăng ký" title="Tên đã đăng ký" autocomplete="on" autofocus="true" /><br><br>
            <input type="password" class="login-input" name="password" placeholder="Mật khẩu" title="Mật khẩu" /><br><br>
            <input type="submit" value="Đăng nhập" name="submit" class="login-button" /><br><br>
            <p class="link">Chưa có tài khoản O_o?<br><a href="registration.php">Cút đi đăng ký</a></p>
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
    <style>
        form, .form {
            padding: 15px;
            margin: auto;
            border: 1px solid whitesmoke;
            border-radius: 5px;
            max-width: 500px;
            text-align: center;
        }
        .login-button {
            cursor: pointer;
        }
    </style>
</body>

</html>