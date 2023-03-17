<?php 

require_once "db_con.php";
session_start();

if (isset($_POST['apply'])) {
    
    $name_data = $_POST['name'];
    $department_data = $_POST['department'];
    $phone_data = $_POST['phone'];
    $email_data = $_POST['email'];

    if ($name_data && $department_data && $phone_data && $email_data) {

        $sql="INSERT INTO STUDENTS(NAME, DEPARTMENT, PHONE, EMAIL)
            VALUES('$name_data', '$department_data', '$phone_data', '$email_data')";

        $result = mysqli_query($data, $sql);

        if ($result) {
                $_SESSION['addStudentMessage'] = "Student Added Successfully!";
                header("location:add_student.php");
            }
    }
    else{
        $_SESSION['addStudentMessage'] = "Student Add Failed! Please Try Again with Apropriate Information!";
        header("location:add_student.php");
    }

}
echo "<h2>Opss! <br>Error: 404 Not Found</h2>"

?>