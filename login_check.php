<?php 
require_once "db_con.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM USERS WHERE USERNAME='".$name."' AND PASSWORD='".$pass."' ";

    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);

    if($row["usertype"] == "admin"){
        header("location:admin_home.php");
    }
    elseif($row["usertype"] == "student"){
        header("location:student_home.php");
    }
    else{
        echo "Username and Password not matched!";
    }
}

?>