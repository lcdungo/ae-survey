<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require ('config/connection.php');

require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

$query = mysqli_query($db_conn, "SELECT * FROM users");

// for deleting users
if (isset($_GET['delete'])) {
	mysqli_query($db_conn, "DELETE FROM users WHERE user_id='".$_GET['delete']."'");
	$_SESSION['success'] = "User record has been deleted!";
	
	header('location: index.php');
	exit();
}

$pass_query = mysqli_query($db_conn, "SELECT * FROM password_request");
$pass_rows_count = mysqli_num_rows($pass_query);
// for users who requested password
if (isset($_GET['id'])) {
	$id = mysqli_real_escape_string($db_conn, $_GET['id']);

	// getting associated email with id
	$id_query = "SELECT * FROM users WHERE user_id='$id' LIMIT 1";
  	$result = mysqli_query($db_conn, $id_query);
  	$user = mysqli_fetch_assoc($result);
  	$email = $user['email'];
  	$pass = $user['pass'];

	// sending email to users
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
		$mail->Subject = 'DMCS Survey Password Resend Request';
		$mail->Body = "Good day! <br><br>
		A password resend was requested for your account at UP Baguio DMCS Surveys.<br><br>
		To proceed, please click this link: <a href='#'>link here</a> and use the following credentials for logging in.<br><br><b>
		Email : </b>$email <br><b>
		Password : </b>$pass <br><br>
		If this password reset was not requested by you, no action is needed.<br><br>
		If you need help, please contact the site administrator. Thank you! <br><br><br>
		<b>Admin User</b>";

		//$mail->AltBody = 'For non HTML clients';

		$_SESSION['success'] = "Email containing password was sent to user";
		$mail->send();
		mysqli_query($db_conn, "DELETE FROM password_request WHERE user_id='$id'");
	} catch (Exception $e) {
		$_SESSION['error'] = 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
	}
	header('location: index.php');
	exit();
}

?>