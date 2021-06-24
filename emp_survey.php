
<!-- Employer Satisfaction Survey Web Page-->
<?php 
include_once ('controllers/emp_submit.php');

// if user is not logged in
if (!isset($_SESSION['email'])) {
	header('location:login.php');
	exit();
}

// if user is not an alum but an employer
if ($_SESSION['role'] == 1) {
    header('location: alum_survey.php');
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
	<title>Employer Satisfaction Survey - UPB DMCS</title>
</head>
	<!-- for header/ navbar -->
	<?php include('header.php'); ?>
	<!-- label class = option; radio bttn class = options -->

	<section>
		<div class="content-emp">
			<form class="emp-form" action="emp_survey.php" method="post" id="empForm">
				<h1>Employer Satisfaction Survey</h1>
				<h2>Please make sure to fill in answers to all the questions.</h2>
				<!-- error alert -->
				<?php if (count($errors) > 0): ?>
					<div class="alert">
						<?php foreach ($errors as $error): ?>
							<?php echo $error; ?><br>
						<?php endforeach; ?>	
					</div>
				<?php endif;?>

				<br>
				<div class="dot-navigation">
					<span class="dot" onclick="currentSlide(0)"></span>
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
					<span class="dot" onclick="currentSlide(5)"></span>
					<span class="dot" onclick="currentSlide(6)"></span>
					<span class="dot" onclick="currentSlide(7)"></span>
					<span class="dot" onclick="currentSlide(8)"></span>
					<span class="dot" onclick="currentSlide(9)"></span>
				</div>
				<br>

				<div class="questions-container">
					<div class="Slides" style="display:block;">
						<div class="numbertext">1 / 10</div>
						<!-- QUESTION # 1 -->
						<div class="entry">
							<input type="hidden" name="one" value="1"/>
							<h3 class="ques_title">1. Which sector of economy does your company/organization belong to?</h3>
						</div>
						<span oninput="this.className = ''">
							<label class="option">Public
								<input type="radio" name="ques1" id="ques1_1"value="Public" <?php if (isset($_POST['ques1']) && $_POST['ques1']=="Public") echo "checked";?> oninput="this.className = ''">
								<span class="checkbttn"></span>
							</label>
							<label class="option">Private
								<input type="radio" name="ques1" id="ques1_2"value="Private" <?php if (isset($_POST['ques1']) && $_POST['ques1']=="Private") echo "checked";?> oninput="this.className = ''">
								<span class="checkbttn"></span>
							</label>
							<label class="option">Others, please specify:
								<input type="radio" name="ques1" id="ques1_other"value="Other" <?php if (isset($_POST['ques1']) && $_POST['ques1']=="Other") echo "checked";?> oninput="this.className = ''">
								<span class="checkbttn"></span>
							</label>
						</span>
							

							<!-- <input class="options" type="radio" name="ques1"  id="ques1_1"value="Public" />
								<label for="ques1_1" class="option">Public</label>  -->
							<!-- <input class="options" type="radio" name="ques1"  id="ques1_2"value="Private"/>
								<label for="ques1_2" class="option">Private</label>  -->
							<!-- <input class="options" type="radio" name="ques1"  id="ques1_other"value="Other"/>
								<label for="ques1_other" class="option">Others, please specify:</label> -->
							<input type="text" name="ques1_otxt" id="ques1_otxt"  oninput="this.className = ''" style="<?php echo (isset($_POST['ques1']) && $_POST['ques1']=="Other") ?  "display:inline;" : "display:none;" ?>"
								placeholder="Type other sector here..." pattern="[a-zA-Z\s]+" title="Letters only (A-Z) or (a-z)"
								minlength="7" value="<?php echo isset($_POST['ques1_otxt']) ? $_POST['ques1_otxt'] : '' ?>"  oninput="this.className = ''"/>
								
						<!-- QUESTION # 2 -->
						<div class="entry">
							<input type="hidden" name="two" value="2"/>
							<h3 class="ques_title">2. Where is your company/organization located?</h3>
						</div>
						<span oninput="this.className = ''">
							<label class="option">Philippines
								<input class="options" type="radio" name="ques2" value="Philippines" id="ques2_1" <?php if (isset($_POST['ques2']) && $_POST['ques2']=="Philippines") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
							<label class="option">Abroad
								<input class="options" type="radio" name="ques2" value="Abroad" id="ques2_2" <?php if (isset($_POST['ques2']) && $_POST['ques2']=="Abroad") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
						</span>
							

							<!-- <input class="options" type="radio" name="ques2" value="Philippines" id="ques2_1"/>
								<label for="ques2_1" class="option">Philippines</label>
							<input class="options" type="radio" name="ques2" value="Abroad" id="ques2_2"/>
								<label for="ques2_2" class="option">Abroad</label> -->


						<!-- QUESTION # 2.1 -->
						<input type="hidden" name="twopone" value="2"/>
						<div id="q2_1" style="<?php echo (isset($_POST['ques2']) && $_POST['ques2']=="Abroad") ?  "display:block;" : "display:none;" ?>">
							<div class="entry">
								<h3 class="ques_title">2.1. If you answered “Abroad”, please specify the region and sub-region based on the United Nations Geographic Regions:</h3>
							</div>
								
								<span oninput="this.className = ''">
									<label for="region">Region: </label>
									<select name="ques2_1_1" id="ques2_1_1" onchange="make_subreg(this.value);">
										<option value="" selected disabled >
											Select a region
										</option>
										<option value="Africa" <?php echo (isset($_POST['ques2_1_1']) && $_POST['ques2_1_1'] === 'Africa') ? 'selected' : ''; ?>>Africa</option>
										<option value="America" <?php echo (isset($_POST['ques2_1_1']) && $_POST['ques2_1_1'] === 'America') ? 'selected' : ''; ?>>America</option>
										<option value="Antarctica" <?php echo (isset($_POST['ques2_1_1']) && $_POST['ques2_1_1'] === 'Antarctica') ? 'selected' : ''; ?>>Antarctica</option>
										<option value="Asia" <?php echo (isset($_POST['ques2_1_1']) && $_POST['ques2_1_1'] === 'Asia') ? 'selected' : ''; ?>>Asia</option>
										<option value="Europe" <?php echo (isset($_POST['ques2_1_1']) && $_POST['ques2_1_1'] === 'Europe') ? 'selected' : ''; ?>>Europe</option>
										<option value="Oceania" <?php echo (isset($_POST['ques2_1_1']) && $_POST['ques2_1_1'] === 'Oceania') ? 'selected' : ''; ?>>Oceania</option>
									</select>
									<label for="ques2_1_2">Sub region: </label>
									<select name="ques2_1_2" id="ques2_1_2">
										<option value="$_POST['ques2_1_2']" selected >
											<?php echo (isset($_POST['ques2_1_2'])) ? $_POST['ques2_1_2'] : '' ; ?>
										</option>
									</select>
								</span>
						</div>		
					</div>
						
					<div class="Slides">
						<div class="numbertext">2 / 10</div>
						<!-- QUESTION # 3 -->
						<div class="entry">
							<input type="hidden" name="three" value="3"/>
							<h3 class="ques_title">3. Which industry and business does your company/organization belong to?</h3>
						</div>
						<span oninput="this.className = ''">
							<select name="ques3" id="ques3" onchange="other_txt();">
								<option value="" selected disabled >
									Select industry and business
								</option>
								<?php foreach ($ques3_arr as $ques3_el): ?>
									<option value="<?php echo $ques3_el; ?>" <?php echo (isset($_POST['ques3']) && $_POST['ques3'] === $ques3_el) ? 'selected' : ''; ?>>
										<?php echo $ques3_el; ?>
									</option><br>
									<?php endforeach; ?>
								<option value="other" <?php echo (isset($_POST['ques3']) && $_POST['ques3'] === 'other') ? 'selected' : ''; ?>>Others, please specify:</option>
							</select>
						</span>
							
							<input type="text" name="ques3_other" id="ques3_other" style="<?php echo (isset($_POST['ques3']) && $_POST['ques3']=="other") ?  "display:inline;" : "display:none;" ?>"
							placeholder="Type other industry and business here..." pattern="[a-zA-Z\s]+" title="Letters only (A-Z) or (a-z)"
							minlength="7" value="<?php echo isset($_POST['ques3_other']) ? $_POST['ques3_other'] : '' ?>"/>
							
							
						<!-- QUESTION # 4 -->
						<div class="entry">
							<input type="hidden" name="four" value="4"/>
							<h3 class="ques_title">4. What is your position in your company/organization?</h3>
						</div>
						<span oninput="this.className = ''">
							<label class="option">Chief level – General Manager/President/CEO
								<input class="options" type="radio" name="ques4" value="Chief level – General Manager/President/CEO" id="ques4_1" <?php if (isset($_POST['ques4']) && $_POST['ques4']=="Chief level – General Manager/President/CEO") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Supervisory – Director/Managing Director/Supervisor
								<input class="options" type="radio" name="ques4" value="Supervisory – Director/Managing Director/Supervisor" id="ques4_2" <?php if (isset($_POST['ques4']) && $_POST['ques4']=="Supervisory – Director/Managing Director/Supervisor") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Rank and file
								<input class="options" type="radio" name="ques4" value="Rank and file" id="ques4_3" <?php if (isset($_POST['ques4']) && $_POST['ques4']=="Rank and file") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
						</span>
							<!-- <input class="options" type="radio" name="ques4" value="Chief level – General Manager/President/CEO" id="ques4_1"/>
								<label for="ques4_1" class="option">Chief level – General Manager/President/CEO</label>
								<br/>
							<input class="options" type="radio" name="ques4" value="Supervisory – Director/Managing Director/Supervisor" id="ques4_2"/>
								<label for="ques4_2" class="option">Supervisory – Director/Managing Director/Supervisor</label>
								<br/>
							<input class="options" type="radio" name="ques4" value="Rank and file" id="ques4_3"/>
								<label for="ques4_3" class="option">Rank and file</label> -->
					</div>
						
					<div class="Slides">
						<div class="numbertext">3 / 10</div>
						<!-- QUESTION # 5 -->
						<div class="entry">
							<input type="hidden" name="five" value="5"/>
							<h3 class="ques_title">5. How many UP graduates are employed in your company/organization?</h3>
						</div>
						<span oninput="this.className = ''">
							<input type="number" min="0" step="1" name="ques5" id="ques5" placeholder="Type number of UP graduates here..." value="<?php echo isset($_POST['ques5']) ? $_POST['ques5'] : '' ?>"/>
						</span>
						
						
						<!-- QUESTION # 6 -->
						<div class="entry">
							<input type="hidden" name="six" value="6"/>
							<h3 class="ques_title">6. How much do you agree or disagree with this statement: “UP graduates recruited in the last three to five years have the skills to work in my company/organization.”?</h3>
						</div>

						<span oninput="this.className = ''">
							<label class="option">Strongly Disagree
								<input class="options" type="radio" name="ques6" value="Strongly Disagree" id="ques6_1" <?php if (isset($_POST['ques6']) && $_POST['ques6']=="Strongly Disagree") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Disagree
								<input class="options" type="radio" name="ques6" value="Disagree" id="ques6_2" <?php if (isset($_POST['ques6']) && $_POST['ques6']=="Disagree") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Agree
								<input class="options" type="radio" name="ques6" value="Agree" id="ques6_3" <?php if (isset($_POST['ques6']) && $_POST['ques6']=="Agree") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Strongly Agree
								<input class="options" type="radio" name="ques6" value="Strongly Agree" id="ques6_4" <?php if (isset($_POST['ques6']) && $_POST['ques6']=="Strongly Agree") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
						</span>

							<!-- <input class="options" type="radio" name="ques6" value="Strongly Disagree" id="ques6_1"/>
								<label for="ques6_1" class="option">Strongly Disagree</label>
							<input class="options" type="radio" name="ques6" value="Disagree" id="ques6_2"/>
								<label for="ques6_2" class="option">Disagree</label>
							<input class="options" type="radio" name="ques6" value="Agree" id="ques6_3"/>
								<label for="ques6_3" class="option">Agree</label>
							<input class="options" type="radio" name="ques6" value="Strongly Agree" id="ques6_4"/>
								<label for="ques6_4" class="option">Strongly Agree</label> -->
					</div>
					
					<div class="Slides">
						<div class="numbertext">4 / 10</div>
						<!-- QUESTION # 7 -->
						<div class="entry">
							<input type="hidden" name="seven" value="7"/>
							<h3 class="ques_title">7. Rate the importance of each skill when hiring new staff. Kindly select your ratings.</h3>
						</div>
							<table class="e-q7" border="0">
								<tr>
									<th>SKILLS</th>
									<th>Unimportant</th>
									<th>Of Little Importance</th>
									<th>Important</th>
									<th>Very Important</th>
								</tr>
								<?php $i = 0; foreach ($skills_arr as $skill): ?>
								<tr>
									<?php $i++; ?>
									<td style="text-align:left;">
										<?php echo $skill; ?>
									</td>
									<td>
										<label class="skill_option">
											<input class="options" type="radio" name="<?php echo 'ques7_'.$i; ?>" value="<?php echo 'Unimportant';?>" id="<?php echo 'ques7_'.$i; ?>" <?php if (isset($_POST['ques7_'.$i]) && $_POST['ques7_'.$i]=="Unimportant") echo "checked";?>/>
											<span class="skill-checkbttn"></span>
										</label>
										<!-- <input class="options" type="radio" name="<?php #echo 'ques7_'.$i; ?>" value="<?php #echo 'Unimportant';?>" id=""/> -->
									</td>
									<td>
										<label class="skill_option">
											<input class="options" type="radio" name="<?php echo 'ques7_'.$i; ?>" value="<?php echo 'Of Little Importance';?>" id="<?php echo 'ques7_'.$i; ?>" <?php if (isset($_POST['ques7_'.$i]) && $_POST['ques7_'.$i]=="Of Little Importance") echo "checked";?>/>
											<span class="skill-checkbttn"></span>
										</label>
										<!-- <input class="options" type="radio" name="<?php #echo 'ques7_'.$i; ?>" value="<?php #echo 'Of Little Importance';?>" id=""/> -->
									</td>
									<td>
										<label class="skill_option">
											<input class="options" type="radio" name="<?php echo 'ques7_'.$i; ?>" value="<?php echo 'Important';?>" id="<?php echo 'ques7_'.$i; ?>" <?php if (isset($_POST['ques7_'.$i]) && $_POST['ques7_'.$i]=="Important") echo "checked";?>/>
											<span class="skill-checkbttn"></span>
										</label>
										<!-- <input class="options" type="radio" name="<?php# echo 'ques7_'.$i; ?>" value="<?php# echo 'Important';?>" id=""/> -->
									</td>
									<td>
										<label class="skill_option">
											<input class="options" type="radio" name="<?php echo 'ques7_'.$i; ?>" value="<?php echo 'Very Important';?>" id="<?php echo 'ques7_'.$i; ?>" <?php if (isset($_POST['ques7_'.$i]) && $_POST['ques7_'.$i]=="Very Important") echo "checked";?>/>
											<span class="skill-checkbttn"></span>
										</label>
										<!-- <input class="options" type="radio" name="<?php #echo 'ques7_'.$i; ?>" value="<?php #echo 'Very Important';?>" id=""/> -->
									</td>
								</tr>
								<?php endforeach; ?>
							</table>
					</div>
					
					<div class="Slides">
						<div class="numbertext">5 / 10</div>
						<!-- QUESTION # 8 -->
						<div class="entry">
							<input type="hidden" name="eight" value="8"/>
							<h3 class="ques_title">8. Rate your satisfaction on how well each skill is demonstrated by your staff who are UP graduates. Kindly select your ratings.</h3>
						</div>
							<table class="e-q8" border="0">
								<tr>
									<th>SKILLS</th>
									<th>Very Unsatisfied</th>
									<th>Unsatisfied</th>
									<th>Satisfied</th>
									<th>Very Satisfied</th>
								</tr>
								<?php $i = 0; foreach ($skills_arr as $skill): ?>
								<tr>
									<?php $i++; ?>
									<td style="text-align:left;">
										<?php echo $skill; ?>
									</td>
									<td>
										<label class="skill_option">
											<input class="options" type="radio" name="<?php echo 'ques8_'.$i; ?>" value="<?php echo 'Very Unsatisfied';?>" id="" <?php if (isset($_POST['ques8_'.$i]) && $_POST['ques8_'.$i]=="Very Unsatisfied") echo "checked";?>/>
											<span class="skill-checkbttn"></span>
										</label>
										<!-- <input class="options" type="radio" name="<?php# echo 'ques8_'.$i; ?>" value="<?php #echo 'Very Unsatisfied';?>" id=""/> -->
									</td>
									<td>
										<label class="skill_option">
											<input class="options" type="radio" name="<?php echo 'ques8_'.$i; ?>" value="<?php echo 'Unsatisfied';?>" id="" <?php if (isset($_POST['ques8_'.$i]) && $_POST['ques8_'.$i]=="Unsatisfied") echo "checked";?>/>
											<span class="skill-checkbttn"></span>
										</label>
										<!-- <input class="options" type="radio" name="<?php #echo 'ques8_'.$i; ?>" value="<?php #echo 'Unsatisfied';?>" id=""/> -->
									</td>
									<td>
										<label class="skill_option">
											<input class="options" type="radio" name="<?php echo 'ques8_'.$i; ?>" value="<?php echo 'Satisfied';?>" id="" <?php if (isset($_POST['ques8_'.$i]) && $_POST['ques8_'.$i]=="Satisfied") echo "checked";?>/>
											<span class="skill-checkbttn"></span>
										</label>
										<!-- <input class="options" type="radio" name="<?php #echo 'ques8_'.$i; ?>" value="<?php #echo 'Satisfied';?>" id=""/> -->
									</td>
									<td>
										<label class="skill_option">
											<input class="options" type="radio" name="<?php echo 'ques8_'.$i; ?>" value="<?php echo 'Very Satisfied';?>" id="" <?php if (isset($_POST['ques8_'.$i]) && $_POST['ques8_'.$i]=="Very Satisfied") echo "checked";?>/>
											<span class="skill-checkbttn"></span>
										</label>
										<!-- <input class="options" type="radio" name="<?php #echo 'ques8_'.$i; ?>" value="<?php #echo 'Very Satisfied';?>" id=""/> -->
									</td>
								</tr>
								<?php endforeach; ?>
							</table>
					</div>
					
					<div class="Slides">
						<div class="numbertext">6 / 10</div>
						<!-- QUESTION # 9 -->
						<div class="entry">
							<input type="hidden" name="nine" value="9"/>
							<h3 class="ques_title">9. Based on your experience with the staff, how LIKELY are you to hire other graduates of UP?</h3>
						</div>
						<span oninput="this.className = ''">
							<label class="option">Very Unlikely
								<input class="options" type="radio" name="ques9" value="Very Unlikely" id="ques9_1" <?php if (isset($_POST['ques9']) && $_POST['ques9']=="Very Unlikely") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Unlikely
								<input class="options" type="radio" name="ques9" value="Unlikely" id="ques9_2" <?php if (isset($_POST['ques9']) && $_POST['ques9']=="Unlikely") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Likely
								<input class="options" type="radio" name="ques9" value="Likely" id="ques9_3" <?php if (isset($_POST['ques9']) && $_POST['ques9']=="Likely") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Very Likely
								<input class="options" type="radio" name="ques9" value="Very Likely" id="ques9_4" <?php if (isset($_POST['ques9']) && $_POST['ques9']=="Very Likely") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
						</span>
							

							<!-- <input class="options" type="radio" name="ques9" value="Very Unlikely" id="ques9_1"/>
								<label for="ques9_1" class="option">Very Unlikely</label>
							<input class="options" type="radio" name="ques9" value="Unlikely" id="ques9_2"/>
								<label for="ques9_2" class="option">Unlikely</label>
							<input class="options" type="radio" name="ques9" value="Likely" id="ques9_3"/>
								<label for="ques9_3" class="option">Likely</label>
							<input class="options" type="radio" name="ques9" value="Very Likely" id="ques9_4"/>
								<label for="ques9_4" class="option">Very Likely</label> -->
								
								
						<!-- QUESTION # 10 -->		
						<div class="entry">
							<input type="hidden" name="ten" value="10"/>
							<h3 class="ques_title">10. Based on your experience with the staff how likely are you going to keep the UP graduates in your company/organization?</h3>
						</div>
						<span oninput="this.className = ''">
							<label class="option">Very Unlikely
								<input class="options" type="radio" name="ques10" value="Very Unlikely" id="ques10_1" <?php if (isset($_POST['ques10']) && $_POST['ques10']=="Very Unlikely") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Unlikely
								<input class="options" type="radio" name="ques10" value="Unlikely" id="ques10_2" <?php if (isset($_POST['ques10']) && $_POST['ques10']=="Unlikely") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Likely
								<input class="options" type="radio" name="ques10" value="Likely" id="ques10_3" <?php if (isset($_POST['ques10']) && $_POST['ques10']=="Likely") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Very Likely
								<input class="options" type="radio" name="ques10" value="Very Likely" id="ques10_4" <?php if (isset($_POST['ques10']) && $_POST['ques10']=="Very Likely") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
						</span>
							

							<!-- <input class="options" type="radio" name="ques10" value="Very Unlikely" id="ques10_1"/>
								<label for="ques10_1" class="option">Very Unlikely</label>
							<input class="options" type="radio" name="ques10" value="Unlikely" id="ques10_2"/>
								<label for="ques10_2" class="option">Unlikely</label>
							<input class="options" type="radio" name="ques10" value="Likely" id="ques10_3"/>
								<label for="ques10_3" class="option">Likely</label>
							<input class="options" type="radio" name="ques10" value="Very Likely" id="ques10_4"/>
								<label for="ques10_4" class="option">Very Likely</label> -->
					</div>
						
					<div class="Slides">
						<div class="numbertext">7 / 10</div>
						<!-- QUESTION # 11 -->
						<div class="entry">
							<input type="hidden" name="eleven" value="11"/>
							<h3 class="ques_title">11. Rate the importance of each item to the successful performance of the job for which your staff, who are UP graduates, were hired.</h3>
						</div>
						<table class="e-q11" border="0">
							<tr>
								<th>SKILLS</th>
								<th>Unimportant</th>
								<th>Of Little Importance</th>
								<th>Important</th>
								<th>Very Important</th>
							</tr>
							<?php $i = 0; foreach ($dmcs_skills_arr as $skill): ?>
							<tr>
								<?php $i++; ?>
								<td style="text-align:left; width:40%;">
									<?php echo $skill; ?>
								</td>
								<td style="width:10%;">
									<label class="skill_option">
										<input class="options" type="radio" name="<?php echo 'ques11_'.$i; ?>" value="<?php echo 'Unimportant';?>" id="" <?php if (isset($_POST['ques11_'.$i]) && $_POST['ques11_'.$i]=="Unimportant") echo "checked";?>/>
										<span class="skill-checkbttn"></span>
									</label>
									<!-- <input class="options" type="radio" name="<?php #echo 'ques11_'.$i; ?>" value="<?php #echo 'Unimportant';?>" id=""/> -->
								</td>
								<td style="width:10%;">
									<label class="skill_option">
										<input class="options" type="radio" name="<?php echo 'ques11_'.$i; ?>" value="<?php echo 'Of Little Importance';?>" id="" <?php if (isset($_POST['ques11_'.$i]) && $_POST['ques11_'.$i]=="Of Little Importance") echo "checked";?>/>
										<span class="skill-checkbttn"></span>
									</label>
									<!-- <input class="options" type="radio" name="<?php #echo 'ques11_'.$i; ?>" value="<?php #echo 'Of Little Importance';?>" id=""/> -->
								</td>
								<td style="width:10%;">
									<label class="skill_option">
										<input class="options" type="radio" name="<?php echo 'ques11_'.$i; ?>" value="<?php echo 'Important';?>" id="" <?php if (isset($_POST['ques11_'.$i]) && $_POST['ques11_'.$i]=="Important") echo "checked";?>/>
										<span class="skill-checkbttn"></span>
									</label>
									<!-- <input class="options" type="radio" name="<?php #echo 'ques11_'.$i; ?>" value="<?php #echo 'Important';?>" id=""/> -->
								</td style="width:10%;">
								<td style="width:10%;">
									<label class="skill_option">
										<input class="options" type="radio" name="<?php echo 'ques11_'.$i; ?>" value="<?php echo 'Very Important';?>" id="" <?php if (isset($_POST['ques11_'.$i]) && $_POST['ques11_'.$i]=="Very Important") echo "checked";?>/>
										<span class="skill-checkbttn"></span>
									</label>
									<!-- <input class="options" type="radio" name="<?php #echo 'ques11_'.$i; ?>" value="<?php #echo 'Very Important';?>" id=""/> -->
								</td>
							</tr>
							<?php endforeach; ?>
						</table>
					</div>
						
					<div class="Slides">
						<div class="numbertext">8 / 10</div>
						<!-- QUESTION # 12 -->
						<div class="entry">
							<input type="hidden" name="twelve" value="12"/>
							<h3 class="ques_title">12. Rate your satisfaction on how well each item was demonstrated by your hired UP graduates.</h3>
						</div>
						<table class="e-q12" border="0">
							<tr>
								<th>SKILLS</th>
								<th>Very Unsatisfied</th>
								<th>Unsatisfied</th>
								<th>Satisfied</th>
								<th>Very Satisfied</th>
							</tr>
							<?php $i = 0; foreach ($dmcs_skills_arr as $skill): ?>
							<tr>
								<?php $i++; ?>
								<td style="text-align:left;width:40%;">
									<?php echo $skill; ?>
								</td>
								<td style="width:10%;">
									<label class="skill_option">
										<input class="options" type="radio" name="<?php echo 'ques12_'.$i; ?>" value="<?php echo 'Very Unsatisfied';?>" id="" <?php if (isset($_POST['ques12_'.$i]) && $_POST['ques12_'.$i]=="Very Unsatisfied") echo "checked";?>/>
										<span class="skill-checkbttn"></span>
									</label>
									<!-- <input class="options" type="radio" name="<?php #echo 'ques12_'.$i; ?>" value="<?php #echo 'Very Unsatisfied';?>" id=""/> -->
								</td>
								<td style="width:10%;">
									<label class="skill_option">
										<input class="options" type="radio" name="<?php echo 'ques12_'.$i; ?>" value="<?php echo 'Unsatisfied';?>" id="" <?php if (isset($_POST['ques12_'.$i]) && $_POST['ques12_'.$i]=="Unsatisfied") echo "checked";?>/>
										<span class="skill-checkbttn"></span>
									</label>
									<!-- <input class="options" type="radio" name="<?php #echo 'ques12_'.$i; ?>" value="<?php #echo 'Unsatisfied';?>" id=""/> -->
								</td>
								<td style="width:10%;">
									<label class="skill_option">
										<input class="options" type="radio" name="<?php echo 'ques12_'.$i; ?>" value="<?php echo 'Satisfied';?>" id="" <?php if (isset($_POST['ques12_'.$i]) && $_POST['ques12_'.$i]=="Satisfied") echo "checked";?>/>
										<span class="skill-checkbttn"></span>
									</label>
									<!-- <input class="options" type="radio" name="<?php #echo 'ques12_'.$i; ?>" value="<?php #echo 'Satisfied';?>" id=""/> -->
								</td>
								<td style="width:10%;">
									<label class="skill_option">
										<input class="options" type="radio" name="<?php echo 'ques12_'.$i; ?>" value="<?php echo 'Very Satisfied';?>" id="" <?php if (isset($_POST['ques12_'.$i]) && $_POST['ques12_'.$i]=="Very Satisfied") echo "checked";?>/>
										<span class="skill-checkbttn"></span>
									</label>
									<!-- <input class="options" type="radio" name="<?php #echo 'ques12_'.$i; ?>" value="<?php #echo 'Very Satisfied';?>" id=""/> -->
								</td>
							<tr>
							<?php endforeach; ?>
						</table>
					</div>
					
					<div class="Slides">
						<div class="numbertext">9 / 10</div>
						<!-- QUESTION # 13 -->
						<div class="entry">
							<input type="hidden" name="thirteen" value="13"/>
							<h3 class="ques_title">13. Which actions should UP take in order to improve the skill and competency set of its graduates? Check all that apply.</h3>
						</div>
						<span oninput="this.className = ''">
							<label class="check-option">Design courses that are more relevant to the needs of employers
								<input type="checkbox" id="ques13_1" name="ques13[]" value="Design courses that are more relevant to the needs of employers" <?php if (isset($_POST['ques13']) && in_array("Design courses that are more relevant to the needs of employers", $_POST['ques13'])) echo "checked='checked'";?>/>
								<span class="checkmark"></span>
							</label><br>
							<label class="check-option">Include practical experience as part of the academic programs
								<input type="checkbox" id="ques13_2" name="ques13[]" value="Include practical experience as part of the academic programs" <?php if (isset($_POST['ques13']) && in_array("Include practical experience as part of the academic programs", $_POST['ques13'])) echo "checked='checked'";?>/>
								<span class="checkmark"></span>
							</label><br>
							<label class="check-option">Include sector specific job placements as an integral part of the degree program
								<input type="checkbox" id="ques13_3" name="ques13[]" value="Include sector specific job placements as an integral part of the degree program" <?php if (isset($_POST['ques13']) && in_array("Include sector specific job placements as an integral part of the degree program", $_POST['ques13'])) echo "checked='checked'";?>/>
								<span class="checkmark"></span>
							</label><br>
							<label class="check-option">Provide better post-graduation support (facilitate relations between graduates and companies/organizations)
								<input type="checkbox" id="ques13_4" name="ques13[]" value="Provide better post-graduation support (facilitate relations between graduates and companies/organizations)" <?php if (isset($_POST['ques13']) && in_array("Provide better post-graduation support (facilitate relations between graduates and companies/organizations)", $_POST['ques13'])) echo "checked='checked'";?>/>
								<span class="checkmark"></span>
							</label><br>
							<label class="check-option">Others, please specify:
								<input type="checkbox" id="ques13_other" name="ques13[]" value="other" onclick="show_hide(this);" <?php if (isset($_POST['ques13']) && in_array("other", $_POST['ques13'])) echo "checked='checked'";?>/>
								<span class="checkmark"></span>
							</label>
						</span>
							

							<!-- <input type="checkbox" id="ques13_1" name="ques13[]" value="Design courses that are more relevant to the needs of employers"/>
								<label>Design courses that are more relevant to the needs of employers</label>
								<br>
							<input type="checkbox" id="ques13_2" name="ques13[]" value="Include practical experience as part of the academic programs"/>
								<label>Include practical experience as part of the academic programs</label>
								<br>
							<input type="checkbox" id="ques13_3" name="ques13[]" value="Include sector specific job placements as an integral part of the degree program"/>
								<label>Include sector specific job placements as an integral part of the degree program</label>
								<br>
							<input type="checkbox" id="ques13_4" name="ques13[]" value="Provide better post-graduation support (facilitate relations between graduates and companies/organizations)"/>
								<label>Provide better post-graduation support (facilitate relations between graduates and companies/organizations)</label>
								<br>
							<input type="checkbox" id="ques13_other" name="ques13[]" value="other" onclick="show_hide(this);"/>
								<label for="ques13_other">Others, please specify:</label> -->
								<input type="text" name="ques13_otxt" id="ques13_otxt" oninput="this.className = ''" style="<?php echo (isset($_POST['ques13']) && in_array("other", $_POST['ques13'])) ?  "display:inline;" : "display:none;" ?>"
								placeholder="Type other actions here..." pattern="[a-zA-Z\s]+" title="Letters only (A-Z) or (a-z)"
								minlength="7" value="<?php echo isset($_POST['ques13_otxt']) ? $_POST['ques13_otxt'] : '' ?>"/>
								
								
								
						<!-- QUESTION # 14 -->
						<div class="entry">
							<input type="hidden" name="fourteen" value="14"/>
							<h3 class="ques_title">14. How important is UP cooperation for your company/organization? Please rate the importance of cooperating with UP in the design of curricula and study programs.</h3>
						</div>
						<span oninput="this.className = ''">
							<label class="option">Unimportant
								<input class="options" type="radio" name="ques14" value="Unimportant" id="ques14_1" <?php if (isset($_POST['ques14']) && $_POST['ques14']=="Unimportant") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Of Little Importance
								<input class="options" type="radio" name="ques14" value="Of Little Importance" id="ques14_2" <?php if (isset($_POST['ques14']) && $_POST['ques14']=="Of Little Importance") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Moderately part Important
								<input class="options" type="radio" name="ques14" value="Moderately part Important" id="ques14_3" <?php if (isset($_POST['ques14']) && $_POST['ques14']=="Moderately part Important") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label><br>
							<label class="option">Important
								<input class="options" type="radio" name="ques14" value="Important" id="ques14_4" <?php if (isset($_POST['ques14']) && $_POST['ques14']=="Important") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
						</span>

							

							<!-- <input class="options" type="radio" name="ques14" value="Unimportant" id="ques14_1"/>
								<label for="ques14_1" class="option">Unimportant</label>
							<input class="options" type="radio" name="ques14" value="Of Little Importance" id="ques14_2"/>
								<label for="ques14_2" class="option">Of Little Importance</label>
							<input class="options" type="radio" name="ques14" value="Moderately part Important" id="ques14_3"/>
								<label for="ques14_3" class="option">Moderately part Important</label>
							<input class="options" type="radio" name="ques14" value="Important" id="ques14_4"/>
								<label for="ques14_4" class="option">Important</label> -->
					</div>
					
					<div class="Slides">
						<div class="numbertext">10 / 10</div>
						<!-- QUESTION # 15 -->
						<div class="entry">
							<input type="hidden" name="fifteen" value="15"/>
							<h3 class="ques_title">15. Do you have any other comments or suggestions as to how UP can improve the skill and competency set of its graduates?</h3>
						</div>
						<span oninput="this.className = ''">
							<label class="option">Yes
								<input type="radio" name="ques15" class="options" id="ques15_y" onclick="$('#ques15_txt').show();" value="Yes" <?php if (isset($_POST['ques15']) && $_POST['ques15']=="Yes") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
							<label class="option">No
								<input type="radio" name="ques15" class="options" id="ques15_n" onclick="$('#ques15_txt').hide();" value="No" <?php if (isset($_POST['ques15']) && $_POST['ques15']=="No") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
						</span>
							

							<!-- <input type="radio" name="ques15" class="options" id="ques15_y" onclick="$('#ques15_txt').show();" value="Yes"/>
								<label class="option" for="ques15_y">Yes</label>
							<input type="radio" name="ques15" class="options" id="ques15_n" onclick="$('#ques15_txt').hide();" value="No"/>
								<label class="option" for="ques15_n">No</label> -->
							<br>
						<div id="ques15_txt" style="<?php echo (isset($_POST['ques15']) && $_POST['ques15']=="Yes") ?  "display:inline;" : "display:none;" ?>">
							<textarea rows="4" cols="50" style="resize: none;" name="ques15_ytxt" 
							placeholder="Type your comments or suggestions here... (Use letters only)" 
							onkeyup="this.value = this.value.replace(/[^\w .]/g, '')">
								<?php echo isset($_POST['ques15_ytxt']) ? htmlspecialchars($_POST['ques15_ytxt']) : ''; ?>
							</textarea> <!-- can still accept underscore and numbers -->
						</div>


						<!-- QUESTION # 16 -->
						<div class="entry">
							<input type="hidden" name="sixteen" value="16"/>
							<h3 class="ques_title">16. Do you have any negative feedback about the graduates?</h3>
						</div>
						<span oninput="this.className = ''">
							<label class="option">Yes
								<input type="radio" name="ques16" class="options" id="ques16_y" onclick="$('#ques16_txt').show();" value="Yes" <?php if (isset($_POST['ques16']) && $_POST['ques16']=="Yes") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
							<label class="option">No
								<input type="radio" name="ques16" class="options" id="ques16_n" onclick="$('#ques16_txt').hide();" value="No" <?php if (isset($_POST['ques16']) && $_POST['ques16']=="No") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
						</span>
							

							<!-- <input type="radio" name="ques16" class="options" id="ques16_y" onclick="$('#ques16_txt').show();" value="Yes"/>
								<label class="option" for="ques16_y">Yes</label>
							<input type="radio" name="ques16" class="options" id="ques16_n" onclick="$('#ques16_txt').hide();" value="No"/>
								<label class="option" for="ques16_n">No</label> -->
							<br>
						<div id="ques16_txt" style="<?php echo (isset($_POST['ques16']) && $_POST['ques16']=="Yes") ?  "display:inline;" : "display:none;" ?>">
							<textarea rows="4" cols="50" style="resize: none;" name="ques16_ytxt" 
								placeholder="Type your negative feedback here... (Use letters only)" 
								onkeyup="this.value = this.value.replace(/[^\w .]/g, '')">
									<?php echo isset($_POST['ques16_ytxt']) ? htmlspecialchars($_POST['ques16_ytxt']) : ''; ?>
								</textarea> <!-- can still accept underscore and numbers -->
						</div>


						<!-- QUESTION # 17 -->
						<div class="entry">
							<input type="hidden" name="seventeen" value="17"/>
							<h3 class="ques_title">17. Are specific strengths of the graduates appreciated? If yes, what are these strengths?</h3>
						</div>
						<span oninput="this.className = ''">
							<label class="option">Yes
								<input type="radio" name="ques17" class="options" id="ques17_y" onclick="$('#ques17_txt').show();" value="Yes" <?php if (isset($_POST['ques17']) && $_POST['ques17']=="Yes") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
							<label class="option">No
								<input type="radio" name="ques17" class="options" id="ques17_n" onclick="$('#ques17_txt').hide();" value="No" <?php if (isset($_POST['ques17']) && $_POST['ques17']=="No") echo "checked";?>/>
								<span class="checkbttn"></span>
							</label>
						</span>
							

							<!-- <input type="radio" name="ques17" class="options" id="ques17_y" onclick="$('#ques17_txt').show();" value="Yes"/>
								<label class="option" for="ques17_y">Yes</label>
							<input type="radio" name="ques17" class="options" id="ques17_n" onclick="$('#ques17_txt').hide();" value="No"/>
								<label class="option" for="ques17_n">No</label> -->
							<br>
						<div id="ques17_txt" style="<?php echo (isset($_POST['ques17']) && $_POST['ques17']=="Yes") ?  "display:inline;" : "display:none;" ?>">
							<textarea rows="4" cols="50" style="resize: none;" name="ques17_ytxt"
								placeholder="Type strengths you appreciate here... (Use letters only)" 
								onkeyup="this.value = this.value.replace(/[^\w .]/g, '')">
									<?php echo isset($_POST['ques17_ytxt']) ? htmlspecialchars($_POST['ques17_ytxt']) : ''; ?>
								</textarea> <!-- can still accept underscore and numbers -->
						</div>

						<div class="submit-survey">
							<input type="button" id="reviewBtn" name="review-emp" value="Submit Answers" onclick="validateReview()" />
							<!-- <input type="submit" name="submit-emp" value="Submit"/> -->
						</div>		
					</div>
					
					<div class="previous" onclick="plusSlides(-1)" id="prevBtn">
						<div class="prev" id="prevBtn">
							&#10094;
						</div>
					</div>
					<div class="next" onclick="plusSlides(1)" id="nextBtn">
						<div class="nxt" id="nextBtn">
							&#10095;
						</div>
					</div>
				</div>

				<div id="reviewModal" class="modal">
					<div class="modal-content">
						<div class="modal-header">
							<h4 style="color:#840038; text-transform:uppercase;">Are you sure that you want to submit?</h4>
						</div>
						<div class="modal-body">
							<p>You cannot change your answers once you have submitted.</p><br>
						<p style="font-size:12pt;">(Click outside of the prompt to cancel.)</p>						
						</div>
						<div class="modal-footer">		
							<div class="submit-survey">
								<input type="submit" name="submit-emp" style="width:9rem; height: 3rem;" value="Continue"/>
							</div>
						</div>
					</div>
				</div>
			
			
				<!-- <?php //echo $_POST['ques2_1_2']; ?> -->
				<!-- submit button -->
				<!-- <input type="submit" name="submit-emp" value="Submit"/> -->
				<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>"/>
				<input type="hidden" name="submitted" value="1"/> 
				
		
			</form>	
				
		</div>
	</section>
	<!-- for footer/ contact details -->
	<?php include('footer.php'); ?>
	
	<script type="text/javascript" src="js/review.js"></script>
	<script type="text/javascript" src="js/logout.js"></script>
</body>
</html>
						
