<?php require '../session/db/db.php' ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Logosite.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/UI/singup.css">
    <link rel="stylesheet" href="/css/ao21b20z/require.css">
    <link rel="stylesheet" href="/css/ao21b20z/font.css">
    <link rel="stylesheet" href="/css/scrol.css">
    <link rel="stylesheet" href="/css/root/rt.css">
    <script src="/js/idk.js"></script>
    <link rel="shortcut icon" href="/Logosite.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a94c2c8bc2.js" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <title>Đăng ký</title>
</head>
<body>
    <div class="nav" id="nav" style="border: 1px solid whitesmoke;">
        <div class="user-s">
            <a href="../">
                <img src="/Logosite.png" alt="FNSURVIVAL">
            </a>
            <div class="playnow">
                <a href="login">Đăng nhập</a>
            </div>
        </div>
        <hr>
    </div>
    <form class="form" action="../session/userRegHandling.php" method="POST">
        <h1 class="login-title">Đăng ký</h1><hr>
        <input type="text" id="nameInput" class="reg-input" name="username" autocomplete="off" placeholder="Tên đăng ký" title="Tên đăng ký" onkeypress="return event.charCode != 32" required />
        <input type="password" id="regInput" class="reg-input" name="password" placeholder="Mật khẩu" title="Mật khẩu" onkeypress="return event.charCode != 32" autocomplete="off" required>
        <div id="requirment">
            <strong style="font-size: 20px;">Mật khẩu phải bao gồm:</strong>
            <p id="letter" class="invalid"><i id="letterL" class="fa-solid fa-circle-xmark"></i> 1 chữ cái viết hoa</p>
            <p id="special_character" class="invalid"><i id="special_characterS" class="fa-solid fa-circle-xmark"></i> 1 ký tự đạc biệt</p>
            <p id="number" class="invalid"><i id="numberN" class="fa-solid fa-circle-xmark"></i> 1 chữ só</p>
            <p id="length" class="invalid"><i id="lengthL" class="fa-solid fa-circle-xmark"></i> Có ít nhất 8 ký tự</p>
        </div>
        <input type="text" id="emailInput" class="reg-input" name="email" autocomplete="off" placeholder="Email" title="email">
        <input type="submit" name="submit" value="Đăng ký" class="login-button">
        <p class="link_redirect">Có tài khoản r sao? <a href="login">Đăng nhập đê</a></p>
    </form>
    <script>
        var passwordInput = document.getElementById("regInput")

        var letter = document.getElementById("letter")
        var special_character = document.getElementById("special_character")
        var number = document.getElementById("number")
        var length = document.getElementById("length")

        var letterL = document.getElementById("letterL")
        var special_characterS = document.getElementById("special_characterS")
        var numberN = document.getElementById("numberN")
        var lengthL = document.getElementById("lengthL")

        passwordInput.onkeyup = function() {
            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if(passwordInput.value.match(upperCaseLetters)) {  
                letter.classList.remove("invalid");
                letter.classList.add("valid");
                letterL.classList.remove("fa-solid", "fa-circle-xmark");
                letterL.classList.add("fa-duotone", "fa-solid", "fa-circle-check");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
                letterL.classList.remove("fa-duotone", "fa-solid", "fa-circle-check");
                letterL.classList.add("fa-solid", "fa-circle-xmark");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if(passwordInput.value.match(numbers)) {  
                number.classList.remove("invalid");
                number.classList.add("valid");
                numberN.classList.remove("fa-solid", "fa-circle-xmark");
                numberN.classList.add("fa-duotone", "fa-solid", "fa-circle-check");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
                numberN.classList.remove("fa-duotone", "fa-solid", "fa-circle-check");
                numberN.classList.add("fa-solid", "fa-circle-xmark");
            }
            
            // Validate length
            if(passwordInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
                lengthL.classList.remove("fa-solid", "fa-circle-xmark");
                lengthL.classList.add("fa-duotone", "fa-solid", "fa-circle-check");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
                lengthL.classList.remove("fa-duotone", "fa-solid", "fa-circle-check");
                lengthL.classList.add("fa-solid", "fa-circle-xmark");
            }

            // username or password too longggggg
            if (document.getElementById("nameInput").value.length >100) {
                window.alert("Maximum username length: 100 characters");
            }
            if (passwordInput.value.length > 100) {
                window.alert("Maximum password length: 100 characters");
            }

            // Validate special character
            var character = /[#?!@$%^&*-]/g;
            if(passwordInput.value.match(character)) {
                special_character.classList.remove("invalid");
                special_character.classList.add("valid");
                special_characterS.classList.remove("fa-solid", "fa-circle-xmark");
                special_characterS.classList.add("fa-duotone", "fa-solid", "fa-circle-check");
            } else {
                special_character.classList.remove("valid");
                special_character.classList.add("invalid");
                special_characterS.classList.remove("fa-duotone", "fa-solid", "fa-circle-check");
                special_characterS.classList.add("fa-solid", "fa-circle-xmark");
            }
        }
    </script>
</body>
</html>