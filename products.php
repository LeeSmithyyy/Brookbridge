<?php
session_start();
include_once 'includes/dbh.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Products</title>
</head>

<body>
    <?php
    $loggedIn = false;
    $sql = "SELECT * FROM products;";
    $results = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($results);
    ?>
    <div class="products-container">
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
        <div class="product-content-container">
            <div class="about-header">
                <h1>Products<span class="dot">.</span></h1>
            </div>
            <form method="POST" action="includes/cartFunction.php">
                <?php
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                        echo "<div class='product'>";
                        echo "<h3>" . $row['name'] . "</h3><br>";
                        echo "<p>" . $row['description'] . "</p><br>";
                        echo "<p>£" . $row['price'] . "</p><br>";
                        if ($row['veg'] == 1) {
                            echo "<div class='tooltip'><img src='Vegetarian-mark.png' id='veggie' alt='Veggie' height='20px'/><span class='tooltiptext'>Vegetarian</span></div>";
                        };
                        if (isset($_SESSION["isUser"]) && $_SESSION["isUser"] == true) {
                            echo "<input type='text' class='product-qty' name='qty' value='1' size='2'/>
                                        <input type='submit' value='Add to cart' class='btnAddAction'/>";
                        };

                        echo "</div>";
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>


<!-- // echo "<tr><td>" . $row['name'] . "</td>
                                // <td>" . $row['description'] . "</td>
                                // <td>" . $row['price'] . "</td>
                                // <td>";
                                // if ($row['veg'] == 1) {
                                //     echo "Yes";
                                // } else {
                                //     echo "No";
                                // };
                                // echo "</td>";
                                // if (isset($_SESSION["isUser"]) && $_SESSION["isUser"] == true) {
                                //     echo "<td>
                                // <input type='text' class='product-qty' name='qty' value='1' size='2'/>
                                // <input type='submit' value='Add to cart' class='btnAddAction'/></td>";
                                // }
                                // echo "</tr>"; -->