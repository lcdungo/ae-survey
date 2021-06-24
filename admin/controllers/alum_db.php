<?php
// display alum survey raw data from db
session_start();

require ('config/connection.php');

$errors = array();
$error;
$email = "";

$query1 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q1");
$query2 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q2");
$query3 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q3");
$query4 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q4");
$query5 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q5");
$query6 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q6");
$query7 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q7");
$query8 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q8");
$query9 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q9");
$query10 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q10");
$query11 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q11");
$query12 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q12");
$query13 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q13");
$query14 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q14");
$query15 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q15");
$query16 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q16");
$query17 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q17");
$query18 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q18");
$query19 = mysqli_query($db_conn, "SELECT * FROM alum_survey_q19");


?>