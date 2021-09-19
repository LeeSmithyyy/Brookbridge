<?php
    include_once 'dbh.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $county = $_POST['county'];
    $postcode = $_POST['postcode'];

    $sql = "INSERT INTO customers (username, password, name, address, city, county, postcode)
            VALUES ('$username', '$password', '$name', '$address', '$city', '$county', '$postcode');";
    mysqli_query($conn, $sql);

    header("Location: ../login.php?signup=success");