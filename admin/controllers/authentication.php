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
	if (empty($password)) {
		$errors['password'] = "Password is required";
	}

	// add these two once there is admin control to add new users
	// admin page
	#$password = password_hash($password, PASSWORD_DEFAULT);
	#$token = bin2hex(random_bytes(50));

	if (count($errors) == 0) {
		$sql = "SELECT * FROM users WHERE email=? LIMIT 1";
		$stmt = $db_conn->prepare($sql);
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$result = $stmt->get_result();
		$user = $result->fetch_assoc();

		if (password_verify($password, $user['password'])) {
			// successful login
			$_SESSION['id'] = $user['user_id'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['role'] = $user['role_id'];

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
}// end of login-btn

?>