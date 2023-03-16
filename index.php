<?php 

error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {

	$message = $_SESSION['message'];

	echo 	"<script type='text/javascript'>
				alert('$message');
			</script>";
}

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>
<body>
	<nav>
		<label class="logo">DIU</label>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Admission</a></li>
			<li><a href="login.php" class="btn btn-default">Login</a></li>
		</ul>
	</nav>

	<div class="section1">
		<label class="img_text">“Teachers open the door, but you must enter by yourself”</label>
		<img class="main_img" src="image/campus.jpg">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="welcome_img" src="image/welcome.jpg">
			</div>
			<div class="col-md-8">
				<h1>Welcome to DIU</h1>
				<p>Dhaka International University (DIU) is one of the leading, familiar and note-worthy private universities in Bangladesh which was established on 7th April 1995. It is a non-profitable institution having strict academic discipline. This university was founded by Late Alhaj Professor Dr. A. B. M. Mafizul Islam Patwari, Former Chairman of the Department of Law, University of Dhaka, Bangladesh.<br>
				It is recognized that Dhaka International University is such a private university, which was founded by a person who was a renowned humanist and academician.He established this university with high hopes and aspirations to disseminate knowledge and thus to extend the horizon of knowledge. That is why, the motto of DIU is the universal adage, "Knowledge is Power". DIU generates this power of Knowledge in an individual through teaching-learning, training, research and guidance by using modern, pragmatic and well-designed curriculum and syllabus.</p>
			</div> 
		</div>
	</div>

	<center>
		<h1 class="section_div">Our Teachers</h1>
	</center>
	<<div class="content">
	<div class="container-fluid">
		<div>   
			<a href="#"><strong><span class="ti-crown"></span> Teachers Section</strong></a>
			<hr>		
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-10">
						<h3 class="panel-title"></h3>
					</div>
					<div class="col-md-2" align="right">
						<button type="button" name="add" id="addTeacher" class="btn btn-success btn-xs">Add New Teacher</button>
					</div>
				</div>
			</div>
			<table id="teacherList" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>	
						<th>Assigned Subjects</th>	
						<th>Class</th>	
						<th>Sections</th>								
						<th></th>
						<th></th>							
					</tr>
				</thead>
			</table>
			
		</div>			
	</div>		

	public function listTeacher(){		
	$sqlQuery = "SELECT t.teacher_id, t.teacher, s.subject, c.name, se.section			
		FROM ".$this-<teacherTable." as t 
		LEFT JOIN ".$this-<subjectsTable." as s ON t.subject_id = s.subject_id
		LEFT JOIN ".$this-<classesTable." as c ON t.teacher_id = c.teacher_id
		LEFT JOIN ".$this-<sectionsTable." as se ON c.section = se.section_id ";
	if(!empty($_POST["search"]["value"])){
		$sqlQuery .= ' WHERE (t.teacher_id LIKE "%'.$_POST["search"]["value"].'%" ';
		$sqlQuery .= ' OR t.teacher LIKE "%'.$_POST["search"]["value"].'%" ';					
	}
	if(!empty($_POST["order"])){
		$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
	} else {
		$sqlQuery .= 'ORDER BY t.teacher_id DESC ';
	}
	if($_POST["length"] != -1){
		$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
	}	
	$result = mysqli_query($this-<dbConnect, $sqlQuery);
	$numRows = mysqli_num_rows($result);
	$teacherData = array();	
	while( $teacher = mysqli_fetch_assoc($result) ) {		
		$teacherRows = array();			
		$teacherRows[] = $teacher['teacher_id'];
		$teacherRows[] = $teacher['teacher'];
		$teacherRows[] = $teacher['subject'];
		$teacherRows[] = $teacher['name'];	
		$teacherRows[] = $teacher['section'];				
		$teacherRows[] = '>button type="button" name="update" id="'.$teacher["teacher_id"].'" class="btn btn-warning btn-xs update"<Update>/button<';
		$teacherRows[] = '>button type="button" name="delete" id="'.$teacher["teacher_id"].'" class="btn btn-danger btn-xs delete" <Delete>/button<';
		$teacherData[] = $teacherRows;
	}
	$output = array(
		"draw"				=<	intval($_POST["draw"]),
		"recordsTotal"  	=<  $numRows,
		"recordsFiltered" 	=< 	$numRows,
		"data"    			=< 	$teacherData
	);
	echo json_encode($output);
}
</div>	
			</div>
		</div>
	</div>

	<center>
		<h1 class="section_div">Our Courses</h1>
	</center>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="course" src="image/course1.jpg">
				<h4>Oracle Certified Database Administrator</h4>
			</div>
			<div class="col-md-4">
				<img class="course" src="image/course2.jpg">
				<h4>RedHat Certified System Administrator</h4>
			</div>
			<div class="col-md-4">
				<img class="course" src="image/course3.jpg">
				<h4>Cisco Certified Network Associate</h4>
			</div>
		</div>
	</div>

	<center>
		<h1 class="section_div">Admission Form</h1>
	</center>
	<div align="center" class="admission_form">
		<form action="admission_form_check.php" method="POST">
			<div class="input_div">
				<label class="label_text">Name*</label>
				<input class="input_deg" type="text" name="name">
			</div>
			<div class="input_div">
				<label class="label_text">Email*</label>
				<input class="input_deg" type="text" name="email">
			</div>
			<div class="input_div">
				<label class="label_text">Phone*</label>
				<input class="input_deg" type="text" name="phone">
			</div>
			<div class="input_div">
				<label class="label_text">Message</label>
				<textarea class="input_text" name="message"></textarea>
			</div>
			<div class="input_div">
				<input class="btn btn-default" id="submit" type="submit" value="Apply" name="apply">
			</div>
		</form>
	</div>

	<footer>
		<h4 class="footer_text">Copyright © 2023 | All Rights Reserve by DB_Group-3_Raisul_Islam</h4>
		<h5 class="footer_text">The Team: 58_Raisul, 57_Salahuddin, 42_Nazrul</h5>
	</footer>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>