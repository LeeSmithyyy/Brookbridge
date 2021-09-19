<?php
session_start();
include_once 'dbh.php';

$username = $_POST['username'];
$password = $_POST['password'];
$type = 'customers';

if ($_REQUEST['type'] == 'admin'){
    $type = 'admin';
}


$sql = "SELECT * FROM $type WHERE username='".$username."'
AND password='".$password."' limit 1";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)==1){
    if ($type == 'admin'){
        $_SESSION["isAdmin"] = true;
        $_SESSION["isUser"] = false;
        header("Location: ../products.php?admin_login_successful");
    } else{
        $_SESSION["isAdmin"] = false;
        $_SESSION["isUser"] = true;
        header("Location: ../products.php?customer_login_successful");
    }
} else {
    header("Location: ../login.php?login_failed");
}

