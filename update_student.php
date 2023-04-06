<?php 
include 'admin_template.php';
require_once "db_con.php";
error_reporting(0);

// }

	$id = $_GET['student_id'];
	$sql = "SELECT * FROM STUDENTS WHERE ID='$id' ";
	$result = mysqli_query($data, $sql);
	$info = $result->fetch_assoc();

	if (isset($_POST['update'])) {
		$name_data = $_POST['name'];
		$dept_data = $_POST['department'];
		$batch_data = $_POST['batch'];
		$roll_data = $_POST['roll'];
		$phone_data = $_POST['phone'];
		$email_data = $_POST['email'];
		$registration_data = $batch_data."2023".$roll_data;

		if ($name_data && $dept_data && $batch_data && $roll_data && $phone_data && $email_data) {
			$update_sql = "UPDATE STUDENTS SET
							NAME = '$name_data',
							DEPARTMENT = '$dept_data',
							BATCH = '$batch_data',
							ROLL = '$roll_data',
							REGISTRATION = '$registration_data',
							PHONE = '$phone_data',
							EMAIL = '$email_data'
							WHERE ID = $id";
			$update_sql_result = mysqli_query($data, $update_sql);

			if ($update_sql_result) {
				header("location:student_list.php");
			}
		}else{
			echo "<script type='text/javascript'>
				alert('Update Failed! Please Try with Appropriate Informations!');
			</script>";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Student</title>

	<link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/add_user_form.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="content">
		<h2>Update Student</h2>

		<form action="#" method="POST">
			<div class="form-group">
    			<label for="InputName1">Name</label>
    			<input type="text" class="form-control" name="name" value="<?php echo "{$info['NAME']}"; ?>" required>
  			</div>
  			<div class="form-group">
    			<label for="InputDept1">Department</label>
    			<input type="name" class="form-control" id="InputDept" name="department" value="<?php echo "{$info['DEPARTMENT']}"; ?>" required>
  			</div>
  			<div class="form-group">
    			<label for="InputBatch1">Batch</label>
    			<input type="name" class="form-control" id="InputBatch" name="batch" value="<?php echo "{$info['BATCH']}"; ?>" required>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputRoll1">Roll</label>
    			<input type="number" class="form-control" id="exampleInputRoll1" name="roll" value="<?php echo "{$info['ROLL']}"; ?>" required>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputPhone1">Phone Number</label>
    			<input type="number" class="form-control" id="exampleInputPhone1" name="phone" value="<?php echo "{$info['PHONE']}"; ?>" required>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Email address</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo "{$info['EMAIL']}"; ?>" required>
  			</div>
  			<button type="submit" class="btn btn-primary" value="Apply" name="update">Update</button>
		</form>
	</div>
</body>
</html>