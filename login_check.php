<?php 
require_once "db_con.php";
// error_reporting(0);
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM USERS WHERE USERNAME='".$name."' AND PASSWORD='".$pass."' ";

    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);

    if($row["ROLE"] == "admin"){
        $_SESSION['username'] = $name;
        $_SESSION['ROLE'] = "admin";
        header("location:admin_home.php");
    }
    elseif($row["ROLE"] == "student"){
        $_SESSION['username'] = $name;
        $_SESSION['ROLE'] = "student";
        header("location:student_home.php");
    }
    else{
        $message = "Username or Password doesn't matched!";
        $_SESSION['loginMessage'] = $message;
        header("location:login.php");
    }
}
echo "<h2>Opss! <br>Error: 404 Not Found</h2>"
?>