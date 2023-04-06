<?php 
include 'admin_template.php';
error_reporting(0);
// session_start();
// session_destroy();

if ($_SESSION['addStudentMessage']) {

	$message = $_SESSION['addStudentMessage'];

	echo 	"<script type='text/javascript'>
				alert('$message');
			</script>";
	$_SESSION['addStudentMessage'] = NULL;
	// session_start();
	// session_destroy();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Student</title>

	<link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/add_user_form.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="content">
		<h2>Add Student</h2>

		<form action="add_student_check.php" method="POST">
			<div class="form-group">
    			<label for="InputName1">Name</label>
    			<input type="name" class="form-control" id="InputName" placeholder="Name" name="name" required>
  			</div>
  			<div class="form-group">
    			<label for="InputDept1">Department</label>
    			<input type="name" class="form-control" id="InputDept" placeholder="Department" name="department" required>
  			</div>
  			<div class="form-group">
    			<label for="InputBatch1">Batch</label>
    			<input type="name" class="form-control" id="InputBatch" placeholder="Batch" name="batch" required>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputRoll1">Roll</label>
    			<input type="number" class="form-control" id="exampleInputRoll1" placeholder="Roll" name="roll" required>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputPhone1">Phone Number</label>
    			<input type="number" class="form-control" id="exampleInputPhone1" placeholder="Enter Phone Number" name="phone" required>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Email address</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
  			</div>
  			<button type="submit" class="btn btn-primary" value="Apply" name="apply">Submit</button>
		</form>
	</div>
</body>
</html>