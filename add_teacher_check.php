<?php 

require_once "db_con.php";
session_start();

if (isset($_POST['apply'])) {
    
    $name_data = $_POST['name'];
    $designation_data = $_POST['designation'];
    $phone_data = $_POST['phone'];
    $email_data = $_POST['email'];
    $expertize_data = $_POST['expertize'];

    if ($name_data && $designation_data && $phone_data && $email_data && $expertize_data) {

        $sql="INSERT INTO TEACHERS(NAME, DESIGNATION, PHONE, EMAIL, EXPERTIZE)
            VALUES('$name_data', '$designation_data', '$phone_data', '$email_data', '$expertize_data')";

        $result = mysqli_query($data, $sql);

        if ($result) {
                $_SESSION['addTeacherMessage'] = "Teacher Added Successfully!";
                header("location:add_teacher.php");
            }
    }
    else{
        $_SESSION['addTeacherMessage'] = "Teacher Add Failed! Please Try Again with Apropriate Information!";
        header("location:add_teacher.php");
    }

}
echo "<h2>Opss! <br>Error: 404 Not Found</h2>"

?>