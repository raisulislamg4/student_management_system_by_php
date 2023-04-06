<?php 
include 'admin_template.php';
require_once "db_con.php";
// session_start();
// error_reporting(0);

    $sql = "SELECT * FROM COURSES";

    $result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Courses List</title>
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
		<h2>Courses List</h2>
		<br>
        <input class="filter" type="text" id="codeInput" onkeyup="courseCodeFunction()" placeholder="Search">
        <label class="filter-label">Course Name</label>
        <input class="filter" type="text" id="nameInput" onkeyup="courseNameSearchFunction()" placeholder="Search">
        <label class="filter-label">Course Code</label>
        <br>
        <br>
		<table id="myTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            	<th>Sl</th>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Credit</th>
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
                <td><?php echo "{$info['COURSE_CODE']}"; ?></td>
                <td><?php echo "{$info['COURSE_NAME']}"; ?></td>
                <td><?php echo "{$info['CREDIT']}"; ?></td>
                <td><?php echo "<a href='update_course.php?course_id={$info['ID']}' class='btn btn-primary a-btn-slide-text'>
                    <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                    <span><strong>Edit</strong></span>          
                    </a>
                    <a onClick=\" javascript:return confirm('Are you sure to Delete this Course!')\" href='delete.php?course_id={$info['ID']}' class='btn btn-danger a-btn-slide-text'>
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
    <script>
        function courseNameSearchFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("nameInput");
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
        
        function courseCodeFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("codeInput");
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
    </script>
</body>
</html>