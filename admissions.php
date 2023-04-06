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
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<div class="content">
		<h2>Admission Applicants</h2>
		<br>

		<input class="filter" type="text" id="phoneInput" onkeyup="phoneSearchFunction()" placeholder="Search">
		<label class="filter-label">Phone</label>
		<input class="filter" type="text" id="emailInput" onkeyup="emailSearchFunction()" placeholder="Search">
		<label class="filter-label">Email</label>
		<input class="filter" type="text" id="statusInput" onkeyup="statusSearchFunction()" placeholder="Search">
		<label class="filter-label">Status</label>
		<input class="filter" type="text" id="myInput" onkeyup="nameSearchFunction()" placeholder="Search">
		<label class="filter-label">Name</label>
		<br>
		<br>
		<table id="myTable" class="table table-striped table-bordered" style="width:100%">
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
			<div class="data-table">
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
			</div>
			<?php 
			$sl++;

			}
			?>
		</table>
	</div>
	<script>
		function nameSearchFunction() {
  			// Declare variables
  			var input, filter, table, tr, td, i, txtValue;
  			input = document.getElementById("myInput");
  			filter = input.value.toUpperCase();
  			table = document.getElementById("myTable");
  			tr = table.getElementsByTagName("tr");

  			// Loop through all table rows, and hide those who don't match the search query
  			for (i = 0; i < tr.length; i++) {
    			td = tr[i].getElementsByTagName("td")[1];
    			if (td) {
      				txtValue = td.textContent || td.innerText;
      				if (txtValue.toUpperCase().indexOf(filter) > -1) {
        				tr[i].style.display = "";
      				} else {
        				tr[i].style.display = "none";
      				}
    			}
  			}
		}
		function statusSearchFunction() {
  			// Declare variables
  			var input, filter, table, tr, td, i, txtValue;
  			input = document.getElementById("statusInput");
  			filter = input.value.toUpperCase();
  			table = document.getElementById("myTable");
  			tr = table.getElementsByTagName("tr");

  			// Loop through all table rows, and hide those who don't match the search query
  			for (i = 0; i < tr.length; i++) {
    			td = tr[i].getElementsByTagName("td")[5];
    			if (td) {
      				txtValue = td.textContent || td.innerText;
      				if (txtValue.toUpperCase().indexOf(filter) > -1) {
        				tr[i].style.display = "";
      				} else {
        				tr[i].style.display = "none";
      				}
    			}
  			}
		}
		function emailSearchFunction() {
  			// Declare variables
  			var input, filter, table, tr, td, i, txtValue;
  			input = document.getElementById("emailInput");
  			filter = input.value.toUpperCase();
  			table = document.getElementById("myTable");
  			tr = table.getElementsByTagName("tr");

  			// Loop through all table rows, and hide those who don't match the search query
  			for (i = 0; i < tr.length; i++) {
    			td = tr[i].getElementsByTagName("td")[2];
    			if (td) {
      				txtValue = td.textContent || td.innerText;
      				if (txtValue.toUpperCase().indexOf(filter) > -1) {
        				tr[i].style.display = "";
      				} else {
        				tr[i].style.display = "none";
      				}
    			}
  			}
		}
		function phoneSearchFunction() {
  			// Declare variables
  			var input, filter, table, tr, td, i, txtValue;
  			input = document.getElementById("phoneInput");
  			filter = input.value.toUpperCase();
  			table = document.getElementById("myTable");
  			tr = table.getElementsByTagName("tr");

  			// Loop through all table rows, and hide those who don't match the search query
  			for (i = 0; i < tr.length; i++) {
    			td = tr[i].getElementsByTagName("td")[3];
    			if (td) {
      				txtValue = td.textContent || td.innerText;
      				if (txtValue.toUpperCase().indexOf(filter) > -1) {
        				tr[i].style.display = "";
      				} else {
        				tr[i].style.display = "none";
      				}
    			}
  			}
		}
	</script>
</body>
</html>