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
    <title>About Us</title>
</head>

<body>
    <div class="about-container">
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
        <div class="about-content-container">
            <div class="about-header">
                <h1>About Us<span class="dot">.</span></h1>
            </div>
            <div class="about-content">
                <div class="about-image">
                    <img src="farm.jpg" alt="Farm image" id="farm-img" />
                </div>
                <div class="about-text">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Iure tempore delectus, facere, impedit nostrum dicta dolore nulla dignissimos aperiam,
                        quidem laboriosam saepe distinctio eum fugit tenetur.
                        Sapiente provident repudiandae perferendis?</p>
                </div>
            </div>
            <div class="about-content contact">
                <div class="contact-form">
                    <form class="form" method="POST" action="includes/mail.php">
                        <h4>CONTACT US<span class="dot">.</span></h4>
                        <p type="Name:"><input name="name" placeholder="Write your name here.."></input></p>
                        <p type="Email:"><input name="email" placeholder="Let us know how to contact you back.."></input></p>
                        <p type="Message:"><input name="message" placeholder="What would you like to tell us.."></input></p>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>