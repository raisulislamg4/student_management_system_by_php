<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
    elseif($_SESSION['ROLE'] == "student"){
        header("location:login.php");
    }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Admin Dashboard</h2>
</body>
</html>