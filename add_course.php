<?php 
include 'admin_template.php';
error_reporting(0);
// session_start();
// session_destroy();

if ($_SESSION['addCourseMessage']) {

	$message = $_SESSION['addCourseMessage'];

	echo 	"<script type='text/javascript'>
				alert('$message');
			</script>";
	$_SESSION['addCourseMessage'] = NULL;
	// session_start();
	// session_destroy();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Course</title>

	<link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/add_user_form.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="content">
		<h2>Add Course</h2>

		<form action="add_course_check.php" method="POST">
			<div class="form-group">
    			<label for="InputName1">Course Code*</label>
    			<input type="name" class="form-control" id="InputName" placeholder="Course Code" name="course_code" required>
  			</div>
  			<div class="form-group">
    			<label for="InputName1">Course Name*</label>
    			<input type="name" class="form-control" id="InputName" placeholder="Course Name" name="course_name" required>
  			</div>	
  			<div class="form-group">
    			<label for="exampleInputCredit1">Credit*</label>
    			<input type="number" class="form-control" id="exampleInputCredit1" placeholder="Credit" name="credit" required>
  			</div>
  			<button type="submit" class="btn btn-primary" value="Apply" name="apply">Submit</button>
		</form>
	</div>
</body>
</html>