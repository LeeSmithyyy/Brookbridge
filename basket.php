<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="products.php">Products</a>
            <?php 
                if (isset($_SESSION["isUser"]) && $_SESSION["isUser"] == false){
                    echo"<a href='login.php'>Login</a>";
                }else {
                    echo"<a href='includes/logout.php'>Logout</a>";
                }
            ?>
            <a href="basket.php">Basket</a>
        </div>
        <div class="content-container">
            <h1>Basket</h1>
            
        </div>
    </div>

</body>

</html>