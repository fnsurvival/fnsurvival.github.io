<?php
    // host name, database username, password, and database name.
    $con = mysqli_connect("localhost","root","/SupErNigaViETnaM2000241","guest");
    // Check connection
    if (mysqli_connect_errno()){
        // echo "Failed to connect to MySQL: " . mysqli_connect_error();
        echo "Lỗi kết nối đến hệ thống";
        echo "Vui lòng thử lại sau";
    }
?>