<?php 
include 'admin_template.php';
require_once "db_con.php";
error_reporting(0);


    $sql = "SELECT * FROM STUDENTS ORDER BY BATCH ASC, ROLL ASC";

    $result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students List</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/add_user_form.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/datatables/datatables.css"> -->
</head>
<body>
	<div class="content">
		<h2>Students List</h2>
		<br>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            	<th>Sl</th>
                <th>Name</th>
                <th>Department</th>
                <th>Batch</th>
                <th>Roll</th>
                <th>Registration</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sl = 1;
            while ($info = $result -> fetch_assoc()) {

            ?>  

            <tr>
                <td><?php echo "{$sl}"; ?></td>
                <td><?php echo "{$info['NAME']}"; ?></td>
                <td><?php echo "{$info['DEPARTMENT']}"; ?></td>
                <td><?php echo "{$info['BATCH']}"; ?></td>
                <td><?php echo "{$info['ROLL']}"; ?></td>
                <td><?php echo "{$info['REGISTRATION']}"; ?></td>
                <td><?php echo "{$info['EMAIL']}"; ?></td>
                <td><?php echo "{$info['PHONE']}"; ?></td>
                <td><?php echo "<a href='update_student.php?student_id={$info['ID']}' class='btn btn-primary a-btn-slide-text'>
                    <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                    <span><strong>Edit</strong></span>          
                    </a>
                    <a onClick=\" javascript:return confirm('Are you sure to Delete this Student!')\" href='delete.php?student_id={$info['ID']}' class='btn btn-danger a-btn-slide-text'>
                    <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                    <span><strong>Delete</strong></span>
                ";?></td>
            </tr>
            <?php 
            $sl++;

            }
            ?>

        </tbody>
    </table>

</body>
</html>