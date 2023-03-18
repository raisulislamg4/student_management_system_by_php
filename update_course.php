<?php 
include 'admin_template.php';
require_once "db_con.php";
error_reporting(0);

// }

	$id = $_GET['course_id'];
	$sql = "SELECT * FROM COURSES WHERE ID='$id' ";
	$result = mysqli_query($data, $sql);
	$info = $result->fetch_assoc();

	if (isset($_POST['update'])) {
		$courseCode_data = $_POST['course_code'];
    	$courseName_data = $_POST['course_name'];
    	$credit_data = $_POST['credit'];

		if ($courseCode_data && $courseName_data && $credit_data) {
			$update_sql = "UPDATE COURSES SET
							COURSE_CODE = '$courseCode_data',
							COURSE_NAME = '$courseName_data',
							CREDIT = '$credit_data'
							WHERE ID = $id";
			$update_sql_result = mysqli_query($data, $update_sql);

			if ($update_sql_result) {
				echo 	"<script type='text/javascript'>
				alert('Updated Successfully!');
			</script>";
				header("location:courses_list.php");
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
    			<label for="InputName1">Course Code*</label>
    			<input type="text" readonly class="form-control" name="course_code" value="<?php echo "{$info['COURSE_CODE']}"; ?>">
  			</div>
  			<div class="form-group">
    			<label for="InputName1">Course Name*</label>
    			<input type="name" class="form-control" id="InputDesig" name="course_name" value="<?php echo "{$info['COURSE_NAME']}"; ?>">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputCredit1">Credit*</label>
    			<input type="number" class="form-control" id="exampleInputCredit1" name="credit" value="<?php echo "{$info['CREDIT']}"; ?>">
    		</div>
  			<button type="submit" class="btn btn-primary" value="Apply" name="update">Update</button>
		</form>
	</div>
</body>
</html>