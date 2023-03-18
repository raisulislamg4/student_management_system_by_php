<?php 

require_once "db_con.php";
session_start();

if (isset($_POST['apply'])) {
    
    $name_data = $_POST['name'];
    $email_data = $_POST['email'];
    $phone_data = $_POST['phone'];
    $message_data = $_POST['message'];

    if ($name_data && $email_data && $phone_data) {

        $sql="INSERT INTO ADMISSIONS(NAME, EMAIL, PHONE, MESSAGE, STATUS)
            VALUES('$name_data', '$email_data', '$phone_data', '$message_data', 'Pending')";

        $result = mysqli_query($data, $sql);

        if ($result) {
            $_SESSION['message'] = "Your Application Submitted Successfully!";
            header("location:index.php");
        }
    }
    else{
        $_SESSION['message'] = "Apply Failed! Please Try Again with Apropriate Information!";
        header("location:index.php");
    }

}
echo "<h2>Opss! <br>Error: 404 Not Found</h2>"

?>