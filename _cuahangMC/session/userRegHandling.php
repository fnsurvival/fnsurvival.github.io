<?php
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
        header(header: 'Refresh: 3; URL=../UI/registration.php');
    } else {
        $query = "INSERT into `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result   = mysqli_query(mysql: $con, query: $query);
        if ($result) {
            echo "
            <div>
                <h3>Đăng ký tài khoản thành công</h3>
            </div?
            ";
        }
        header('Locatiomn ../UI/login.php');
    }

}
?>