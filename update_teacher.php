<?php 
include 'admin_template.php';
require_once "db_con.php";
error_reporting(0);

// }

	$id = $_GET['teacher_id'];
	$sql = "SELECT * FROM TEACHERS WHERE ID='$id' ";
	$result = mysqli_query($data, $sql);
	$info = $result->fetch_assoc();

	if (isset($_POST['update'])) {
		$name_data = $_POST['name'];
		$designation_data = $_POST['designation'];
		$email_data = $_POST['email'];
		$phone_data = $_POST['phone'];
		$expertize_data = $_POST['expertize'];

		if ($name_data && $designation_data && $email_data && $phone_data && $expertize_data) {
			$update_sql = "UPDATE TEACHERS SET
							NAME = '$name_data',
							DESIGNATION = '$designation_data',
							PHONE = '$phone_data',
							EMAIL = '$email_data',
							EXPERTIZE = '$expertize_data'
							WHERE ID = $id";
			$update_sql_result = mysqli_query($data, $update_sql);

			if ($update_sql_result) {
				header("location:teacher_list.php");
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
	<title>Update Teacher</title>

	<link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/add_user_form.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="content">
		<h2>Update Teacher</h2>

		<form action="#" method="POST">
			<div class="form-group">
    			<label for="InputName1">Name</label>
    			<input type="text" class="form-control" name="name" value="<?php echo "{$info['NAME']}"; ?>">
  			</div>
  			<div class="form-group">
    			<label for="InputDept1">Designation</label>
    			<input type="name" class="form-control" id="InputDesig" name="designation" value="<?php echo "{$info['DESIGNATION']}"; ?>">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputPhone1">Phone Number</label>
    			<input type="number" class="form-control" id="exampleInputPhone1" name="phone" value="<?php echo "{$info['PHONE']}"; ?>">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Email address</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo "{$info['EMAIL']}"; ?>">
  			</div>
  			<div class="form-group">
    			<label for="InputExpertize1">Expertize</label>
    			<input type="name" class="form-control" id="InputExpertize" name="expertize" value="<?php echo "{$info['EXPERTIZE']}"; ?>">
  			</div>
  			<button type="submit" class="btn btn-primary" value="Apply" name="update">Update</button>
		</form>
	</div>
</body>
</html>