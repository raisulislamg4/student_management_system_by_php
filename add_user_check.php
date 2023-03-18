<?php 

require_once "db_con.php";
session_start();

if (isset($_POST['apply'])) {
    
    $name_data = $_POST['name'];
    $username_data = $_POST['username'];
    $email_data = $_POST['email'];
    $phone_data = $_POST['phone'];
    $role_data = $_POST['role'];
    if ($_POST['password']) {
            $password_data = md5($_POST['password']);
        }

    if ($name_data && $username_data && $email_data && $phone_data && $password_data) {

        $check_username="SELECT * FROM USERS WHERE USERNAME='".$username_data."'";
        $check_username_result=mysqli_query($data, $check_username);
        $check_username_result_rowCount=mysqli_num_rows($check_username_result);

        if ($check_username_result_rowCount === 0) {

            $sql="INSERT INTO USERS(NAME, USERNAME, PHONE, EMAIL, ROLE, PASSWORD)
            VALUES('$name_data', '$username_data', '$phone_data', '$email_data', '$role_data', '$password_data')";

            $result = mysqli_query($data, $sql);

            if ($result) {
                $_SESSION['addUserMessage'] = "User Added Successfully!";
                header("location:add_user.php");
            }
        }else{
            $_SESSION['addUserMessage'] = "Username already used!!!";
            header("location:add_user.php");
        }

        
    }
    else{
        $_SESSION['addUserMessage'] = "User Add Failed! Please Try Again with Apropriate Information!";
        header("location:add_user.php");
    }

}
echo "<h2>Opss! <br>Error: 404 Not Found</h2>"

?>