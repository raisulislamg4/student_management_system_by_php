<?php 
include 'admin_template.php';
error_reporting(0);
session_start();
// session_destroy();

if ($_SESSION['addTeacherMessage']) {

	$message = $_SESSION['addTeacherMessage'];

	echo 	"<script type='text/javascript'>
				alert('$message');
			</script>";
	$_SESSION['addTeacherMessage'] = NULL;
	// session_start();
	// session_destroy();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Teacher</title>

	<link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/add_user_form.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="content">
		<h2>Add Teacher</h2>

		<form action="add_teacher_check.php" method="POST">
			<div class="form-group">
    			<label for="InputName1">Name</label>
    			<input type="name" class="form-control" id="InputName" placeholder="Name" name="name">
  			</div>
  			<div class="form-group">
    			<label for="InputName1">Designation</label>
    			<input type="name" class="form-control" id="InputName" placeholder="Designation" name="designation">
  			</div>	
  			<div class="form-group">
    			<label for="exampleInputPhone1">Phone Number</label>
    			<input type="number" class="form-control" id="exampleInputPhone1" placeholder="Enter Phone Number" name="phone">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Email address</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Expertise</label>
    			<input type="text" class="form-control" id="exampleInputExpertise" aria-describedby="emailHelp" placeholder="Expertise" name="expertise">
  			</div>
  			<button type="submit" class="btn btn-primary" value="Apply" name="apply">Submit</button>
		</form>
	</div>
</body>
</html>