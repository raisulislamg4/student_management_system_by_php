<?php 
include 'admin_template.php';
require_once "db_con.php";
// error_reporting(0);

// }

	$id = $_GET['applicant_id'];
	$sql = "SELECT * FROM ADMISSIONS WHERE ID='$id' ";
	$result = mysqli_query($data, $sql);
	$info = $result->fetch_assoc();

	if (isset($_POST['update'])) {
		$status_data = $_POST['status'];

		if ($status_data) {
			$update_sql = "UPDATE ADMISSIONS SET
							STATUS = '$status_data'
							WHERE ID = $id";
			$update_sql_result = mysqli_query($data, $update_sql);

			if ($update_sql_result) {
				header("location:admissions.php");
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
	<title>Update Application</title>

	<link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/add_user_form.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="content">
		<h2>Update Application</h2>

		<form action="#" method="POST">
			<div class="form-group">
    			<label for="InputName1">Name</label>
    			<input type="text" readonly class="form-control" name="name" value="<?php echo "{$info['NAME']}"; ?>">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Email address</label>
    			<input type="email" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo "{$info['EMAIL']}"; ?>" required>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Phone</label>
    			<input type="email" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo "{$info['PHONE']}"; ?>" required>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Message</label>
    			<input type="email" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo "{$info['MESSAGE']}"; ?>" required>
  			</div>
  			<div class="form-group">
    			<label for="exampleFormControlSelect1">Status</label>
    			<select class="form-control" id="exampleFormControlSelect1" name="status" value="<?php echo "{$info['STATUS']}"; ?>">
      				<option>Pending</option>
      				<option>In Progress</option>
      				<option>Admitted</option>
    			</select>
  			</div>
  			
  			<button type="submit" class="btn btn-primary" value="Apply" name="update">Update</button>
		</form>
	</div>
</body>
</html>