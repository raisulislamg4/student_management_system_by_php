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

?>