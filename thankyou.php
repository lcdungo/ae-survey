

<!--Thank you! -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="images/png" href="images/UP_seal.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/survey_fcn.js"></script>
	<title>Thank You!</title>
	<style>


	/* START: line of code for the check animation */
	.checkmark__circle {
 		stroke-dasharray: 166;
  		stroke-dashoffset: 166;
  		stroke-width: 2;
  		stroke-miterlimit: 10;
  		stroke: #7ac142;
  		fill: none;
  		animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
		}

	.checkmark {
  		width: 56px;
  		height: 56px;
  		border-radius: 50%;
		position: relative;
  		display: block;
		margin: auto;
		stroke-width: 2;
  		stroke: #fff;
  		stroke-miterlimit: 10;
  		box-shadow: inset 0px 0px 0px #7ac142;
  		animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
		}

	.checkmark__check {
  		transform-origin: 50% 50%;
  		stroke-dasharray: 48;
  		stroke-dashoffset: 48;
  		animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
		}

		@keyframes stroke {
  		100% {
    		stroke-dashoffset: 0;
  		}
			}
		@keyframes scale {
  			0%, 100% {
    		transform: none;
  			}
  			50% {
    		transform: scale3d(1.1, 1.1, 1);
  			}
		}
		@keyframes fill {
  		100% {
    		box-shadow: inset 0px 0px 0px 30px #7ac142;
  			}
		}
	/* END: line of code for the check animation */

	div.text {
  		text-align: center;
	}
	</style>
</head>

	
		<!-- for header/ navbar    -->
	<?php include('header.php'); ?>
	<!-- label class = option; radio bttn class = options -->
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

		<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" style = "text-align:center;">
  		<circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
  		<path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
		</svg>

	<br>
	<br>

	<div class="text">
		<h2>Thank you for your feedback!</h2>
		<h3> We greatly appreciate your time. </h3>
	</div>
	
	
	<!-- for footer/ contact details -->
		<?php include('footer.php'); ?>
	
</html>
