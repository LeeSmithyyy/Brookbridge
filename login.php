<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="login-container">
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
        <div class="login-content-container">
            <div class="login-form">
                <form action="includes/logindb.php" method="POST" class="login">
                    <h4>Log In<span class="dot">.</span></h4>
                    <input type="text" name="username" placeholder="Username"><br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <div class="login-btn">
                        <button type="submit" name="type" value="customer">Log In</button>
                        <button type="submit" name="type" value="admin">Admin Log in</button><br>
                    </div>
                    <h3>Don't have an account? <a href="createacc.php" class="dot">Sign Up</a</h3>
                </form>
            </div>
        </div>
    </div>

</body>

</html>