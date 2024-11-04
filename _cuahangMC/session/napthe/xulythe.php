<?php
ob_start();
session_start();
require('../db/db.php');

set_error_handler(callback: static fn (int $errno, string $errstr): bool => $errstr === 'Trying to access array offset on value of type null');
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $namecheck = mysqli_query(mysql: $con, query: "SELECT * FROM `user` WHERE username='$username'");
    $res = mysqli_fetch_array(result: $namecheck);

    if ($res['username'] == $_SESSION['username']) {
        $loaithe = stripslashes(string: $_REQUEST['loaithe']);
        $loaithe = mysqli_real_escape_string(mysql: $con_napthe, string: $loaithe);

        $giatri = stripslashes(string: $_REQUEST['giatri']);
        $giatri = mysqli_real_escape_string(mysql: $con_napthe, string: $giatri);

        $mathe = stripslashes(string: $_REQUEST['mathe']);
        $mathe = mysqli_real_escape_string(mysql: $con_napthe, string: $mathe);

        $serial = stripslashes(string: $_REQUEST['serial']);
        $serial = mysqli_real_escape_string(mysql: $con_napthe, string: $serial);

        $date = date(format: "Y-m-d H:i:s");       

        $cardCheck = mysqli_query(mysql: $con_napthe, query: "SELECT * FROM `the` WHERE loaithe='$loaithe' AND giatri='$giatri' AND mathe='$mathe' AND serial='$serial'");
        $cardres = mysqli_fetch_array(result: $cardCheck);

        if ($cardres['loaithe'] != $loaithe && $cardres['giatri'] != $giatri && $cardres['mathe'] != $mathe && $cardres['serial'] != $serial) {
            $query = "INSERT INTO `the` (username, loaithe, giatri, mathe, serial, date) VALUES ('$username', '$loaithe', '$giatri', '$mathe', '$serial', '$date')";
            $result = mysqli_query(mysql: $con_napthe, query: $query);
            $congTien = "UPDATE `user` SET `money` = `money` + $giatri WHERE username='$username'";
            if ($result && mysqli_query(mysql: $con, query: $congTien)) {  
                echo "
                <div>
                    <h3>Nạp tiền thành công</h3>
                </div>
                ";
                $sodu = mysqli_query(mysql: $con, query: "SELECT money FROM `user` WHERE username='$username'");
                $_SESSION['sodu'] = $sodu;

                header(header: 'Refresh: 1; URL=../../index.php');
            }
        } else {
            echo '<p style="font-size:25px">Thẻ đã tồn tại. Nếu bạn cho rằng đây là sai sót, hãy liên lạc với nhân viên của chúng tôi qua Facebook </p>';
            
            header(header: 'Refresh: 1; URL=../../index.php');
        }

        
    } else {
        echo '
        <h1>Thẻ không hợp lệ</h1>
        ';
        header(header: 'Refresh: 1; URL=../../index.php');
    }
} else {
    echo'error <p>Click: <a href="../../index.php">Back to home page</a>';
}