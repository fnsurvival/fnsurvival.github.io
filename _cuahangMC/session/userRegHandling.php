<?php
ob_start();
session_start();
require('db/db.php');

if (isset($_REQUEST['username'])) {
    set_error_handler(callback: static fn (int $errno, string $errstr): bool => $errstr === 'Trying to access array offset on value of type null');
    // removes backslashes
    $username = stripslashes(string: $_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string(mysql: $con, string: $username);
    $email    = stripslashes(string: $_REQUEST['email']);
    $email    = mysqli_real_escape_string(mysql: $con, string: $email);
    $password = stripslashes(string: $_REQUEST['password']);
    $password = mysqli_real_escape_string(mysql: $con, string: $password);

    $namecheck = mysqli_query(mysql: $con, query: "SELECT * FROM `user` WHERE username='$username'");
    $res = mysqli_fetch_array(result: $namecheck);

    if ($res['username'] == $username || null) {
        echo '
        <h3>Tên người dùng không khả dụng. Vui lòng đăng ký lại </h3>
        <p style="fonts-size: 30px;">Trang này sẽ tự động quay lại trang đăng ký sau <strong>5 giây</strong></p>
        ';
        header(header: 'Refresh: 5; URL=../UI/registration');
    } else {
        $query = "INSERT into `user` (username, password, email, money, coins) VALUES ('$username', '$password', '$email', 0, 0)";
        $result   = mysqli_query(mysql: $con, query: $query);
        if ($result) {
            $_SESSION['id_login'] = $username;
            echo "
            <div>
                <h3>Đăng ký tài khoản thành công</h3>
            </div?
            ";
        }
        header(header: 'Refresh: 1; URL=../UI/registration');
    }

}

// ????
// <?php
// ob_start();
// session_start();
// require('db/db.php');

// if (isset($_REQUEST['username'])) {
//     set_error_handler(callback: static fn (int $errno, string $errstr): bool => $errstr === 'Trying to access array offset on value of type null');
    
//     // Remove backslashes and escape special characters
//     $username = stripslashes($_REQUEST['username']);
//     $username = mysqli_real_escape_string($con, $username);
//     $email    = stripslashes($_REQUEST['email']);
//     $email    = mysqli_real_escape_string($con, $email);
//     $password = stripslashes($_REQUEST['password']);
//     $password = mysqli_real_escape_string($con, $password);

//     // Use prepared statements to prevent SQL injection
//     $stmt = mysqli_prepare($con, "SELECT * FROM `user` WHERE username = ?");
//     mysqli_stmt_bind_param($stmt, "s", $username);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);
//     $res = mysqli_fetch_array($result);

//     if ($res && $res['username'] === $username) {
//         // Username already taken
//         header('Refresh: 5; URL=../UI/registration');
//         echo '
//         <h3>Tên người dùng không khả dụng. Vui lòng đăng ký lại </h3>
//         <p style="font-size: 30px;">Trang này sẽ tự động quay lại trang đăng ký sau <strong>5 giây</strong></p>
//         ';
//         exit(); // Ensure no further code is executed after header redirect
//     } else {
//         // Insert the new user into the database
//         $stmt = mysqli_prepare($con, "INSERT INTO `user` (username, password, email, money, coins) VALUES (?, ?, ?, 0, 0)");
//         mysqli_stmt_bind_param($stmt, "ssss", $username, $password, $email);
//         $result = mysqli_stmt_execute($stmt);

//         if ($result) {
//             $_SESSION['id_login'] = $username;
//             echo "<div><h3>Đăng ký tài khoản thành công</h3></div>";
//             header('Refresh: 1; URL=../UI/registration');
//             exit(); // Ensure no further code is executed after header redirect
//         } else {
//             echo "Error registering user.";
//         }
//     }
// }
