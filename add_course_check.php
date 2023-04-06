<?php 

require_once "db_con.php";
session_start();

if (isset($_POST['apply'])) {
    
    $courseCode_data = $_POST['course_code'];
    $courseName_data = $_POST['course_name'];
    $credit_data = $_POST['credit'];
    

    if ($courseCode_data && $courseName_data && $credit_data) {

        $check_courseCode="SELECT * FROM COURSES WHERE COURSE_CODE='".$courseCode_data."'";
        $check_courseCode_result=mysqli_query($data, $check_courseCode);
        $check_courseCode_result_rowCount=mysqli_num_rows($check_courseCode_result);

        if ($check_courseCode_result_rowCount === 0) {

            $sql="INSERT INTO COURSES(COURSE_CODE, COURSE_NAME, CREDIT)
            VALUES('$courseCode_data', '$courseName_data', '$credit_data')";

            $result = mysqli_query($data, $sql);

            if ($result) {
                $_SESSION['addCourseMessage'] = "Course Added Successfully!";
                header("location:add_course.php");
            }
        }else{
            $_SESSION['addCourseMessage'] = "Course Code already used!!!";
            header("location:add_course.php");
        }

        
    }
    else{
        $_SESSION['addCourseMessage'] = "Course Add Failed! Please Try Again with Apropriate Information!";
        header("location:add_course.php");
    }

}
echo "<h2>Opss! <br>Error: 404 Not Found</h2>"

?>