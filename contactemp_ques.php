<!-- Employer Contact Information-->

<?php 
include_once  ('controllers/contactemp_submit.php');

// if user is not logged in
if (!isset($_SESSION['email'])) {
	header('location:login.php');
	exit();
}
?>

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
	<script type="text/javascript" src="js/slideshow.js"></script>
	<title>Employer Contact Information - UPB DMCS</title>


</head>

	<!-- for header/ navbar    -->
	<?php include('header.php'); ?>
	<!-- label class = option; radio bttn class = options -->


<section>
	<div class="content-contactemp">
		<form class="contactemp-form" action="contactemp_ques.php" method="post">
			<h1>CONTACT INFORMATION OF EMPLOYER</h1>
			<h2>Please spare a few more minutes to provide us with contact information regarding your employer for the 
			Employer Satisfaction Survey. <br> This will be additional help to further improve feedback regarding our degree programs.
		 	You can wish to opt out from this part of the survey. </h2>
			
			
			<!-- error alert -->
			<?php if (count($errors) > 0): ?>
				<div class="alert">
					<?php foreach ($errors as $error): ?>
						<?php echo $error; ?><br>
					<?php endforeach; ?>	
				</div>
			<?php endif;?>
			
			<br>
			<div class="questions-container">
				<div class="Slides" style="display:block;">
					<div class="entry">
						<input type="hidden" name="contactemp" value="contactemp"/>
						<h3 class="ques_title">Do you wish to answer share your employer's contact information?</h3>
					</div>

					<label class="option">Yes
						<input type="radio" name="contactemp_yon" class="options" id="contactemp_y" onclick="$('#companyname, #contactperson, #contactnumber, #contactemail').show();" value="Yes"/>
						<span class="checkbttn"></span>
					</label>
					<label class="option">No
						<input type="radio" name="contactemp_yon" class="options" id="contactemp_n" onclick="$('#companyname, #contactperson, #contactnumber, #contactemail').hide();" value="No"/>
						<span class="checkbttn"></span>
					</label><br>
						
						<!-- <input type="radio" name="contactemp_yon" class="options" id="contactemp_y" onclick="$('#companyname, #contactperson, #contactnumber, #contactemail').show();" value="Yes"/>
							<label class="option" for="contactemp_y">Yes</label>
						<input type="radio" name="contactemp_yon" class="options" id="contactemp_n" onclick="$('#companyname, #contactperson, #contactnumber, #contactemail').hide();" value="No"/>
							<label class="option" for="contactemp_n">No</label>
						<br> -->
				
				
					<div id="companyname" style="display: none;">
						<p class="ques_title">Company Name:</p>
						<input id="" name="emp1" type="text" value="" rows="3" cols="40" style="resize: none;" 
						placeholder="Enter company name">
					</div>

					<div id="contactperson" style="display: none;">
						<p class="ques_title">Contact Person:</p>
						<input id="" name="emp2" type="text" value="" rows="3" cols="40" style="resize: none;" 
						placeholder="Enter name of the employer"
						pattern="[a-zA-Z'-'\s]*">
					</div>
					
					<div id="contactnumber" style="display: none;">
						<p class="ques_title">Contact Number:</p>
						<input type="text" id="" name="emp3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1') value="" rows="3" cols="40" style="resize: none;" 
						placeholder="Enter contact number">
					</div>

					<div id="contactemail" style="display: none;">
						<p class="ques_title">Email:</p>
						<input type="text" id="" name="emp4" value="" rows="3" cols="40" style="resize: none;" 
						placeholder="Enter email">
					</div>


						<!-- submit button -->

					<input type="submit" name="submit-contactemp" value="Submit"/>
					<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>"/>
					<input type="hidden" name="submitted" value="1"/> 
					</br>
				</div>
			</div>
		</form>	
	</div>
	<!-- for footer/ contact details -->
	<?php include('footer.php'); ?>
</section>
</body>
</html>

