<?php 
include 'admin_template.php';
require_once "db_con.php";
error_reporting(0);

// }

	$id = $_GET['user_id'];
	$sql = "SELECT * FROM USERS WHERE ID='$id' ";
	$result = mysqli_query($data, $sql);
	$info = $result->fetch_assoc();

	if (isset($_POST['update'])) {
		$name_data = $_POST['name'];
    	$username_data = $_POST['username'];
    	$email_data = $_POST['email'];
    	$phone_data = $_POST['phone'];
    	$role_data = $_POST['role'];
    	if ($_POST['password']) {
    		$password_data = md5($_POST['password']);
    	}
    	

		if ($name_data && $email_data && $phone_data && $role_data && $password_data) {
			$update_sql = "UPDATE USERS SET
							NAME = '$name_data',
							EMAIL = '$email_data',
							PHONE = '$phone_data',
							ROLE = '$role_data',
							PASSWORD = '$password_data'
							WHERE ID = $id";
			$update_sql_result = mysqli_query($data, $update_sql);

			if ($update_sql_result) {
				header("location:user_list.php");
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
	<title>Update User</title>

	<link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/add_user_form.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="content">
		<h2>Update User</h2>

		<form action="#" method="POST">
			<div class="form-group">
    			<label for="InputName1">Name</label>
    			<input type="name" class="form-control" id="InputName" name="name" value="<?php echo "{$info['NAME']}"; ?>">
  			</div>
  			<div class="form-group">
    			<label for="InputName1">Username</label>
    			<input type="name" readonly class="form-control" id="InputName" name="username" value="<?php echo "{$info['USERNAME']}"; ?>">
  			</div>	
  			<div class="form-group">
    			<label for="exampleInputEmail1">Email address</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo "{$info['EMAIL']}"; ?>">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputPhone1">Phone Number</label>
    			<input type="number" class="form-control" id="exampleInputPhone1" name="phone" value="<?php echo "{$info['PHONE']}"; ?>">
  			</div>
  			<div class="form-group">
    			<label for="exampleFormControlSelect1">Role</label>
    			<select class="form-control" id="exampleFormControlSelect1" name="role" value="<?php echo "{$info['ROLE']}"; ?>">
      				<option>admin</option>
      				<option>student</option>
    			</select>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputPassword1">Password</label>
    			<input type="password" class="form-control" id="exampleInputPassword1" name="password">
  			</div>
  			<button type="submit" class="btn btn-primary" value="Apply" name="update">Update</button>
		</form>
	</div>
</body>
</html>