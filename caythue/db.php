<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","LoginSystem");
    // $con = mysqli_connect("databases.000webhost.com/sql.php","root","K=Xf|>?cr)Yq)\8~","LoginSystem");
    // Check connection
    if (mysqli_connect_errno()){
        // echo "Failed to connect to MySQL: " . mysqli_connect_error();
        echo "Lỗi kết nối đến hệ thống";
        echo "Vui lòng thử lại sau";
    }
?>