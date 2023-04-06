<?php 
include 'admin_template.php';
require_once "db_con.php";

    $applicantCount_sql = "SELECT * FROM ADMISSIONS";
    $applicantCount_sql_result = mysqli_query($data, $applicantCount_sql);
    $get_applicants_count = mysqli_num_rows($applicantCount_sql_result);

    $studentCount_sql = "SELECT * FROM STUDENTS";
    $studentCount_sql_result = mysqli_query($data, $studentCount_sql);
    $get_student_count = mysqli_num_rows($studentCount_sql_result);

    $teacherCount_sql = "SELECT * FROM TEACHERS";
    $teacherCount_sql_result = mysqli_query($data, $teacherCount_sql);
    $get_teacher_count = mysqli_num_rows($teacherCount_sql_result);

    $courseCount_sql = "SELECT * FROM COURSES";
    $courseCount_sql_result = mysqli_query($data, $courseCount_sql);
    $get_course_count = mysqli_num_rows($courseCount_sql_result);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    

</head>
<body>
    <div class="content">
        <h1>Admin Dashboard</h1>
        <br>
        <div class="card">
            <div class="applicants_card">
                <h4><b>Total Applicants</b></h4>
                <h4><?php echo $get_applicants_count ?></h4>
            </div>
            <div class="student_card">
                <h4><b>Total Students</b></h4>
                <h4><?php echo $get_student_count ?></h4>
            </div>
            <div class="teacher_card">
                <h4><b>Total Teachers</b></h4>
                <h4><?php echo $get_teacher_count ?></h4>
            </div>
            <div class="course_card">
                <h4><b>Total Courses</b></h4>
                <h4><?php echo $get_course_count ?></h4>
            </div>
        </div>
        
    </div>
</body>
</html>