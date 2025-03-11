<?php
ob_start();
session_start();
require('db/db.php');
if (isset($_REQUEST['username'])) {
    $username = stripslashes(string: $_REQUEST['username']);    // removes backslashes
    $username = mysqli_real_escape_string(mysql: $con, string: $username);
    $password = stripslashes(string: $_REQUEST['password']);
    $password = mysqli_real_escape_string(mysql: $con, string: $password);
    // Check user is exist in the database
    $query = "SELECT * FROM `user` WHERE username='$username' AND password='$password'";
    $result = mysqli_query(mysql: $con, query: $query);
    $rows = mysqli_num_rows(result: $result);
    if ($rows == 1) {
        $_SESSION['username'] = $username;
        
        // Redirect to user dashboard page
        header(header: "Location: ../index");
        
    } else {
        echo "
            <div class='form'>
            <h3>Incorrect Username/password.</h3><br/>
            <p class='link'>Click here to <a href='login'>Login</a> again.</p>
            </div>
        ";
    }
}
