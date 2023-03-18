<?php 

require_once "db_con.php";
session_start();

if (isset($_POST['apply'])) {
    
    $name_data = $_POST['name'];
    $department_data = $_POST['department'];
    $batch_data = $_POST['batch'];
    $roll_data = $_POST['roll'];
    $phone_data = $_POST['phone'];
    $email_data = $_POST['email'];
    $registrationNo_data = $batch_data."2023".$roll_data;

    if ($name_data && $department_data && $batch_data && $roll_data && $phone_data && $email_data) {

        $sql="INSERT INTO STUDENTS(NAME, DEPARTMENT, BATCH, ROLL, REGISTRATION, PHONE, EMAIL)
            VALUES('$name_data', '$department_data', '$batch_data', '$roll_data', '$registrationNo_data', '$phone_data', '$email_data')";

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