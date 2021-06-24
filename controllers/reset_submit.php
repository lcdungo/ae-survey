<?php

session_start();

require ('config/connection.php');

$ADMIN_ROLE_ID = 0;
$ALUMNI_ROLE_ID = 1;
$EMPLOYER_ROLE_ID = 2;
$ALUM_EMP_ROLE_ID = 3;

$errors = array();
$succ = array();
$error;
$email = "";

if (isset($_POST['reset-btn'])) {
	$email = $_POST['email'];

	// if email field is empty
	if (empty($email)) {
		$errors['message'] = "Email is required";
	}

	// getting associated id with email entered
	$id_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  	$result = mysqli_query($db_conn, $id_query);
  	$user = mysqli_fetch_assoc($result);

  	if (!$user && !empty($email)) {
  		$errors['message'] = "User does not exist in the database. Contact admin for more info.";
  	}

  	if ($user && empty($errors)) {
  		$user_id = $user['user_id'];

  		$sql = "INSERT INTO password_request (email, user_id, date_request) VALUES ('$email', '$user_id', now())";
		mysqli_query($db_conn, $sql);

		$succ['message'] =  "Request forwarded to the admin. Wait for response in email.";
  	}
}

?>