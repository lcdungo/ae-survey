<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require ('config/connection.php');

require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';

$query = mysqli_query($db_conn, "SELECT * FROM users");
$errors = array();
$error;
$email = "";
$role  = "";
$mail = new PHPMailer(true);

function password_generate($chars) {
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}

// for registering
if (isset($_POST['reg-btn'])) {

	// check value of variables
	if (isset($_POST['email'])) {
		$email = mysqli_real_escape_string($db_conn, $_POST['email']);
	}
	if (isset($_POST['password'])) {
		$password = mysqli_real_escape_string($db_conn, $_POST['password']);
	}
	if (isset($_POST['roles'])) {
		$role = mysqli_real_escape_string($db_conn, $_POST['roles']);
		if ($role == 'admin') {
			$role_id = 0;
		}
		elseif ($role == 'alum') {
			$role_id = 1;
		}
		elseif ($role == 'emp') {
			$role_id = 2;
		}
		elseif ($role == 'alum_emp') {
			$role_id = 3;
		}
	}
	$pass = $password;

	$query = "SELECT * FROM users WHERE email=? LIMIT 1";
	$stmt = $db_conn->prepare($query);
	$stmt->bind_param('s', $email);
	$stmt->execute();
	$result = $stmt->get_result();
	$user_count = $result->num_rows;
	$stmt->close();

	// error checking
	if ($user_count > 0) {
		$errors['email'] = "Email already exists";
	}
	if (empty($email)) {
		$errors['email_emp'] = "Email is required";
	}

	if (empty($password)) {
		$errors['password'] = "Password is required";
	}

	if (empty($role)) {
		$errors['role'] = "Role is required";
	}

	// no errors, proceed create new user
	if (count($errors) === 0) {
		$password = password_hash($password, PASSWORD_DEFAULT);
		$token = bin2hex(random_bytes(50));


		$sql = "INSERT INTO users (email, token, password, pass, role_id) VALUES ('$email', '$token', '$password', '$pass', '$role_id')";
		mysqli_query($db_conn, $sql);
		$_SESSION['success'] = "User successfully added to the database!";

		// sending email to newly registered users
		try {
			$mail->SMTPDebug = SMTP::DEBUG_SERVER; 
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'dmcs.survey.test1@gmail.com'; // gmail address used as SMTP server
			$mail->Password = 'eysiyplscikrzidf'; // password of gmail address
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port = 587;

			$mail->setFrom('dmcs.survey.test1@gmail.com', 'DMCS Survey');
			$mail->addAddress($email); // email receiver
			$mail->addReplyTo('no-reply@gmail.com', 'No reply');

			$mail->isHTML(true);
			$mail->Subject = 'DMCS Survey Credentials';
			if ($role == 'admin') {
				$mail->Body = "Good day! <br><br>
			You have been given admin privileges to the DMCS Surveys.<br><br>
			To proceed, please click this link: <a href='#'>link here</a> and use the following credentials for logging in.<br><br><b>
			Email : </b>$email <br><b>
			Password : </b>$pass <br><br>
			Kindly disregard if you already received this email. Thank you.";
			}
			elseif ($role == 'alum') {
				$mail->Body = "Good day! <br><br>
			You are invited to participate in the DMCS Alumni Survey, which is being used to assess the situation of DMCS Alumni.<br><br>
			Your answers will remain anonymous, and all survey results will be stored securely, made available only to authorized individuals for analysis and reporting.<br><br>
			To proceed, please click this link: <a href='#'>link here</a> and use the following credentials for logging in.<br><br><b>
			Email : </b>$email <br><b>
			Password : </b>$pass <br><br>
			Kindly disregard if you already responded to this survey. Thank you.";
			}
			elseif ($role == 'emp') {
				$mail->Body = "Good day! <br><br>
			You are invited to participate in the DMCS Employer Satisfaction Survey, which is being used to assess the employability of DMCS Alumni.<br><br>
			Your answers will remain anonymous, and all survey results will be stored securely, made available only to authorized individuals for analysis and reporting.<br><br>
			To proceed, please click this link: <a href='#'>link here</a> and use the following credentials for logging in.<br><br><b>
			Email : </b>$email <br><b>
			Password : </b>$pass <br><br>
			Kindly disregard if you already responded to this survey. Thank you.";
			}
			else {
				$mail->Body = "Good day! <br><br>
			You are invited to participate in the DMCS Alumni Survey and Employer Satisfaction Survey, which is being used to assess the situation of DMCS Alumni and assess the employability of DMCS Alumni, respectively.<br><br>
			Your answers will remain anonymous, and all survey results will be stored securely, made available only to authorized individuals for analysis and reporting.<br><br>
			To proceed, please click this link: <a href='#'>link here</a> and use the following credentials for logging in.<br><br><b>
			Email : </b>$email <br><b>
			Password : </b>$pass <br><br>
			Kindly disregard if you already responded to this survey. Thank you.";
			}
			
			//$mail->AltBody = 'For non HTML clients';

			$mail->send();
		} catch (Exception $e) {
			$_SESSION['error'] = 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
		}

		header('location: index.php');
	 	exit();
	}

}
?>