<?php

session_start();
$_SESSION["isUser"] = false;
$_SESSION["isAdmin"] = false;
header("Location: ../index.php?LoggedOut");