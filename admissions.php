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
		<table border="1px">
			<tr>
				<th style="padding: 20px; font-size: 15px;">Sl</th>
				<th style="padding: 20px; font-size: 15px;">Name</th>
				<th style="padding: 20px; font-size: 15px;">Email</th>
				<th style="padding: 20px; font-size: 15px;">Phone</th>
				<th style="padding: 20px; font-size: 15px;">Message</th>
			</tr>

			<?php
			$sl = 1;
			while ($info = $result -> fetch_assoc()) {

			?>	
			
			<tr>
				<td style="padding: 20px; font-size: 15px;"><?php echo "{$sl}"; ?></td>
				<td style="padding: 20px; font-size: 15px;"><?php echo "{$info['NAME']}"; ?></td>
				<td style="padding: 20px; font-size: 15px;"><?php echo "{$info['EMAIL']}"; ?></td>
				<td style="padding: 20px; font-size: 15px;"><?php echo "{$info['PHONE']}"; ?></td>
				<td style="padding: 20px; font-size: 15px;"><?php echo "{$info['MESSAGE']}"; ?></td>
			</tr>
			
			<?php 
			$sl++;

			}
			?>
		</table>
	</div>
</body>
</html>