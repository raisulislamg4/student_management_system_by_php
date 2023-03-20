<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
    elseif($_SESSION['ROLE'] == "student"){
        header("location:login.php");
    }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <a href="admin_home.php">Admin Portal</a>
        <div class="logout">
            <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
    </header>
    <aside>
        <div style="width: 12% ;display: inline-block;float: left; height: 90vh;">
        <ul>
            <li>
                <a href="admissions.php">Addmission</a>
            </li>
            <li>
                <a href="add_student.php">Add Student</a>
            </li>
            <li>
                <a href="student_list.php">View Students</a>
            </li>
            <li>
                <a href="add_teacher.php">Add Teacher</a>
            </li>
            <li>
                <a href="teacher_list.php">View Teachers</a>
            </li>
            <li>
                <a href="add_course.php">Add Course</a>
            </li>
            <li>
                <a href="courses_list.php">View Courses</a>
            </li>
            <li>
                <a href="add_user.php">Add User</a>
            </li>
            <li>
                <a href="user_list.php">View Users</a>
            </li>
        </ul>
        </div>
    </aside>
</body>
</html>