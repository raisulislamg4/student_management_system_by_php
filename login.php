<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body background="image/login_form_bg.jpg" class="login_body_deg">
	<center>
		<div class="login_div_deg">
			<center class="login_title_deg">
				Login Form
			</center>
			<form class="login_form">
				<div>
					<label class="login_label_deg">Username</label>
					<input class="login_input_deg" type="text" name="username">
				</div>
				<div>
					<label class="login_label_deg">Password</label>
					<input class="login_input_deg" type="Password" name="password">
				</div>
				<div>
					<input class="btn btn-primary" type="submit" name="submit" value="Login">
				</div>
			</form>
		</div>
	</center>
</body>
</html>