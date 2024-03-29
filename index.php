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
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="teacher" src="image/teacher.png">
				<p>We always try to teach trending courses. Our goal is to keep ourselves up to date in this new technology era.</p>
			</div>
			<div class="col-md-4">
				<img class="teacher" src="image/teacher.png">
				<p>We always try to teach trending courses. Our goal is to keep ourselves up to date in this new technology era.</p>
			</div>
			<div class="col-md-4">
				<img class="teacher" src="image/teacher.png">
				<p>We always try to teach trending courses. Our goal is to keep ourselves up to date in this new technology era.</p>
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
		<h4 class="footer_text">Copyright © 2023 | All Rights Reserve by E-C&WE_GR_11</h4>
		<h5 class="footer_text">The Team: 58_Raisul (Team Lead), 57_Salahuddin, 15_Nishat, 47_Shahinur</h5>
	</footer>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>