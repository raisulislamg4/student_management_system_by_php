<?php 
require_once "db_con.php";

if ($_GET['course_id']) {

	$course_id = $_GET['course_id'];

	$sql = "DELETE FROM COURSES WHERE ID='$course_id'";
	$result = mysqli_query($data, $sql);

	if ($result) {
		$_SESSION['message'] = 'Course Deleted Successfully!';
		header("location:courses_list.php");
	}
}
if ($_GET['teacher_id']) {

	$teacher_id = $_GET['teacher_id'];

	$sql = "DELETE FROM TEACHERS WHERE ID='$teacher_id'";
	$result = mysqli_query($data, $sql);

	if ($result) {
		$_SESSION['message'] = 'Teacher Deleted Successfully!';
		header("location:teacher_list.php");
	}
}
if ($_GET['user_id']) {

	$user_id = $_GET['user_id'];

	$sql = "DELETE FROM USERS WHERE ID='$user_id'";
	$result = mysqli_query($data, $sql);

	if ($result) {
		$_SESSION['message'] = 'User Deleted Successfully!';
		header("location:user_list.php");
	}
}
if ($_GET['student_id']) {

	$student_id = $_GET['student_id'];

	$sql = "DELETE FROM STUDENTS WHERE ID='$student_id'";
	$result = mysqli_query($data, $sql);

	if ($result) {
		$_SESSION['message'] = 'Student Deleted Successfully!';
		header("location:student_list.php");
	}
}
if ($_GET['applicant_id']) {

	$applicant_id = $_GET['applicant_id'];

	$sql = "DELETE FROM ADMISSIONS WHERE ID='$applicant_id'";
	$result = mysqli_query($data, $sql);

	if ($result) {
		$_SESSION['message'] = 'Application Deleted Successfully!';
		header("location:admissions.php");
	}
}

?>