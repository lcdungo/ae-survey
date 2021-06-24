<?php

session_start();

require ('config/connection.php');

$ADMIN_ROLE_ID = 0;
$ALUMNI_ROLE_ID = 1;
$EMPLOYER_ROLE_ID = 2;
$ALUM_EMP_ROLE_ID = 3;

$errors = array();
$error;
 
$ques2_arr = array (
	"Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "	Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria",
	"Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan",
	"Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Côte d'Ivoire", "Cabo Verde",
	"Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)",
	"Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia (Czech Republic)", "Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic",
	"Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini (fmr. Swaziland)", "Ethiopia", "Fiji", "Finland",
	"France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea",
	"Guinea-Bissau", "Guyana", "Haiti", "Holy See", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran",
	"Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati",
	"Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania",
	"Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius",
	"Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar (formerly Burma)", "Namibia",
	"Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway",
	"Oman", "Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland",
	"Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino",
	"Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands",
	"Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland",
	"Syria", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
	"Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu",
	"Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
);

$ques5c_arr = array(
	"Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use",
	"Activities of International Organizations and Bodies",
	"Administrative and Support Service Activities", "Agriculture, Forestry and Fishing", "Arts, Entertainment and Recreation",
	"Construction", "Education", "Electricity, Gas, Steam and Air Conditioning Supply", "Finance, Banks, and Insurance", 
	"Hotel/Accommodation, and Restaurant and Food Service", "Human Health and Social Work Activities", "Information Technology", 
	"Manufacturing", "Media and Communication", "Mining and Quarrying", "Other Service Activities", 
	"Professional, Scientific and Technical Activities", "Public Administration and Defense; Compulsory Social Security", 
	"Real Estate Activities", "Transportation and Storage", "Water Supply; Sewerage, Waste Management and Remediation Activities", 
	"Wholesale and Retail Trade"
);

$ques8_arr = array (
	"Armed Forces Occupations", "Clerical Support Workers", 
	"Craft and Related Trade Workers", "Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)", 
	"Managers", "Plant and Machine Operators, and Assemblers", "Professionals", "Service and Sales Workers",
	"Skilled Agricultural, Forestry and Fishery Workers", "Technicians and Associate Professionals"
);

$ques18_arr = array(
	"Possess the skills and mindset to improve human life", 
	"Commit to the freedom and welfare of all",
	"Demonstrate mastery of knowledge in your specific discipline",
	"Possess breadth of mind",
	"Possess strength of character",
	"Possess generosity of spirit",
	"Inclusively engage with society and the world at large",
	"Be mindful of the needs and capabilities of people",
	"Be sensitive to the challenges and opportunities of national development and global change",
	"Think critically",
	"Demonstrate discernment"
);

// ALUMNI SURVEY

