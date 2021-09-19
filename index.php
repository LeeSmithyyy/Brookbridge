<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Brookbridge</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="products.php">Products</a>
            <?php
            if (isset($_SESSION["isUser"]) && $_SESSION["isUser"] == false) {
                echo "<a href='login.php'>Login</a>";
            } else {
                echo "<a href='includes/logout.php'>Logout</a>";
            }
            ?>
            <a href="basket.php">Basket</a>
        </div>
        <div class="content-container">
            <div class="inner-home">
                <div class="header">
                    <h1>Brookbridge Farms<span class="dot">.</span></h1>
                    <h3>Farm goods fresh from our farm!</h3>
                </div>
                <div class="content">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Iure tempore delectus, facere, impedit nostrum dicta dolore nulla dignissimos aperiam,
                        quidem laboriosam saepe distinctio eum fugit tenetur.
                        Sapiente provident repudiandae perferendis? <a href="products.php">Check out our products</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>