<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>
<body>
    <form action="includes/signup.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <input type="text" name="name" placeholder="Name">
        <br>
        <input type="text" name="address" placeholder="Address Line 1">
        <br>
        <input type="text" name="city" placeholder="City">
        <br>
        <input type="text" name="county" placeholder="County">
        <br>
        <input type="text" name="postcode" placeholder="Post Code">
        <br>
        <button type="submit" name="submit">Sign up!</button>
        <input type="button" value="Cancel" onclick="history.back();">
    </form>

</body>
</html>