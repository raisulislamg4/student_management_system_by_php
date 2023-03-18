<?php 
include 'admin_template.php';
require_once "db_con.php";

	$sql = "SELECT * FROM ADMISSIONS";

	$result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admissions</title>
	<link rel="stylesheet" type="text/css" href="admissions.css">
</head>
<body>
	<div class="content">
		<h2>Admission Applicants</h2>
		<br>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<tr>
				<th>Sl</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Message</th>
				<th>Status</th>
				<th>Action</th>
			</tr>

			<?php
			$sl = 1;
			while ($info = $result -> fetch_assoc()) {

			?>	
			
			<tr>
				<td><?php echo "{$sl}"; ?></td>
				<td><?php echo "{$info['NAME']}"; ?></td>
				<td><?php echo "{$info['EMAIL']}"; ?></td>
				<td><?php echo "{$info['PHONE']}"; ?></td>
				<td><?php echo "{$info['MESSAGE']}"; ?></td>
				<td><?php echo "{$info['STATUS']}"; ?></td>
				<td><?php echo "<a href='update_application.php?applicant_id={$info['ID']}' class='btn btn-primary a-btn-slide-text'>
                    <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                    <span><strong>Status</strong></span>          
                    </a>
                    <a onClick=\" javascript:return confirm('Are you sure to Delete this Application!')\" href='delete.php?applicant_id={$info['ID']}' class='btn btn-danger a-btn-slide-text'>
                    <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                    <span><strong>Delete</strong></span>
                ";?></td>
			</tr>
			
			<?php 
			$sl++;

			}
			?>
		</table>
	</div>
</body>
</html>