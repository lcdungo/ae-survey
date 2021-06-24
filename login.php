<?php require_once 'controllers/authentication.php'; 

// prevent back to login
if (isset($_SESSION['email'])) {
	if ($_SESSION['role'] === $ALUMNI_ROLE_ID) {
		header('location: alum_survey.php');
		exit();
	}
	elseif ($_SESSION['role'] === $EMPLOYER_ROLE_ID) {
		header('location: emp_survey.php');
		exit();
	}
	elseif ($_SESSION['role'] === $ALUM_EMP_ROLE_ID) {
		header('location: alum_emp.php');
		exit();
	}
	elseif ($_SESSION['role'] === $ADMIN_ROLE_ID) {
		header('location: admin');
		exit();
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- 
	<link rel="stylesheet" href="css/normalize.css"> -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="images/png" href="images/UP_seal.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/survey_fcn.js"></script>
	<title>Log in - UPB DMCS Alumni and Employer Survey</title>
	</head>
	<body>
	<div class="main-container">

	    <header id="container-header">
			<div class = "logos">
				<img src = "images/UP_seal.png" id = "up">		
				<img src = "images/CS_logo.png" id = "cs">	
			</div>		
			<div class = "banner_lines">	
				<h3>Department of Mathematics and Computer Science</h3>
				<h4>College of Science</h4>
				<h6>University of the Philippines Baguio</h6>
			</div>		
		</header>

	    <section class="container-login">
			<div class = "container-info">
				<h3>Welcome dear respondent!</h3>
				<div class="content">
					Please use the credentials sent to you by email.<br><br>
					We would like to ask your help in completing the succeeding survey.
					Your answers will be used as important feedback to improve our degree programs.<br><br>
					Your participation in this study is voluntary and you may opt not to participate
					by exiting this webpage. Once you log in and choose to participate, 
					it is mandatory for you to fill in the required fields. Please rest assured 
					your answers will not be attributed to you or matched with your identity. Since 
					no personal information will be collected from you, the Philippine Data Privacy
					Act does not apply to the processing of information gathered through this survey.<br><br>
					Thank you.
				</div>
			</div>
			<div class="login-form">
				<form action="login.php" method="post">
					<!-- added this area for error messages -->
					<?php if (count($errors) > 0): ?>
						<div class="alert">
						<i class="fa fa-warning"></i>
							<?php foreach ($errors as $error): ?>
								<?php echo $error; ?><br>
							<?php endforeach; ?>	
						</div>
					<?php endif;?>
					<label for="email">E-mail:</label><br>
					<input type="email" placeholder="Type your email address here..." name="email" value="<?php echo $email; ?>"><br><br>
					<label for="password">Password:</label><br>
					<input type="password" placeholder="Type your password here..." name="password" id="pass"><br>
					<input type="checkbox" onclick="showPass()" name="show_check" class="login-addons">
					<label for="show_check" class="login-addons">Show Password</label>
					<a href="reset_pswd.php" class="login-addons" id="forgot-pwd">Forgot Password?</a>
					<br><br>
					<input type="submit" value="Log in" name="login-btn">
				</form>
			</div>
		</section>

	    <?php include('footer.php'); ?>

	</div> <!--/.main-container-->
		
	</body>
	</html>
