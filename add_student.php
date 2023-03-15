<?php 
   

	$host="localhost";
	$user="root";
	$password="";
	$db="pdbsms";

	$data=mysqli_connect($host,$user,$password,$db);

	if (isset($_POST['add_student'])) 
	{
		
		$username=$_POST['name'];
		$user_email=$_POST['email'];
		$user_phone=$_POST['phone'];
		$user_password=$_POST['password'];
		$userrole="student";

		$check="SELECT * FROM users WHERE USERNAME='$username'";
		$check_user=mysqli_query($data,$check);

		$row_count=mysqli_num_rows($check_user);

		if ($row_count==1) 
		{
			echo "<script type='text/javascript'> alert ('Username Already Exist. Try Another One');
			</script";
		}

		else
		{


		$sql="INSERT INTO users (USERNAME,EMAIL,PHONE, ROLE,PASSWORD) VALUES ('$username','$user_email','$user_phone','$userrole','$user_password')";


		$result=mysqli_query($data,$sql);

		if ($result) 
		{
			echo "<script type='text/javascript'> alert ('Data Upload Success');
			</script";
		}

		else
		{
			echo "Uploaded Failed";
		}

	}
	}
	
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style type="text/css">
    	
    	label
    	{
    		display: inline-block;
    		text-align: right;
    		width: 100px;
    		padding-top: 10px;
    		padding-bottom: 10px;
    	}

    	.div_deg

    	{

    		background-color: skyblue;
    		width: 400px;
    		padding-top: 50px;
    		padding-bottom: 50px;

    	}
    </style>

    <title>Admin Dashboard</title>
</head>
<body>

	<?php

	include 'admin_template.php';

	?>

    <div class="content">
    	<center>
        <h1>Add Student</h1>

        <div class="div_deg">
        	
        	<form action="#" method="POST">
        		<div>
        		<label>Username</label>
        		<input type="text" name="name">
        		</div>

				<div>
        		<label>Email</label>
        		<input type="text" name="email">
        		</div>

        		<div>
        		<label>Phone</label>
        		<input type="number" name="phone">
        		</div>

        		<div>
        		<label>Password</label>
        		<input type="text" name="password">
        		</div>

        		<div>
        		<input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
        		</div>

        	</form>
        </div>

</center>

    </div>
</body>
</html>