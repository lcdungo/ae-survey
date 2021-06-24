<?php
require_once 'controllers/reset_submit.php'; 

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
	<title>Reset Password</title>
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

	  <section>
			<div class="reset-form">
				<form action="reset_pswd.php" method="post" id="reset-form">
					<!-- added this area for error messages -->
					<?php if (count($errors) > 0): ?>
						<div class="alert-fail">
							<?php foreach ($errors as $error): ?>
								<?php echo $error; ?><br>
							<?php endforeach; ?>	
						</div>
					<?php endif;?>
					<?php if (!empty($succ['message'])): ?>
						<div class="alert-success">
								<?php echo $succ['message']; ?><br>
						</div>
					<?php endif; ?>
					<p id="reset-txt">Kindly type your email to send request to admin to resend your password</p>
					<input type="email" placeholder="  Email" name="email" value="<?php echo $email; ?>" id="reset-email" autocomplete="off">
					<input type="submit" value="Reset" name="reset-btn" id="reset-btn">
					<a href="login.php" name="cancel-btn" id="cancel-btn">Back</a>
				</form>
			</div>
		</section>

	    <?php include('footer.php'); ?>

	</div> <!--/.main-container-->
		
	</body>
	</html>