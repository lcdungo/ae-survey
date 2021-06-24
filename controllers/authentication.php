<?php

session_start();

require ('config/connection.php');

$ADMIN_ROLE_ID = 0;
$ALUMNI_ROLE_ID = 1;
$EMPLOYER_ROLE_ID = 2;
$ALUM_EMP_ROLE_ID = 3;

$errors = array();
$error;
$email = "";


// if user clicks log in button
if (isset($_POST['login-btn'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	// validation/ error handling
	// if email field is empty
	if (empty($email)) {
		$errors['email'] = "Email is required";
	}
	// if password field is empty
	if (empty($password) && !empty($email)) {
		$errors['password'] = "Password is required";
	}

	// getting associated id with email entered
	$id_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  	$result = mysqli_query($db_conn, $id_query);
  	$user = mysqli_fetch_assoc($result);

  	// if user exists and there are no errors
	if ($user && empty($errors)) {
  		$id = $user['user_id'];
		$role_id = $user['role_id'];

		// if user already answered employer survey and is an employer
	  	$emp_check_query = "SELECT * FROM emp_survey_q1 WHERE user_id='$id' LIMIT 1";
	  	$result1 = mysqli_query($db_conn, $emp_check_query);
	  	$user_emp = mysqli_fetch_assoc($result1);

		if($user_emp && $role_id==$EMPLOYER_ROLE_ID){ 
		    if ($user_emp['user_id'] == $id) {
			    $errors['user'] = "Feedback from user already exists";
			    $error = true;
		    }
		}else {
			$error = false;
		}

		// if user already answered alumni survey and is an alumni
	  	$alum_check_query = "SELECT * FROM alum_survey_q1 WHERE user_id='$id' LIMIT 1";
	  	$result2 = mysqli_query($db_conn, $alum_check_query);
	  	$user_alum = mysqli_fetch_assoc($result2);

		if($user_alum && $role_id==$ALUMNI_ROLE_ID){ 
		    if ($user_alum['user_id'] == $id) {
			    $errors['user'] = "Feedback from user already exists";
			    $error = true;
		    }
		}else {
			$error = false;
		}

		// if user is an alumni and employer and answered both surveys already
		if($user_emp && $user_alum && $role_id==$ALUM_EMP_ROLE_ID){ 
		    if ($user_alum['user_id'] == $id || $user_emp['user_id']) {
			    $errors['user'] = "Feedback from user already exists";
			    $error = true;
		    }
		}else {
			$error = false;
		}


		// if there are no errors proceed to log in
		if (count($errors) == 0) {
			$sql = "SELECT * FROM users WHERE email=? LIMIT 1";
			$stmt = $db_conn->prepare($sql);
			$stmt->bind_param('s', $email);
			$stmt->execute();
			$result = $stmt->get_result();
			$user = $result->fetch_assoc();

			// chack if password matches email
			if (password_verify($password, $user['password'])) {
				// successful login
				$_SESSION['id'] = $user['user_id'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['role'] = $user['role_id'];

				// update date and time of last login
				$sql_time = "UPDATE users set last_login=now() where user_id=".$_SESSION['id'];
				$rs = mysqli_query($db_conn, $sql_time);

				// check role of the user
				if ($user['role_id'] === $ALUMNI_ROLE_ID) {
					header('location: alum_survey.php');
					exit();
				}
				elseif ($user['role_id'] === $EMPLOYER_ROLE_ID) {
					header('location: emp_survey.php');
					exit();
				}
				elseif ($user['role_id'] === $ALUM_EMP_ROLE_ID) {
					header('location: alum_emp.php');
					exit();
				}
				elseif ($user['role_id'] === $ADMIN_ROLE_ID) {
					header('location: admin');
					exit();
				}
				
			}
			else {
				$errors['login_fail'] = "Email and password do not match!";
			}
		}
  	} else if (!$user && !empty($email)) {
  		$errors['password'] = "The email you entered is not registered";
  	}
}// end of login-btn

?>
