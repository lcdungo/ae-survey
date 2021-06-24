<?php //require_once 'controllers/authentication.php'; 

session_start();
require ('config/connection.php');

$id = $_SESSION['id'];
// if user already answered employer survey
$emp_check_query = "SELECT * FROM emp_survey_q1 WHERE user_id='$id' LIMIT 1";
$result1 = mysqli_query($db_conn, $emp_check_query);
$user_emp = mysqli_fetch_assoc($result1);

// if user already answered alumni survey
$alum_check_query = "SELECT * FROM alum_survey_q1 WHERE user_id='$id' LIMIT 1";
$result2 = mysqli_query($db_conn, $alum_check_query);
$user_alum = mysqli_fetch_assoc($result2);

// if user is not logged in
if (!isset($_SESSION['email'])) {
	header('location:login.php');
	exit();
}

// if user is not an alum & emp but alumni only
if ($_SESSION['role'] == 1) {
    header('location: alum_survey.php');
    exit();
}
// if user is not an alum & emp but employer only
if ($_SESSION['role'] == 2) {
    header('location: emp_survey.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="images/png" href="images/UP_seal.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Alumni & Employer Landing Page - UPB DMCS</title>
	</head>
		<?php include('header.php'); ?>

	<div class="container-info-ae">
		<h3>
			Which survey would you like to answer?
		</h3>
		<h6 style="color:black;">
			(If the button is disabled, it means you have answered that survey)
		</h6>
		<div class = "ae-buttons">
				<a href="alum_survey.php" class="ae-choices" name="alumni" title="Alumni Survey" 
				<?php if($user_alum && $_SESSION['role']==3){ if ($user_alum['user_id'] == $_SESSION['id']) {?>
					onclick="return false;" style="background-color:gray;cursor: not-allowed;"
		   		<?php } else ?> 
		   			onclick="return true;"
		   		<?php }?>>Alumni</a>

				<a href="emp_survey.php" class="ae-choices" name="employer" title="Employer Satisfaction Survey" 
				<?php if($user_emp && $_SESSION['role']==3){ if ($user_emp['user_id'] == $_SESSION['id']) {?>
					onclick="return false;" style="background-color:gray;cursor: not-allowed;"
		   		<?php } else ?> 
		   			onclick="return true;"
		   		<?php }?>>Employer</a>
		</div>
	</div>
	<?php include('footer.php'); ?>
	</body>
	</html>