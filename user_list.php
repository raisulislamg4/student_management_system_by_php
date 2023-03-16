<?php 
include 'admin_template.php';
require_once "db_con.php";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User List</title>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/datatables/datatables.css">
</head>
<body>
	<div class="content">
		<h2>User List</h2>
		<br>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            	<th>Sl</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Test</td>
                <td>test</td>
                <td>test@email.com</td>
                <td>01730071049</td>
                <td>Admin</td>
            </tr>
        </tbody>
    </table>

</body>
</html>