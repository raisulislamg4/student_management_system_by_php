<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
    elseif($_SESSION['ROLE'] == "admin"){
        header("location:login.php");
    }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Dashboard</title>
</head>
<body>
    <h4>Student Dashboard</h4>
    <a href="logout.php">Logout</a>
</body>
</html>