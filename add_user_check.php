<?php 

require_once "db_con.php";
session_start();
session_destroy();

if (isset($_POST['apply'])) {
    
    $name_data = $_POST['name'];
    $email_data = $_POST['email'];
    $phone_data = $_POST['phone'];
    $role_data = $_POST['role'];
    $password_data = md5($_POST['password']);

    if ($name_data && $email_data && $phone_data && $password_data) {

        $check_usernameEmail="SELECT * FROM USERS WHERE EMAIL='".$email_data."'";
        $check_usernameEmail_result=mysqli_query($data, $check_usernameEmail);
        $check_usernameEmail_result_rowCount=mysqli_num_rows($check_usernameEmail_result);

        if ($check_usernameEmail_result_rowCount === 0) {

            $sql="INSERT INTO USERS(USERNAME, PHONE, EMAIL, ROLE, PASSWORD)
            VALUES('$name_data', '$phone_data', '$email_data', '$role_data', '$password_data')";

            $result = mysqli_query($data, $sql);

            if ($result) {
                $_SESSION['message'] = "User Added Successfully!";
                header("location:add_user.php");
            }
        }else{
            $_SESSION['message'] = "Username already used!!!";
            header("location:add_user.php");
        }

        
    }
    else{
        $_SESSION['message'] = "User Add Failed! Please Try Again with Apropriate Information!";
        header("location:add_user.php");
    }

}
echo "<h2>Opss! <br>Error: 404 Not Found</h2>"

?>