<!DOCTYPE html>
<html lang="vi">
<head>
    <?php
    require('db.php');
    include("auth_session.php");
    ?>
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2M5PZQW8D4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2M5PZQW8D4');
    </script>
    <title>Shop lừa đảo</title>
</head>

<body onload="thongbaopopup()">
    <div class="tbpopup" id="tbpopup-1">
        <div class="tboverlay"></div>
        <div class="tbcontent">
            <div class="tbclose-btn" onclick="thongbaopopup()">&times;</div>
            <div style="font-size:30px;font-weight:bold">Thông báo</div>
            <hr>
            <div style="padding: 5px;">
                <p>10k = 100.000rb đã qua thuế</p>
            </div>
            <hr>
            <p>Shop Lừa đảo luôn vui vẻ khi lừa người</p>
        </div>
    </div>
    <!-- NAVBAR -->
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
                <li class="main-content"><a href="index.html">Shop</a></li>
            </ul>
            <div class="icon">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </div>
    <!-- END HERE -->
    <!-- Content page -->
    <br>
    <div class="container">
        <p>Nạp thẻ</p>
        <hr><br>
        <form action="index.html" method="get">
            <div class="card">
                <select required>
                    <option value="">-- Thẻ, sai là mất --</option>
                    <option value="viettiel">Viettiel</option>
                    <option value="mobi">Mobi</option>
                    <option value="vina">Vina</option>
                    <option value="vietnammobile">Vietnammobile</option>
                </select>
            </div><br>
            <div class="card">
                <select required>
                    <option value="">-- Chọn mệnh giá, sai là mất --</option>
                    <option value="10000">10,000 VND</option>
                    <option value="20000">20,000 VND</option>
                    <option value="50000">50,000 VND</option>
                    <option value="100000">100,000 VND</option>
                    <option value="200000">200,000 VND</option>
                    <option value="500000">500,000 VND</option>
                </select>
            </div><br>
            <div class="card">
                <input id="sessionNum" class="num-input" type="number" name="mathe" placeholder="Mã số thể" maxlength="35" required><br><br>
                <input id="sessionNum" class="num-input" type="number" name="seri" placeholder="Mã số seri" maxlength="35" required>
            </div><br>
            <div class="card">
                <button class="sumbit-od" type="submit" id="xuly_napthe" value="Nạp thẻ">Nạp thẻ</button>
            </div>
        </form>
        <!-- <div class="vidtu">
            <video src="/vid/2023-01-09 22-57-45.mp4" width="450px" height="300px" controls></video>
        </div> -->

    </div>

    <br><br>
    <div class="outline-content">
        <div class="team-descr">
            <h1>Team RAM</h1>
        </div>
        <hr><br>
        <div class="content-box">
            <!-- CONTENT SHOP -->
            <div class="pad-oul">
                <div class="shop">
                    <a class="descr" href="#" style="display:block;">Mua Hùng 3 lỗ</a>
                    <hr>
                    <a href="#" style="display:block;">
                        <img src="https://tr.rbxcdn.com/f73d81f7e9cd5c4f4b5e12886a9bc74a/150/150/AvatarHeadshot/Png" alt="">
                    </a>
                    <hr>
                    <div style="display:block;">
                        <li style="display:circle;">Không event</li>
                        <br>
                        <a class="buy-in" href="dichvu/rb120.html">Mua ngay</a>
                    </div>
                </div>
            </div>

            <div class="pad-oul">
                <div class="shop">
                    <a class="descr" href="#" style="display:block;">Mua Nam dái bò</a>
                    <hr>
                    <a href="#" style="display:block;">
                        <img src="https://tr.rbxcdn.com/590df7f935703afc5faa7285439166dc/150/150/AvatarHeadshot/Png" alt="">
                    </a>
                    <hr>
                    <div style="display:block;">
                        <li style="display:circle">Không event</li>
                        <br>
                        <a class="buy-in" href="#">Mua ngay</a>
                    </div>
                </div>
            </div>

            <div class="pad-oul">
                <div class="shop">
                    <a class="descr" href="#" style="display:block;">Mua Hữu Trang</a>
                    <hr>
                    <a href="#" style="display:block;">
                        <img src="https://tr.rbxcdn.com/b265eab7f5ca4b375bb53da5c83a8b2a/150/150/AvatarHeadshot/Png" alt="">
                    </a>
                    <hr>
                    <div style="display:block;">
                        <li style="display:circle">Không event</li>
                        <br>
                        <a class="buy-in" href="#">Mua ngay</a>
                    </div>
                </div>
            </div>

            <div class="pad-oul">
                <div class="shop">
                    <a class="descr" href="#" style="display:block;">Mua Quang dảk</a>
                    <hr>
                    <a href="#" style="display:block;">
                        <img src="https://tr.rbxcdn.com/ebf1e0bee7f5522dded30c5ba707f8d1/150/150/AvatarHeadshot/Png" alt="">
                    </a>
                    <hr>
                    <div style="display:block;">
                        <li style="display:circle">Không event</li>
                        <br>
                        <a class="buy-in" href="#">Mua ngay</a>
                    </div>
                </div>
            </div>

            <div class="pad-oul">
                <div class="shop">
                    <a class="descr" href="#" style="display:block;">Mua Tiến múp</a>
                    <hr>
                    <a href="#" style="display:block;">
                        <img src="https://tr.rbxcdn.com/1c2667bf325644bbd8bfd10463129ff8/150/150/AvatarHeadshot/Png" alt="">
                    </a>
                    <hr>
                    <div style="display:block;">
                        <li style="display:circle">Không event</li>
                        <br>
                        <a class="buy-in" href="#">Mua ngay</a>
                    </div>
                </div>
            </div>

            <div class="pad-oul">
                <div class="shop">
                    <a class="descr" href="#" style="display:block;">Mua Tuấn</a>
                    <hr>
                    <a href="#" style="display:block;">
                        <img src="https://tr.rbxcdn.com/8f66cb9b92b777a7ef8f5b6db23aa951/150/150/AvatarHeadshot/Png" alt="">
                    </a>
                    <hr>
                    <div style="display:block;">
                        <li style="display:circle">Không event</li>
                        <br>
                        <a class="buy-in" href="#">Mua ngay</a>
                    </div>
                </div>
            </div>

            <div class="pad-oul">
                <div class="shop">
                    <a class="descr" href="#" style="display:block;">Mua Đức cẹc</a>
                    <hr>
                    <a href="#" style="display:block;">
                        <img src="https://tr.rbxcdn.com/b50ac30cac159ffe02203e0200453e62/150/150/AvatarHeadshot/Png" alt="">
                    </a>
                    <hr>
                    <div style="display:block;">
                        <li style="display:circle">Không event</li>
                        <br>
                        <a class="buy-in" href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT SHOP -->
        <br>
        <div class="team-descr">
            <p>Vẫn còn 1 số sp chưa được công khai. Mong bạn thông cảm</p>
        </div>
        <hr>
    </div>


    <!-- end -->
    <div id="contextMenu" class="context-menu" style="display:none">
        <ul>
            <li class="menu"><a class="link1" href="/index.html"><i class="fa-solid fa-house-user">&nbsp;</i>Home</a></li>
            <li class="menu"><a class="link2" href="https://discord.com/invite/nfTUEWrEe6" target="_blank"><i class="fa-brands fa-discord">&nbsp;</i>Discord</a></li>
            <li class="menu"><a class="link3" href="#"><i class="fa-regular fa-circle-xmark">&nbsp;</i>Chưa có</a></li>
            <li class="menu"><a class="link4" href="#"><i class="fa-regular fa-circle-xmark">&nbsp;</i>Chưa có</a></li>
        </ul>
    </div>
</body>
<button id="Backtotop" onclick="Backtotop()"><i class="fa-solid fa-arrow-up"></i></button>
<script>
    // BACK TO TOP
    let mybutton = document.getElementById("Backtotop");

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function Backtotop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    function thongbaopopup() {
        document.getElementById("tbpopup-1").classList.toggle("active");
    }
</script>

</html>