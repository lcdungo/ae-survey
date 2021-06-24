<?php

require 'constants.php';

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die ("Could not connect to the database because: ". mysqli_connect_error());

// ALTERNATE VERSION

/*session_start();

$host = "localhost";
$user = "root";
$pass = '';
$db = "dmcs_survey_db";


$con = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()){
	die("Failed to connect with MySQL: ". mysqli_connect_error());
}*/


// NOTE: Read more on connection scripts and security to make it more secure
?>