// use $_POST['<name>'] to get info from survey form
// if user clicks submit button in alum_survey
if (isset($_POST['submit-alum']) && $_POST['submitted'] == '1') {
	$id = mysqli_real_escape_string($db_conn, $_POST['user_id']);

	$user_check_query = "SELECT * FROM alum_survey WHERE user_id='$id' LIMIT 1";
  	$result = mysqli_query($db_conn, $user_check_query);
  	$user = mysqli_fetch_assoc($result);

 	// if user already answered the survey
	if($user){ 
	    if ($user['user_id'] == $id) {
		    $errors['user'] = "Feedback from user already exists";
		    $error = true;
		    $user_exist = true;
	    }
	}else {
		$error = false;
		$user_exist = false;
	} 
	// end of else user does not exist
	
	// variables for each question
	
	if (isset($_POST['ques1'])) {
		$one = $_POST['ques1'];
	}
	if (isset($_POST['ques2'])) {
		$two = $_POST['ques2'];
	}
	if (isset($_POST['ques3'])) { 
		$three = $_POST['ques3'];
	}
	if (isset($_POST['ques4'])) {
		$four = $_POST['ques4'];
	}
	if (isset($_POST['ques5'])) {
		$five = $_POST['ques5'];
		if ($five == 'Yes' && isset($_POST['ques5_1'])) {
			$five_a = $_POST['ques5_1'];
			if ($five_a == 'Full time (40 hours/week)') {
				$five_c = $_POST['ques5c'];
				if ($five_c == 'other') {
				$fivec_other = $_POST['ques5c_other'];
				}
			}
			$five_a = $_POST['ques5_1'];
			if ($five_a == 'Part time)') {
				$five_c = $_POST['ques5c'];
				if ($five_c == 'other') {
				$fivec_other = $_POST['ques5c_other'];
				}
			}
			$five_a = $_POST['ques5_1'];
			if ($five_a == 'Self-employed') {
				$five_c = $_POST['ques5c'];
				if ($five_c == 'other') {
				$fivec_other = $_POST['ques5c_other'];
				}
			}
		}
		else if ($five == 'No' && isset($_POST['ques5_2'])){
			$five_b = $_POST['ques5_2'];
		}	
	}
	if (isset($_POST['ques6'])) {
		$six = $_POST['ques6'];
		if ($six == 'Associate’s degree') {
			$sixacademicfield = $_POST['ques6_acadfield'];
		} 
		if ($six == 'Bachelor’s degree') {
			$sixacademicfield = $_POST['ques6_acadfield'];
		}
		if ($six == 'Master’s degree') {
			$sixacademicfield = $_POST['ques6_acadfield'];
		}
		if ($six == 'Doctoral degree') {
			$sixacademicfield = $_POST['ques6_acadfield'];
		}
		else if ($six == 'Other'){
			$sixothers = $_POST['ques6_others'];
		}	
	}
	if (isset($_POST['ques7'])) {
		$seven = $_POST['ques7'];
		if ($seven == 'Associate’s degree') {
			$sevenacademicfield = $_POST['ques7_acadfield'];
		} 
		if ($seven == 'Bachelor’s degree') {
			$sevenacademicfield = $_POST['ques7_acadfield'];
		}
		if ($seven == 'Master’s degree') {
			$sevenacademicfield = $_POST['ques7_acadfield'];
		}
		if ($seven == 'Doctoral degree') {
			$sevenacademicfield = $_POST['ques7_acadfield'];
		}
		else if ($seven == 'Other'){
			$sevenothers = $_POST['ques7_others'];
		}	
	}
	if (isset($_POST['ques8'])) {
		$eight = $_POST['ques8'];
	}
	if (isset($_POST['ques9'])) {
		$nine = $_POST['ques9'];
	}
	//Ten Under construction
	if (isset($_POST['jobduties'])) {
		$jobduties = $_POST['jobduties'];
	}
	if (isset($_POST['percentage'])) {
		$percentage = $_POST['percentage'];	
	}
	
	//End Under construction
	if (isset($_POST['ques11'])) {
		$eleven = $_POST['ques11'];
		if ($eleven == 'Yes') {
			$eleven_a = $_POST['ques11_1'];
		}
	}
	if (isset($_POST['ques12'])) {
		$twelve = $_POST['ques12'];
		if ($twelve == 'No experience') {
			$twelve_a = $_POST['ques12_1'];
		} else if ($twelve == 'Less than one (1) year') {
			$twelve_a = $_POST['ques12_1'];
		} else if ($twelve == 'One (1) to three (3) years') {
			$twelve_a = $_POST['ques12_1'];
		} else if ($twelve == 'Three (3) to six (6) years') {
			$twelve_a = $_POST['ques12_1'];
		} else if ($twelve == 'More than six (6+) years') {
			$twelve_a = $_POST['ques12_1'];
		}
	}

	if (isset($_POST['ques13'])) {
		$thirteen = $_POST['ques13'];
	}
	if (isset($_POST['ques14'])) {
		$fourteen = $_POST['ques14'];
	}
	if (isset($_POST['ques15'])) {
		$fifteen = $_POST['ques15'];
	}
	if (isset($_POST['ques16'])) {
		$sixteen = $_POST['ques16'];
	}
	if (isset($_POST['ques17'])) {
		$seventeen = $_POST['ques17'];
	}
	if (isset($_POST['ques18_1'])) {
		$eighteen_a = $_POST['ques18_1'];
	}
	if (isset($_POST['ques18_2'])) {
		$eighteen_b = $_POST['ques18_2'];
	}
	if (isset($_POST['ques18_3'])) {
		$eighteen_c = $_POST['ques18_3'];
	}
	if (isset($_POST['ques18_4'])) {
		$eighteen_d = $_POST['ques18_4'];
	}
	if (isset($_POST['ques18_5'])) {
		$eighteen_e = $_POST['ques18_5'];
	}
	if (isset($_POST['ques18_6'])) {
		$eighteen_f = $_POST['ques18_6'];
	}
	if (isset($_POST['ques18_7'])) {
		$eighteen_g = $_POST['ques18_7'];
	}
	if (isset($_POST['ques18_8'])) {
		$eighteen_h = $_POST['ques18_8'];
	}
	if (isset($_POST['ques18_9'])) {
		$eighteen_i = $_POST['ques18_9'];
	}
	if (isset($_POST['ques18_10'])) {
		$eighteen_j = $_POST['ques18_10'];
	}
	if (isset($_POST['ques18_11'])) {
		$eighteen_k = $_POST['ques18_11'];
	}
	if (isset($_POST['ques19'])) {
		$nineteen = $_POST['ques19'];
		if ($nineteen == 'Yes') {
			$nineteen_txt = $_POST['ques19_ytxt'];
		}
	} 
	
	
	
	// VALIDATION / ERROR HANDLING

	// ERROR: required fields are empty or only white spaces

	if (empty($one) && $user_exist == false) {
		$errors['es_q1'] = "Need to answer your sex. Field cannot be empty.";
		$error = true;
	}
	if (empty($two) && $user_exist == false) {
		$errors['es_q2'] = "Need to answer the country. Field cannot be empty.";
		$error = true;
	}	
	if (empty($three) && $user_exist == false) {
		$errors['es_q3'] = "Need to answer your satisfaction. Field cannot be empty.";
		$error = true;
	}
	if (empty($five) && $user_exist == false) {
		$errors['es_q5'] = "Need to answer your employment status. Field cannot be empty.";
		$error = true;
	}
		if (isset($_POST['ques5_1']) && $five == 'Yes' && empty($five_a)  && $user_exist == false) {
			$errors['es_q5_1'] = "Need to answer characterization of employment. Field cannot be empty.";
			$error = true;
		}
		if (isset($_POST['ques5_2']) && $five == 'No' && empty($five_b) && $user_exist == false) {
			$errors['es_q5_2'] = "Need to answer if you're looking for employment. Field cannot be empty.";
			$error = true;
		}
		if (isset($_POST['ques5c']) && $five == 'Yes' && empty($five_c) && $user_exist == false) {
			$errors['es_q5_3'] = "Need to answer the industry. Field cannot be empty.";
			$error = true;
		}
			if (isset($_POST['ques5c_other']) && $_POST['ques5c_other'] == 'other' && (empty($fivec_other) || strlen(trim($fivec_other)) <= 0) && $user_exist == false) {
				$errors['es_q5c_other'] = "Need to answer the industry. 'Others' field cannot be empty.";
				$error = true; 
			}	
	if (isset($_POST['ques4']) && $five == 'Yes' && empty($four) && $user_exist == false) {
		$errors['es_q4'] = "Need to answer how long since you got your first job after graduation. Field cannot be empty.";
		$error = true;
	}		
	if (isset($_POST['ques6']) && $five == 'Yes' && empty($six) && $user_exist == false) {
		$errors['es_q6'] = "Need to answer minimum level of education. Field cannot be empty.";
		$error = true;
	}
		if (isset($_POST['ques6']) && $six == 'Associate’s degree'
		&& (empty($sixacademicfield) || strlen(trim($sixacademicfield)) <= 0) && $user_exist == false) {
				$errors['es_q6'] = "Need to answer minimum level of education. Field cannot be empty.";
				$error = true;
			}	
		if (isset($_POST['ques6']) && $six == 'Bachelor’s degree'
		&& (empty($sixacademicfield) || strlen(trim($sixacademicfield)) <= 0) && $user_exist == false) {
				$errors['es_q6'] = "Need to answer minimum level of education. Field cannot be empty.";
				$error = true;
			}
		if (isset($_POST['ques6']) && $six == 'Master’s degree'
		&& (empty($sixacademicfield) || strlen(trim($sixacademicfield)) <= 0) && $user_exist == false) {
				$errors['es_q6'] = "Need to answer minimum level of education. Field cannot be empty.";
				$error = true;
			}
		if (isset($_POST['ques6']) && $six == 'Doctoral degree'
		&& (empty($sixacademicfield) || strlen(trim($sixacademicfield)) <= 0) && $user_exist == false) {
				$errors['es_q6'] = "Need to answer minimum level of education. Field cannot be empty.";
				$error = true;
			}
		if (isset($_POST['ques6']) && $six == 'Other'
		&& (empty($sixothers) || strlen(trim($sixothers)) <= 0) && $user_exist == false) {
				$errors['es_q6'] = "Need to answer minimum level of education. Field cannot be empty.";
				$error = true;
			}
		if (isset($_POST['ques7']) && $five == 'Yes' && empty($seven) && $user_exist == false) {
		$errors['es_q7'] = "Need to answer preferred level of education. Field cannot be empty.";
		$error = true;
	}
		if (isset($_POST['ques7']) && $seven == 'Associate’s degree'
		&& (empty($sevenacademicfield) || strlen(trim($sevenacademicfield)) <= 0) && $user_exist == false) {
				$errors['es_q7'] = "Need to answer preferred level of education. Field cannot be empty.";
				$error = true;
			}	
		if (isset($_POST['ques7']) && $seven == 'Bachelor’s degree'
		&& (empty($sevenacademicfield) || strlen(trim($sevenacademicfield)) <= 0) && $user_exist == false) {
				$errors['es_q7'] = "Need to answer preferred level of education. Field cannot be empty.";
				$error = true;
			}
		if (isset($_POST['ques7']) && $seven == 'Master’s degree'
		&& (empty($sevenacademicfield) || strlen(trim($sevenacademicfield)) <= 0) && $user_exist == false) {
				$errors['es_q7'] = "Need to answer preferred level of education. Field cannot be empty.";
				$error = true;
			}
		if (isset($_POST['ques7']) && $seven == 'Doctoral degree'
		&& (empty($sevenacademicfield) || strlen(trim($sevenacademicfield)) <= 0) && $user_exist == false) {
				$errors['es_q7'] = "Need to answer preferred level of education. Field cannot be empty.";
				$error = true;
			}
		if (isset($_POST['ques7']) && $seven == 'Other'
		&& (empty($sevenothers) || strlen(trim($sevenothers)) <= 0) && $user_exist == false) {
				$errors['es_q7'] = "Need to answer preferred level of education. Field cannot be empty.";
				$error = true;
			}
		
		if (isset($_POST['ques8']) && $five == 'Yes' && $five == 'No' && empty($eight) && $user_exist == false) {
		$errors['es_q8'] = "Need to answer principal occupation category. Field cannot be empty.";
		$error = true;
	}
		if (isset($_POST['ques9']) && $five == 'Yes' && empty($nine) && $user_exist == false) {
		$errors['es_q9'] = "Need to answer relation to the course. Field cannot be empty.";
		$error = true;
	} 
	//Ten

	if (isset($_POST['jobduties']) && $five == 'Yes' && empty($jobduties) && $user_exist == false) {
		$errors['es_q10'] = "Need to answer major job duties. Field cannot be empty.";
		$error = true;
	} 
	if (isset($_POST['percentage']) && $five == 'Yes' && empty($percentage) && $user_exist == false) {
		$errors['es_q10'] = "Need to answer percentage of time. Field cannot be empty.";
		$error = true;
	} 
	

	if (isset($_POST['ques11']) && $five == 'Yes'  && $five == 'No' && empty($eleven) && $user_exist == false) {
		$errors['es_q11'] = "Need to answer if you're a paid volunteer. Field cannot be empty.";
		$error = true;
	}
		if (isset($_POST['ques11']) && $eleven == 'Yes' && empty($eleven_a) && $user_exist == false) {
		$errors['es_q11_1'] = "Need to answer characterization of volunteer work. Field cannot be empty.";
		$error = true;
	}
		if (isset($_POST['ques12']) && $five == 'Yes' && empty($twelve) && $user_exist == false) {
			$errors['es_q12'] = "Need to answer minimum total number of years of experience. Field cannot be empty.";
			$error = true;
	}
		if (isset($_POST['ques12']) && $twelve == 'No experience'
		&& (empty($twelve_a) || strlen(trim($twelve_a)) <= 0) && $user_exist == false) {
			$errors['es_q12_1'] = "Need to answer minimum total number of years of experience. Field cannot be empty.";
			$error = true;
		}
		if (isset($_POST['ques12']) && $twelve == 'Less than one (1) year'
		&& (empty($twelve_a) || strlen(trim($twelve_a)) <= 0) && $user_exist == false) {
			$errors['es_q12_1'] = "Need to answer minimum total number of years of experience. Field cannot be empty.";
			$error = true;
		}
		if (isset($_POST['ques12']) && $twelve == 'One (1) to three (3) years'
		&& (empty($twelve_a) || strlen(trim($twelve_a)) <= 0) && $user_exist == false) {
			$errors['es_q12_1'] = "Need to answer minimum total number of years of experience. Field cannot be empty.";
			$error = true;
		}
		if (isset($_POST['ques12']) && $twelve == 'Three (3) to six (6) years'
		&& (empty($twelve_a) || strlen(trim($twelve_a)) <= 0) && $user_exist == false) {
			$errors['es_q12_1'] = "Need to answer minimum total number of years of experience. Field cannot be empty.";
			$error = true;
		}
		if (isset($_POST['ques12']) && $twelve == 'More than six (6+) years'
		&& (empty($twelve_a) || strlen(trim($twelve_a)) <= 0) && $user_exist == false) {
			$errors['es_q12_1'] = "Need to answer minimum total number of years of experience. Field cannot be empty.";
			$error = true;
		}
		
		if (isset($_POST['ques13']) && $five == 'Yes' &&  $five == 'No' && empty($thirteen) && $user_exist == false) {
		$errors['es_q13'] = "Need to answer UP preparation. Field cannot be empty.";
		$error = true;
	}
		if (isset($_POST['ques14']) && $five == 'Yes' && empty($fourteen) && $user_exist == false) {
		$errors['es_q14'] = "Need to answer current position status. Field cannot be empty.";
		$error = true;
	}
		if (isset($_POST['ques15']) && $five == 'Yes' && empty($fifteen) && $user_exist == false) {
		$errors['es_q15'] = "Need to answer supervising and managing the work of others. Field cannot be empty.";
		$error = true;
	}
		if (isset($_POST['ques16']) && $five == 'Yes' && empty($sixteen) && $user_exist == false) {
		$errors['es_q16'] = "Need to answer managerial responsibility. Field cannot be empty.";
		$error = true;
	}
		if (isset($_POST['ques17']) && $five == 'Yes' && $five == 'No' && empty($seventeen) && $user_exist == false) {
		$errors['es_q17'] = "Need to answer career satisfaction. Field cannot be empty.";
		$error = true;
	}
	if (isset($_POST['ques18']) && $five == 'Yes' &&  $five == 'No' && empty($eighteen_a) || empty($eighteen_b) || empty($eighteen_c) ||
		empty($eighteen_d) || empty($eighteen_e) || empty($eighteen_f) ||
		empty($eighteen_g) || empty($eighteen_h) || empty($eighteen_i) ||
		empty($eighteen_j) || empty($eighteen_k)  && $user_exist == false) {
		$errors['es_q18'] = "There are item/s in the undergraduate experience section that were not answered.";
		$error = true;
	}
	if (isset($_POST['ques19']) && $five == 'Yes' && $five == 'No' && empty($nineteen) && $user_exist == false) {
		$errors['es_q19'] = "Need to answer feedback elaboration. Field cannot be empty.";
		$error = true;
	}
	if (isset($_POST['ques19']) && $nineteen == 'Yes' && (empty($nineteen_txt) || strlen(trim($nineteen_txt)) <= 0) && $user_exist == false) {
		$errors['es_q19'] = "Need to answer feedback elaboration. 'Yes' field cannot be empty.";
		$error = true;
	}	
	
	
	// if there are no errors store answers to db
	if ($error == false) {
		// QUESTION NUMBER 1
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['one']);
		$one = mysqli_real_escape_string($db_conn, $_POST['ques1']);

		
		// store to db (alum_survey_q1 table)
		$sql = "INSERT INTO alum_survey_q1 (user_id, answer_body, date_response) VALUES ('$id', '$one', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 2 
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['two']);
		$two = mysqli_real_escape_string($db_conn, $_POST['ques2']);

		
		// store to db (alum_survey_q2 table)
		$sql = "INSERT INTO alum_survey_q2 (user_id, answer_body, date_response) VALUES ('$id', '$two', now())";
	    mysqli_query($db_conn, $sql);
	
		// QUESTION NUMBER 3
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['three']);
		$three = mysqli_real_escape_string($db_conn, $_POST['ques3']);

		
		// store to db (alum_survey_q3 table)
		$sql = "INSERT INTO alum_survey_q3 (user_id, answer_body, date_response) VALUES ('$id', '$three', now())";
	    mysqli_query($db_conn, $sql);
		
		
		
		// QUESTION NUMBER 5 
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['five']);
		$five = mysqli_real_escape_string($db_conn, $_POST['ques5']);


		
		//Yes db five
				if ($five == 'Yes') {
							$five_a = mysqli_real_escape_string($db_conn, $_POST['ques5_1']);
							$five_c = mysqli_real_escape_string($db_conn, $_POST['ques5c']);
							$fivec_other = mysqli_real_escape_string($db_conn, $_POST['ques5c_other']);
				if ($five_a == 'Full time (40 hours/week)') {
						if ($five_c == 'other'){						
							$sql = "INSERT INTO alum_survey_q5 (user_id, Employed, Characterized, Industry, Other_Ans, Applying, date_response) VALUES ('$id', '$five', '$five_a', '$five_c', '$fivec_other', 'NA', now())";
							mysqli_query($db_conn, $sql);
						} else {
							$sql = "INSERT INTO alum_survey_q5 (user_id, Employed, Characterized, Industry, Other_Ans, Applying, date_response) VALUES ('$id', '$five', '$five_a', '$five_c', '$fivec_other', 'NA', now())";
							mysqli_query($db_conn, $sql);
						}
				} else if ($five_a == 'Part time') {
						if ($five_c == 'other'){						
							$sql = "INSERT INTO alum_survey_q5 (user_id, Employed, Characterized, Industry, Other_Ans, Applying, date_response) VALUES ('$id', '$five', '$five_a', '$five_c', '$fivec_other', 'NA', now())";
							mysqli_query($db_conn, $sql);
						} else {
							$sql = "INSERT INTO alum_survey_q5 (user_id, Employed, Characterized, Industry, Other_Ans, Applying, date_response) VALUES ('$id', '$five', '$five_a', '$five_c', '$fivec_other', 'NA', now())";
							mysqli_query($db_conn, $sql);
						}
				} else if ($five_a == 'Self-employed') {
						if ($five_c == 'other'){						
							$sql = "INSERT INTO alum_survey_q5 (user_id, Employed, Characterized, Industry, Other_Ans, Applying, date_response) VALUES ('$id', '$five', '$five_a', '$five_c', '$fivec_other', 'NA', now())";
							mysqli_query($db_conn, $sql);
						} else {
							$sql = "INSERT INTO alum_survey_q5 (user_id, Employed, Characterized, Industry, Other_Ans, Applying, date_response) VALUES ('$id', '$five', '$five_a', '$five_c', '$fivec_other', 'NA', now())";
							mysqli_query($db_conn, $sql);
						}
				}
				
				//Start
				
		// QUESTION NUMBER 4
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['four']);
		$four = mysqli_real_escape_string($db_conn, $_POST['ques4']);
		
		// store to db (alum_survey_q4 table)
		$sql = "INSERT INTO alum_survey_q4 (user_id, answer_body, date_response) VALUES ('$id', '$four', now())";
	    mysqli_query($db_conn, $sql);

				
		// QUESTION NUMBER 6
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['six']);
		$six = mysqli_real_escape_string($db_conn, $_POST['ques6']);
		$sixacademicfield = mysqli_real_escape_string($db_conn, $_POST['ques6_acadfield']);
		$sixothers = mysqli_real_escape_string($db_conn, $_POST['ques6_others']);
		

		
		if ($six == 'Associate’s degree') {
			$sql = "INSERT INTO alum_survey_q6 (user_id, Level, Field, date_response) VALUES ('$id', '$six', '$sixacademicfield', now())";
			mysqli_query($db_conn, $sql);
		} else if ($six == 'Bachelor’s degree') {
			$sql = "INSERT INTO alum_survey_q6 (user_id, Level, Field, date_response) VALUES ('$id', '$six', '$sixacademicfield', now())";
			mysqli_query($db_conn, $sql);
		} else if ($six == 'Master’s degree') {
			$sql = "INSERT INTO alum_survey_q6 (user_id, Level, Field, date_response) VALUES ('$id', '$six', '$sixacademicfield', now())";
			mysqli_query($db_conn, $sql);
		} else if ($six == 'Doctoral degree') {
			$sql = "INSERT INTO alum_survey_q6 (user_id, Level, Field, date_response) VALUES ('$id', '$six', '$sixacademicfield', now())";
			mysqli_query($db_conn, $sql);
		} else if ($six == 'Other'){
			$sql = "INSERT INTO alum_survey_q6 (user_id, Level, Field, date_response) VALUES ('$id', '$six', '$sixothers', now())";
			mysqli_query($db_conn, $sql);
		} else {
			$sql = "INSERT INTO alum_survey_q6 (user_id, Level, Field, date_response) VALUES ('$id', '$six', 'NA', now())";
			mysqli_query($db_conn, $sql);
		}

		
		// QUESTION NUMBER 7
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['seven']);
		$seven = mysqli_real_escape_string($db_conn, $_POST['ques7']);
		$sevenacademicfield = mysqli_real_escape_string($db_conn, $_POST['ques7_acadfield']);
		$sevenothers = mysqli_real_escape_string($db_conn, $_POST['ques7_others']);
		

		
		if ($seven == 'Associate’s degree') {
			$sql = "INSERT INTO alum_survey_q7 (user_id, Level, Field, date_response) VALUES ('$id', '$seven', '$sevenacademicfield', now())";
			mysqli_query($db_conn, $sql);
		} else if ($seven == 'Bachelor’s degree') {
			$sql = "INSERT INTO alum_survey_q7 (user_id, Level, Field, date_response) VALUES ('$id', '$seven', '$sevenacademicfield', now())";
			mysqli_query($db_conn, $sql);
		} else if ($seven == 'Master’s degree') {
			$sql = "INSERT INTO alum_survey_q7 (user_id, Level, Field, date_response) VALUES ('$id', '$seven', '$sevenacademicfield', now())";
			mysqli_query($db_conn, $sql);
		} else if ($seven == 'Doctoral degree') {
			$sql = "INSERT INTO alum_survey_q7 (user_id, Level, Field, date_response) VALUES ('$id', '$seven', '$sevenacademicfield', now())";
			mysqli_query($db_conn, $sql);
		} else if ($seven == 'Other'){
			$sql = "INSERT INTO alum_survey_q7 (user_id, Level, Field, date_response) VALUES ('$id', '$seven', '$sevenothers', now())";
			mysqli_query($db_conn, $sql);
		} else {
			$sql = "INSERT INTO alum_survey_q7 (user_id, Level, Field, date_response) VALUES ('$id', '$seven', 'NA', now())";
			mysqli_query($db_conn, $sql);
		}
	
		
		// QUESTION NUMBER 8
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eight']);
		$eight = mysqli_real_escape_string($db_conn, $_POST['ques8']);

		
		// store to db (alum_survey_q8 table)
		$sql = "INSERT INTO alum_survey_q8 (user_id, answer_body, date_response) VALUES ('$id', '$eight', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 9
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['nine']);
		$nine = mysqli_real_escape_string($db_conn, $_POST['ques9']);

		
		// store to db (alum_survey_q9 table)
		$sql = "INSERT INTO alum_survey_q9 (user_id, answer_body, date_response) VALUES ('$id', '$nine', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 10
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['ten']);
		$jobduties = $_POST['jobduties'];
		$percentage =  $_POST['percentage'];
		
		foreach ($jobduties as $key => $value){
			$sql = "INSERT INTO alum_survey_q10 (user_id, Job, Percent, date_response) VALUES ('$id', '".$value."', '".$percentage[$key]."', now())";
			mysqli_query($db_conn, $sql);
		}

		
		// QUESTION NUMBER 11
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eleven']);
		$eleven = mysqli_real_escape_string($db_conn, $_POST['ques11']);

		
		if ($eleven == 'Yes') {
			$eleven_field = mysqli_real_escape_string($db_conn, $_POST['ques11_1']);
			$sql = "INSERT INTO alum_survey_q11 (user_id, Volunteer, Characterized, date_response) VALUES ('$id', '$eleven', '$eleven_field', now())";
			mysqli_query($db_conn, $sql);
		} else {
			$sql = "INSERT INTO alum_survey_q11 (user_id, Volunteer, Characterized, date_response) VALUES ('$id', '$eleven', 'NA', now())";
			mysqli_query($db_conn, $sql);
		}
		
		// QUESTION NUMBER 12
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['twelve']);
		$twelve = mysqli_real_escape_string($db_conn, $_POST['ques12']);
		$twelve_field = mysqli_real_escape_string($db_conn, $_POST['ques12_1']);
		
		if ($twelve == 'No experience') {
			$sql = "INSERT INTO alum_survey_q12 (user_id, Experience, Necessity, date_response) VALUES ('$id', '$twelve', '$twelve_field', now())";
			mysqli_query($db_conn, $sql);
		} else if ($twelve == 'Less than one (1) year') {
			$sql = "INSERT INTO alum_survey_q12 (user_id, Experience, Necessity, date_response) VALUES ('$id', '$twelve', '$twelve_field', now())";
			mysqli_query($db_conn, $sql);
		} else if ($twelve == 'One (1) to three (3) years') {
			$sql = "INSERT INTO alum_survey_q12 (user_id, Experience, Necessity, date_response) VALUES ('$id', '$twelve', '$twelve_field', now())";
			mysqli_query($db_conn, $sql);
		} else if ($twelve == 'Three (3) to six (6) years') {
			$sql = "INSERT INTO alum_survey_q12 (user_id, Experience, Necessity, date_response) VALUES ('$id', '$twelve', '$twelve_field', now())";
			mysqli_query($db_conn, $sql);
		} else if ($twelve == 'More than six (6+) years') {
			$sql = "INSERT INTO alum_survey_q12 (user_id, Experience, Necessity, date_response) VALUES ('$id', '$twelve', '$twelve_field', now())";
			mysqli_query($db_conn, $sql);
		}
	
		
		// QUESTION NUMBER 13
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['thirteen']);
		$thirteen = mysqli_real_escape_string($db_conn, $_POST['ques13']);

		
		// store to db (alum_survey_q13 table)
		$sql = "INSERT INTO alum_survey_q13 (user_id, answer_body, date_response) VALUES ('$id', '$thirteen', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 14
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['fourteen']);
		$fourteen = mysqli_real_escape_string($db_conn, $_POST['ques14']);

		
		// store to db (alum_survey_q14 table)
		$sql = "INSERT INTO alum_survey_q14 (user_id, answer_body, date_response) VALUES ('$id', '$fourteen', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 15
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['fifteen']);
		$fifteen = mysqli_real_escape_string($db_conn, $_POST['ques15']);

		
		// store to db (alum_survey_q15 table)
		$sql = "INSERT INTO alum_survey_q15 (user_id, answer_body, date_response) VALUES ('$id', '$fifteen', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 16
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['sixteen']);
		$sixteen = mysqli_real_escape_string($db_conn, $_POST['ques16']);

		
		// store to db (alum_survey_q16 table)
		$sql = "INSERT INTO alum_survey_q16 (user_id, answer_body, date_response) VALUES ('$id', '$sixteen', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 17
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['seventeen']);
		$seventeen = mysqli_real_escape_string($db_conn, $_POST['ques17']);

		
		// store to db (alum_survey_q17 table)
		$sql = "INSERT INTO alum_survey_q17 (user_id, answer_body, date_response) VALUES ('$id', '$seventeen', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen']);
		$eighteen_a = mysqli_real_escape_string($db_conn, $_POST['ques18_1']);
		$eighteen_b = mysqli_real_escape_string($db_conn, $_POST['ques18_2']);
		$eighteen_c = mysqli_real_escape_string($db_conn, $_POST['ques18_3']);
		$eighteen_d = mysqli_real_escape_string($db_conn, $_POST['ques18_4']);
		$eighteen_e = mysqli_real_escape_string($db_conn, $_POST['ques18_5']);
		$eighteen_f = mysqli_real_escape_string($db_conn, $_POST['ques18_6']);
		$eighteen_g = mysqli_real_escape_string($db_conn, $_POST['ques18_7']);
		$eighteen_h = mysqli_real_escape_string($db_conn, $_POST['ques18_8']);
		$eighteen_i = mysqli_real_escape_string($db_conn, $_POST['ques18_9']);
		$eighteen_j = mysqli_real_escape_string($db_conn, $_POST['ques18_10']);
		$eighteen_k = mysqli_real_escape_string($db_conn, $_POST['ques18_11']);

		
		// store to db (alum_survey_q18 table)
	    $eighteen[$ques18_arr[0]] = mysqli_real_escape_string($db_conn, $_POST['ques18_1']);
		$eighteen[$ques18_arr[1]] = mysqli_real_escape_string($db_conn, $_POST['ques18_2']);
		$eighteen[$ques18_arr[2]] = mysqli_real_escape_string($db_conn, $_POST['ques18_3']);
		$eighteen[$ques18_arr[3]] = mysqli_real_escape_string($db_conn, $_POST['ques18_4']);
		$eighteen[$ques18_arr[4]] = mysqli_real_escape_string($db_conn, $_POST['ques18_5']);
		$eighteen[$ques18_arr[5]] = mysqli_real_escape_string($db_conn, $_POST['ques18_6']);
		$eighteen[$ques18_arr[6]] = mysqli_real_escape_string($db_conn, $_POST['ques18_7']);
		$eighteen[$ques18_arr[7]] = mysqli_real_escape_string($db_conn, $_POST['ques18_8']);
		$eighteen[$ques18_arr[8]] = mysqli_real_escape_string($db_conn, $_POST['ques18_9']);
		$eighteen[$ques18_arr[9]] = mysqli_real_escape_string($db_conn, $_POST['ques18_10']);
		$eighteen[$ques18_arr[10]] = mysqli_real_escape_string($db_conn, $_POST['ques18_11']);

	    foreach ($eighteen as $ques18_arr => $rate) {
	    	$sql = "INSERT INTO alum_survey_q18 (user_id, ques18_arr, answer_body, date_response) VALUES ('$id', '$ques18_arr', '$rate', now())";
    		mysqli_query($db_conn, $sql);
	    }
		
		
		// QUESTION NUMBER 19
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['nineteen']);
		$nineteen = mysqli_real_escape_string($db_conn, $_POST['ques19']);
		$nineteen_txt = mysqli_real_escape_string($db_conn, $_POST['ques19_ytxt']);

		// if other is selected
		if ($nineteen == 'Yes') {
			$sql = "INSERT INTO alum_survey_q19 (user_id, Elaborate, answer_body, date_response) VALUES ('$id', '$nineteen', '$nineteen_txt', now())";
			mysqli_query($db_conn, $sql);
		} else {
			$sql = "INSERT INTO alum_survey_q19 (user_id, Elaborate, answer_body, date_response) VALUES ('$id', '$nineteen', 'NA', now())";
			mysqli_query($db_conn, $sql);
		}
		
		if ($_SESSION['role'] == $ALUMNI_ROLE_ID) {
			// update time of response
			$sql_time = "UPDATE emp_survey set date_response=now() where user_id=".$_SESSION['id'];
			$rs = mysqli_query($db_conn, $sql_time);

			header('location: contactemp_ques.php');
			// echo '<script> alert("Thank you for completing the survey!"); </script>';
		}
		elseif ($_SESSION['role'] == $ALUM_EMP_ROLE_ID) {
			header('location: alum_emp.php');
		}
		
		//End
				
		//No db 5
		
		} else if ($five == 'No') {
				$five_b = mysqli_real_escape_string($db_conn, $_POST['ques5_2']);
					
			$sql = "INSERT INTO alum_survey_q5 (user_id, Employed, Characterized, Industry, Other_Ans, Applying, date_response) VALUES ('$id', '$five', 'NA', 'NA', 'NA', '$five_b', now())";
			mysqli_query($db_conn, $sql);
			
			//Start
			
		// QUESTION NUMBER 8
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eight']);
		$eight = mysqli_real_escape_string($db_conn, $_POST['ques8']);

		
		// store to db (alum_survey_q8 table)
		$sql = "INSERT INTO alum_survey_q8 (user_id, answer_body, date_response) VALUES ('$id', '$eight', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 11
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eleven']);
		$eleven = mysqli_real_escape_string($db_conn, $_POST['ques11']);

		
		if ($eleven == 'Yes') {
			$eleven_field = mysqli_real_escape_string($db_conn, $_POST['ques11_1']);
			$sql = "INSERT INTO alum_survey_q11 (user_id, Volunteer, Characterized, date_response) VALUES ('$id', '$eleven', '$eleven_field', now())";
			mysqli_query($db_conn, $sql);
		} else {
			$sql = "INSERT INTO alum_survey_q11 (user_id, Volunteer, Characterized, date_response) VALUES ('$id', '$eleven', 'NA', now())";
			mysqli_query($db_conn, $sql);
		}
		
		// QUESTION NUMBER 13
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['thirteen']);
		$thirteen = mysqli_real_escape_string($db_conn, $_POST['ques13']);

		
		// store to db (alum_survey_q13 table)
		$sql = "INSERT INTO alum_survey_q13 (user_id, answer_body, date_response) VALUES ('$id', '$thirteen', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 17
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['seventeen']);
		$seventeen = mysqli_real_escape_string($db_conn, $_POST['ques17']);

		
		// store to db (alum_survey_q17 table)
		$sql = "INSERT INTO alum_survey_q17 (user_id, answer_body, date_response) VALUES ('$id', '$seventeen', now())";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen']);
		$eighteen_a = mysqli_real_escape_string($db_conn, $_POST['ques18_1']);
		$eighteen_b = mysqli_real_escape_string($db_conn, $_POST['ques18_2']);
		$eighteen_c = mysqli_real_escape_string($db_conn, $_POST['ques18_3']);
		$eighteen_d = mysqli_real_escape_string($db_conn, $_POST['ques18_4']);
		$eighteen_e = mysqli_real_escape_string($db_conn, $_POST['ques18_5']);
		$eighteen_f = mysqli_real_escape_string($db_conn, $_POST['ques18_6']);
		$eighteen_g = mysqli_real_escape_string($db_conn, $_POST['ques18_7']);
		$eighteen_h = mysqli_real_escape_string($db_conn, $_POST['ques18_8']);
		$eighteen_i = mysqli_real_escape_string($db_conn, $_POST['ques18_9']);
		$eighteen_j = mysqli_real_escape_string($db_conn, $_POST['ques18_10']);
		$eighteen_k = mysqli_real_escape_string($db_conn, $_POST['ques18_11']);

		
		// store to db (alum_survey_q18 table)
	    $eighteen[$ques18_arr[0]] = mysqli_real_escape_string($db_conn, $_POST['ques18_1']);
		$eighteen[$ques18_arr[1]] = mysqli_real_escape_string($db_conn, $_POST['ques18_2']);
		$eighteen[$ques18_arr[2]] = mysqli_real_escape_string($db_conn, $_POST['ques18_3']);
		$eighteen[$ques18_arr[3]] = mysqli_real_escape_string($db_conn, $_POST['ques18_4']);
		$eighteen[$ques18_arr[4]] = mysqli_real_escape_string($db_conn, $_POST['ques18_5']);
		$eighteen[$ques18_arr[5]] = mysqli_real_escape_string($db_conn, $_POST['ques18_6']);
		$eighteen[$ques18_arr[6]] = mysqli_real_escape_string($db_conn, $_POST['ques18_7']);
		$eighteen[$ques18_arr[7]] = mysqli_real_escape_string($db_conn, $_POST['ques18_8']);
		$eighteen[$ques18_arr[8]] = mysqli_real_escape_string($db_conn, $_POST['ques18_9']);
		$eighteen[$ques18_arr[9]] = mysqli_real_escape_string($db_conn, $_POST['ques18_10']);
		$eighteen[$ques18_arr[10]] = mysqli_real_escape_string($db_conn, $_POST['ques18_11']);

	    foreach ($eighteen as $ques18_arr => $rate) {
	    	$sql = "INSERT INTO alum_survey_q18 (user_id, ques18_arr, answer_body, date_response) VALUES ('$id', '$ques18_arr', '$rate', now())";
    		mysqli_query($db_conn, $sql);
	    }
		
		
		// QUESTION NUMBER 19
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['nineteen']);
		$nineteen = mysqli_real_escape_string($db_conn, $_POST['ques19']);
		$nineteen_txt = mysqli_real_escape_string($db_conn, $_POST['ques19_ytxt']);

		// if other is selected
		if ($nineteen == 'Yes') {
			$sql = "INSERT INTO alum_survey_q19 (user_id, Elaborate, answer_body, date_response) VALUES ('$id', '$nineteen', '$nineteen_txt', now())";
			mysqli_query($db_conn, $sql);
		} else {
			$sql = "INSERT INTO alum_survey_q19 (user_id, Elaborate, answer_body, date_response) VALUES ('$id', '$nineteen', 'NA', now())";
			mysqli_query($db_conn, $sql);
		}
		
		header('location: contactemp_ques.php');
			
			//End
		} else {
			$five_field = $five;
		}

	}

}//end of submit-alum

?>
