<!DOCTYPE html>
<?php
ob_start();
session_start();
require 'session/db/db.php'
?>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Logosite.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/ao21b20z/require.css">
    <link rel="stylesheet" href="/css/ao21b20z/font.css">
    <link rel="stylesheet" href="/css/scrol.css">
    <link rel="stylesheet" href="/css/root/rt.css">
    <link rel="stylesheet" href="/css/ao21b20z/AB.css">
    <script src="https://kit.fontawesome.com/a94c2c8bc2.js" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <link rel="shortcut icon" href="/Logosite.png" type="image/x-icon">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2M5PZQW8D4"></script>
    <title>Shop lừa đảo</title>
</head>
<!-- <body onload="thongbaopopup()" style="user-select: none;"> -->
<body>
    <div class="tbpopup" id="tbpopup-1">
        <div class="tboverlay"></div>
        <div class="tbcontent">
            <div class="tbclose-btn" onclick="thongbaopopup()">&times;</div>
            <div style="font-size:30px;font-weight:bold">Thông báo</div>
            <hr>
            <div style="padding: 5px;">
                <p>10k = 100.000rb đã qua thuế</p>
                <p style="color:red;">Do shop thiếu kinh tế nên chỉ có thể dừng lại tại đây</p>
            </div>
            <hr>
            <p>Tạm Biệt</p>
        </div>
    </div>
    <div class="nav" id="nav" style="border: 1px solid whitesmoke;">
        <div class="user-s">
            <a href="">
                <img src="/Logosite.png" alt="FNSURVIVAL">
            </a>
            <div class="playnow">
                <?php
                    if (isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];
                        $checkifuserExist = mysqli_num_rows(result: mysqli_query(mysql: $con, query: "SELECT * FROM `user` WHERE username='$username'"));
                        if ($checkifuserExist == 1) {
                            $soduRES = $con->query(query: "SELECT * FROM `user` WHERE username='$username'");
                            $fetched = $soduRES->fetch_array(mode: MYSQLI_ASSOC);
                            $sodu = $fetched['money'] ?? null;
                            $coin = $fetched['coins'] ?? null;

                            if (number_format(num: $coin) > 1) {
                                echo '[ '. $username . ' ]' . ' | <a style="font-size:23px">' . number_format(num: $sodu) . ' VND | ' . number_format(num: $coin) . ' FCoin </a>' ;
                            } else {
                                echo '[ '. $username . ' ]' . ' | <a style="font-size:23px">' . number_format(num: $sodu) . ' VND | ' . number_format(num: $coin) . ' FCoins </a>' ;
                            }
                        }
                    } elseif (isset($_SESSION['username']) == '') {
                        session_destroy();
                        echo '<a href="UI/login">Đăng nhập</a>';
                    }
                ?>
            </div>
        </div>
        <hr>
    </div>
    <!-- Napthe -->
    <div class="form_napthe">
        <h2>Nạp Thẻ</h2>
        <form action="session/napthe/xulythe.php" class="thongtinthe" method="POST">
            <select name="loaithe" id="loaithe">
                <option>Loại thẻ - Chọn sai mất thẻ</option>
                <option value="viettel">Viettel</option>
                <option value="mobifone">MobiFone</option>
                <option value="vinaphone">Vinaphone</option>
                <option value="vietnammobile">Vietnamobile</option>
            </select>
            <select name="giatri" id="giatri">
                <option>Giá trị thẻ - Chọn sai mất thẻ</option>
                <option value="10000">10,000 VND</option>
                <option value="20000">20,000 VND</option>
                <option value="50000">50,000 VND</option>
                <option value="100000">100,000 VND</option>
                <option value="200000">200,000 VND</option>
                <option value="500000">500,000 VND</option>
            </select>
            <input type="number" name="mathe" id="mathe" placeholder="Mã thẻ">
            <input type="number" name="serial" id="serial" placeholder="Số serial">
            <input type="submit" value="Xác nhận nạp thẻ" style="cursor: not-allowed;">
        </form>
    </div>
    <center style="padding: 5px 10px"><h1>nạp bây giờ thì chỉ có donate thôi chứ ko có gì đâu:)))</h1></center>
    <div class="container">
        <!-- demo -->
        <div class="container_interact">
            <div class="head-container">Robux 120h</div>
            <div class="body-container">
                <a>
                    <img src="/Logosite.png" alt="">
                </a>
            </div>
            <div class="footer-container">
                <a>Mua ngay</a>
            </div>
        </div>
        <!-- Start -->
    </div>
</body>
</html>