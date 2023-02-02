<?php 

require_once "db_con.php";

if (isset($_POST['apply'])) {
    
    $name_data = $_POST['name'];
    $email_data = $_POST['email'];
    $phone_data = $_POST['phone'];
    $message_data = $_POST['message'];

    $sql="INSERT INTO ADMISSIONS(NAME, EMAIL, PHONE, MESSAGE)
            VALUES('$name_data', '$email_data', '$phone_data', '$message_data')";

    $result = mysqli_query($data, $sql);

    if ($result) {
        echo "Your Application Has Submitted Successfully!";
    }
    else{
        echo "Apply Failed! Please Try Again Later";
    }

}

?>