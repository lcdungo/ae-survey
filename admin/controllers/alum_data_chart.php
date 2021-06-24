<?php
session_start();

// connect to db
require ('../config/connection.php');

// get total number of respondents

$total = 0;
$query = "SELECT user_id FROM alum_survey_q1";
$result = mysqli_query($db_conn, $query);
while ($row = mysqli_fetch_array($result)) {
	$total++;
}



###################### QUESTION # 1 ######################
	
	$ct_fmale = 0;
	$ct_male = 0;
	
	// get data from table (female)
	$query = "SELECT user_id FROM alum_survey_q1 WHERE answer_body='Female'";
	// execute query
	$result = mysqli_query($db_conn, $query);

	// check for error
	if (!$result) {
	    printf("Error: %s\n", mysqli_error($db_conn));
	    exit();
	}

	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_fmale++;
	}

	// get data from table (male)
	$query = "SELECT user_id FROM alum_survey_q1 WHERE answer_body='Male'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_male++;
	}

###################### QUESTION # 2 ######################

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
	); // 195 countries
	
	// counters for country
		$ct_country0 = 0; $ct_country1 = 0; $ct_country2 = 0; $ct_country3 = 0; $ct_country4 = 0; $ct_country5 = 0; $ct_country6 = 0; $ct_country7 = 0; $ct_country8 = 0; $ct_country9 = 0; 
		$ct_country10 = 0; $ct_country11 = 0; $ct_country12 = 0; $ct_country13 = 0; $ct_country14 = 0; $ct_country15 = 0; $ct_country16 = 0; $ct_country17 = 0; $ct_country18 = 0; $ct_country19 = 0; 
		$ct_country20 = 0; $ct_country21 = 0; $ct_country22 = 0; $ct_country23 = 0; $ct_country24 = 0; $ct_country25 = 0; $ct_country26 = 0; $ct_country27 = 0; $ct_country28 = 0; $ct_country29 = 0; 
		$ct_country30 = 0; $ct_country31 = 0; $ct_country32 = 0; $ct_country33 = 0; $ct_country34 = 0; $ct_country35 = 0; $ct_country36 = 0; $ct_country37 = 0; $ct_country38 = 0; $ct_country39 = 0; 
		$ct_country40 = 0; $ct_country41 = 0; $ct_country42 = 0; $ct_country43 = 0; $ct_country44 = 0; $ct_country45 = 0; $ct_country46 = 0; $ct_country47 = 0; $ct_country48 = 0; $ct_country49 = 0; 
		$ct_country50 = 0; $ct_country51 = 0; $ct_country52 = 0; $ct_country53 = 0; $ct_country54 = 0; $ct_country55 = 0; $ct_country56 = 0; $ct_country57 = 0; $ct_country58 = 0; $ct_country59 = 0; 
		$ct_country60 = 0; $ct_country61 = 0; $ct_country62 = 0; $ct_country63 = 0; $ct_country64 = 0; $ct_country65 = 0; $ct_country66 = 0; $ct_country67 = 0; $ct_country68 = 0; $ct_country69 = 0; 
		$ct_country70 = 0; $ct_country71 = 0; $ct_country72 = 0; $ct_country73 = 0; $ct_country74 = 0; $ct_country75 = 0; $ct_country76 = 0; $ct_country77 = 0; $ct_country78 = 0; $ct_country79 = 0; 
		$ct_country80 = 0; $ct_country81 = 0; $ct_country82 = 0; $ct_country83 = 0; $ct_country84 = 0; $ct_country85 = 0; $ct_country86 = 0; $ct_country87 = 0; $ct_country88 = 0; $ct_country89 = 0; 
		$ct_country90 = 0; $ct_country91 = 0; $ct_country92 = 0; $ct_country93 = 0; $ct_country94 = 0; $ct_country95 = 0; $ct_country96 = 0; $ct_country97 = 0; $ct_country98 = 0; $ct_country99 = 0; 
		$ct_country100 = 0; $ct_country101 = 0; $ct_country102 = 0; $ct_country103 = 0; $ct_country104 = 0; $ct_country105 = 0; $ct_country106 = 0; $ct_country107 = 0; $ct_country108 = 0; $ct_country109 = 0; 
		$ct_country110 = 0; $ct_country111 = 0; $ct_country112 = 0; $ct_country113 = 0; $ct_country114 = 0; $ct_country115 = 0; $ct_country116 = 0; $ct_country117 = 0; $ct_country118 = 0; $ct_country119 = 0; 
		$ct_country120 = 0; $ct_country121 = 0; $ct_country122 = 0; $ct_country123 = 0; $ct_country124 = 0; $ct_country125 = 0; $ct_country126 = 0; $ct_country127 = 0; $ct_country128 = 0; $ct_country129 = 0; 
		$ct_country130 = 0; $ct_country131 = 0; $ct_country132 = 0; $ct_country133 = 0; $ct_country134 = 0; $ct_country135 = 0; $ct_country136 = 0; $ct_country137 = 0; $ct_country138 = 0; $ct_country139 = 0; 
		$ct_country140 = 0; $ct_country141 = 0; $ct_country142 = 0; $ct_country143 = 0; $ct_country144 = 0; $ct_country145 = 0; $ct_country146 = 0; $ct_country147 = 0; $ct_country148 = 0; $ct_country149 = 0; 
		$ct_country150 = 0; $ct_country151 = 0; $ct_country152 = 0; $ct_country153 = 0; $ct_country154 = 0; $ct_country155 = 0; $ct_country156 = 0; $ct_country157 = 0; $ct_country158 = 0; $ct_country159 = 0; 
		$ct_country160 = 0; $ct_country161 = 0; $ct_country162 = 0; $ct_country163 = 0; $ct_country164 = 0; $ct_country165 = 0; $ct_country166 = 0; $ct_country167 = 0; $ct_country168 = 0; $ct_country169 = 0; 
		$ct_country170 = 0; $ct_country171 = 0; $ct_country172 = 0; $ct_country173 = 0; $ct_country174 = 0; $ct_country175 = 0; $ct_country176 = 0; $ct_country177 = 0; $ct_country178 = 0; $ct_country179 = 0; 
		$ct_country180 = 0; $ct_country181 = 0; $ct_country182 = 0; $ct_country183 = 0; $ct_country184 = 0; $ct_country185 = 0; $ct_country186 = 0; $ct_country187 = 0; $ct_country188 = 0; $ct_country189 = 0; 
		$ct_country190 = 0; $ct_country191 = 0; $ct_country192 = 0; $ct_country193 = 0; $ct_country194 = 0;


	// get data from database
		// country # 0
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[0]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country0++;
			}
		// country # 1
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[1]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country1++;
			}
		// country # 2
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[2]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country2++;
			}
		// country # 3
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[3]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country3++;
			}
		// country # 4
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[4]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country4++;
			}
		// country # 5
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[5]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country5++;
			}
		// country # 6
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[6]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country6++;
			}
		// country # 7
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[7]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country7++;
			}
		// country # 8
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[8]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country8++;
			}
		// country # 9
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[9]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country9++;
			}

		// country # 10
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[10]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country10++;
			}
		// country # 11
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[11]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country11++;
			}
		// country # 12
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[12]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country12++;
			}
		// country # 13
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[13]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country13++;
			}
		// country # 14
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[14]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country14++;
			}
		// country # 15
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[15]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country15++;
			}
		// country # 16
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[16]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country16++;
			}
		// country # 17
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[17]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country17++;
			}
		// country # 18
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[18]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country18++;
			}
		// country # 19
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[19]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country19++;
			}

		// country # 20
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[20]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country20++;
			}
		// country # 21
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[21]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country21++;
			}
		// country # 22
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[22]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country22++;
			}
		// country # 23
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[23]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country23++;
			}
		// country # 24
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[24]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country24++;
			}
		// country # 25
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[25]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country25++;
			}
		// country # 26
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[26]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country26++;
			}
		// country # 27
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[27]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country27++;
			}
		// country # 28
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='Burkina Faso'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country28++;
			}
		// country # 29
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[29]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country29++;
			}

		// country # 30
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[30]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country30++;
			}
		// country # 31
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[31]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country31++;
			}
		// country # 32
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[32]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country32++;
			}
		// country # 33
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[33]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country33++;
			}
		// country # 34
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[34]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country34++;
			}
		// country # 35
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[35]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country35++;
			}
		// country # 36
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[36]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country36++;
			}
		// country # 37
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[37]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country37++;
			}
		// country # 38
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[38]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country38++;
			}
		// country # 39
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[39]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country39++;
			}

		// country # 40
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[40]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country40++;
			}
		// country # 41
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[41]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country41++;
			}
		// country # 42
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[42]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country42++;
			}
		// country # 43
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[43]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country43++;
			}
		// country # 44
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[44]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country44++;
			}
		// country # 45
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[45]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country45++;
			}
		// country # 46
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[46]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country46++;
			}
		// country # 47
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[47]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country47++;
			}
		// country # 48
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[48]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country48++;
			}
		// country # 49
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[49]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country49++;
			}

		// country # 50
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[50]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country50++;
			}
		// country # 51
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[51]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country51++;
			}
		// country # 52
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[52]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country52++;
			}
		// country # 53
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[53]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country53++;
			}
		// country # 54
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[54]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country54++;
			}
		// country # 55
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[55]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country55++;
			}
		// country # 56
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[56]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country56++;
			}
		// country # 57
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[57]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country57++;
			}
		// country # 58
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[58]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country58++;
			}
		// country # 59
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[59]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country59++;
			}

		// country # 60
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[60]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country60++;
			}
		// country # 61
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[61]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country61++;
			}
		// country # 62
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[62]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country62++;
			}
		// country # 63
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[63]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country63++;
			}
		// country # 64
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[64]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country64++;
			}
		// country # 65
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[65]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country65++;
			}
		// country # 66
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[66]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country66++;
			}
		// country # 67
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[67]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country67++;
			}
		// country # 68
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[68]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country68++;
			}
		// country # 69
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[69]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country69++;
			}

		// country # 70
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[70]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country70++;
			}
		// country # 71
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[71]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country71++;
			}
		// country # 72
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[72]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country72++;
			}
		// country # 73
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[73]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country73++;
			}
		// country # 74
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[74]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country74++;
			}
		// country # 75
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[75]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country75++;
			}
		// country # 76
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[76]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country76++;
			}
		// country # 77
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[77]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country77++;
			}
		// country # 78
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[78]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country78++;
			}
		// country # 79
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[79]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country79++;
			}

		// country # 80
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[80]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country80++;
			}
		// country # 81
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[81]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country81++;
			}
		// country # 82
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[82]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country82++;
			}
		// country # 83
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[83]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country83++;
			}
		// country # 84
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[84]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country84++;
			}
		// country # 85
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[85]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country85++;
			}
		// country # 86
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[86]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country86++;
			}
		// country # 87
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[87]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country87++;
			}
		// country # 88
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[88]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country88++;
			}
		// country # 89
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[89]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country89++;
			}

		// country # 90
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[90]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country90++;
			}
		// country # 91
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[91]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country91++;
			}
		// country # 92
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[92]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country92++;
			}
		// country # 93
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[93]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country93++;
			}
		// country # 94
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[94]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country94++;
			}
		// country # 95
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[95]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country95++;
			}
		// country # 96
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[96]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country96++;
			}
		// country # 97
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[97]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country97++;
			}
		// country # 98
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[98]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country98++;
			}
		// country # 99
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[99]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country99++;
			}

		// country # 100
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[100]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country100++;
			}
		// country # 101
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[101]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country101++;
			}
		// country # 102
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[102]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country102++;
			}
		// country # 103
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[103]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country103++;
			}
		// country # 104
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[104]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country104++;
			}
		// country # 105
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[105]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country105++;
			}
		// country # 106
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[106]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country106++;
			}
		// country # 107
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[107]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country107++;
			}
		// country # 108
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[108]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country108++;
			}
		// country # 109
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[109]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country109++;
			}

		// country # 110
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[110]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country110++;
			}
		// country # 111
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[111]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country111++;
			}
		// country # 112
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[12]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country112++;
			}
		// country # 113
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[113]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country113++;
			}
		// country # 114
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[114]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country114++;
			}
		// country # 115
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[115]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country115++;
			}
		// country # 116
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[116]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country116++;
			}
		// country # 117
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[117]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country117++;
			}
		// country # 118
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[118]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country118++;
			}
		// country # 119
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[119]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country119++;
			}

		// country # 120
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[120]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country120++;
			}
		// country # 121
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[121]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country121++;
			}
		// country # 122
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[122]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country122++;
			}
		// country # 123
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[123]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country123++;
			}
		// country # 124
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[124]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country124++;
			}
		// country # 125
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[125]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country125++;
			}
		// country # 126
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[126]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country126++;
			}
		// country # 127
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[127]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country127++;
			}
		// country # 128
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[128]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country128++;
			}
		// country # 129
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[129]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country129++;
			}

		// country # 130
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[130]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country130++;
			}
		// country # 131
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[131]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country131++;
			}
		// country # 132
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[132]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country132++;
			}
		// country # 133
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[133]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country133++;
			}
		// country # 134
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[134]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country134++;
			}
		// country # 135
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[135]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country135++;
			}
		// country # 136
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[136]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country136++;
			}
		// country # 137
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[137]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country137++;
			}
		// country # 138
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[138]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country138++;
			}
		// country # 139
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[139]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country139++;
			}

		// country # 140
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[140]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country140++;
			}
		// country # 141
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[141]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country141++;
			}
		// country # 142
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[142]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country142++;
			}
		// country # 143
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[143]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country143++;
			}
		// country # 144
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[144]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country144++;
			}
		// country # 145
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[145]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country145++;
			}
		// country # 146
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[146]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country146++;
			}
		// country # 147
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[147]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country147++;
			}
		// country # 148
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[148]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country148++;
			}
		// country # 149
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[149]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country149++;
			}

		// country # 150
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[150]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country150++;
			}
		// country # 151
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[151]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country151++;
			}
		// country # 152
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[152]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country152++;
			}
		// country # 153
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[153]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country153++;
			}
		// country # 154
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[154]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country154++;
			}
		// country # 155
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[155]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country155++;
			}
		// country # 156
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[156]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country156++;
			}
		// country # 157
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[157]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country157++;
			}
		// country # 158
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[158]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country158++;
			}
		// country # 159
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[159]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country159++;
			}

		// country # 160
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[160]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country160++;
			}
		// country # 161
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[161]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country161++;
			}
		// country # 162
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[162]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country162++;
			}
		// country # 163
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[163]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country163++;
			}
		// country # 164
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[164]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country164++;
			}
		// country # 165
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[165]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country165++;
			}
		// country # 166
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[166]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country166++;
			}
		// country # 167
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[167]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country167++;
			}
		// country # 168
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[168]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country168++;
			}
		// country # 169
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[169]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country169++;
			}

		// country # 170
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[170]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country170++;
			}
		// country # 171
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[171]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country171++;
			}
		// country # 172
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[172]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country172++;
			}
		// country # 173
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[173]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country173++;
			}
		// country # 174
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[174]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country174++;
			}
		// country # 175
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[175]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country175++;
			}
		// country # 176
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[176]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country176++;
			}
		// country # 177
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[177]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country177++;
			}
		// country # 178
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[178]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country178++;
			}
		// country # 179
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[179]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country179++;
			}

		// country # 180
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[180]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country180++;
			}
		// country # 181
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[181]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country181++;
			}
		// country # 182
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[182]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country182++;
			}
		// country # 183
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[183]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country183++;
			}
		// country # 184
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[184]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country184++;
			}
		// country # 185
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[185]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country185++;
			}
		// country # 186
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[186]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country186++;
			}
		// country # 187
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[187]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country187++;
			}
		// country # 188
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[188]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country188++;
			}
		// country # 189
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[189]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country189++;
			}

		// country # 190
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[190]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country190++;
			}
		// country # 191
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[191]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country191++;
			}
		// country # 192
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[192]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country192++;
			}
		// country # 193
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[193]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country193++;
			}
		// country # 194
			$query = "SELECT user_id FROM alum_survey_q2 WHERE answer_body='$ques2_arr[194]'";
			$result = mysqli_query($db_conn, $query);
			while ($row = mysqli_fetch_array($result)) {
				$ct_country194++;
			}

	$ct_country_arr = array($ct_country0, $ct_country1, $ct_country2, $ct_country3, $ct_country4, $ct_country5, $ct_country6, $ct_country7, $ct_country8, $ct_country9, 
		$ct_country10, $ct_country11, $ct_country12, $ct_country13, $ct_country14, $ct_country15, $ct_country16, $ct_country17, $ct_country18, $ct_country19, 
		$ct_country20, $ct_country21, $ct_country22, $ct_country23, $ct_country24, $ct_country25, $ct_country26, $ct_country27, $ct_country28, $ct_country29, 
		$ct_country30, $ct_country31, $ct_country32, $ct_country33, $ct_country34, $ct_country35, $ct_country36, $ct_country37, $ct_country38, $ct_country39, 
		$ct_country40, $ct_country41, $ct_country42, $ct_country43, $ct_country44, $ct_country45, $ct_country46, $ct_country47, $ct_country48, $ct_country49, 
		$ct_country50, $ct_country51, $ct_country52, $ct_country53, $ct_country54, $ct_country55, $ct_country56, $ct_country57, $ct_country58, $ct_country59, 
		$ct_country60, $ct_country61, $ct_country62, $ct_country63, $ct_country64, $ct_country65, $ct_country66, $ct_country67, $ct_country68 , $ct_country69, 
		$ct_country70, $ct_country71, $ct_country72, $ct_country73, $ct_country74, $ct_country75, $ct_country76, $ct_country77, $ct_country78, $ct_country79, 
		$ct_country80, $ct_country81, $ct_country82, $ct_country83, $ct_country84, $ct_country85, $ct_country86, $ct_country87,$ct_country88, $ct_country89, 
		$ct_country90, $ct_country91, $ct_country92, $ct_country93, $ct_country94, $ct_country95, $ct_country96, $ct_country97,$ct_country98, $ct_country99, 
		$ct_country100, $ct_country101, $ct_country102, $ct_country103, $ct_country104, $ct_country105, $ct_country106, $ct_country107, $ct_country108, $ct_country109, 
		$ct_country110, $ct_country111, $ct_country112, $ct_country113, $ct_country114, $ct_country115, $ct_country116, $ct_country117, $ct_country118, $ct_country119, 
		$ct_country120, $ct_country121, $ct_country122, $ct_country123, $ct_country124, $ct_country125, $ct_country126, $ct_country127, $ct_country128, $ct_country129, 
		$ct_country130, $ct_country131, $ct_country132, $ct_country133, $ct_country134, $ct_country135, $ct_country136, $ct_country137, $ct_country138, $ct_country139, 
		$ct_country140, $ct_country141, $ct_country142, $ct_country143, $ct_country144, $ct_country145, $ct_country146, $ct_country147, $ct_country148, $ct_country149, 
		$ct_country150, $ct_country151, $ct_country152, $ct_country153, $ct_country154, $ct_country155, $ct_country156, $ct_country157, $ct_country158, $ct_country159, 
		$ct_country160, $ct_country161, $ct_country162, $ct_country163, $ct_country164, $ct_country165, $ct_country166, $ct_country167, $ct_country168, $ct_country169, 
		$ct_country170, $ct_country171, $ct_country172, $ct_country173, $ct_country174, $ct_country175, $ct_country176, $ct_country177, $ct_country178, $ct_country179, 
		$ct_country180, $ct_country181, $ct_country182, $ct_country183, $ct_country184, $ct_country185, $ct_country186, $ct_country187, $ct_country188, $ct_country189, 
		$ct_country190, $ct_country191, $ct_country192, $ct_country193, $ct_country194,
	);
	if ($total != 0) {
		$country_percent = array(round($ct_country0/$total*100), round($ct_country1/$total*100), round($ct_country2/$total*100), round($ct_country3/$total*100), round($ct_country4/$total*100), round($ct_country5/$total*100), round($ct_country6/$total*100), round($ct_country7/$total*100), round($ct_country8/$total*100), round($ct_country9/$total*100), 
		round($ct_country10/$total*100), round($ct_country11/$total*100), round($ct_country12/$total*100), round($ct_country13/$total*100), round($ct_country14/$total*100), round($ct_country15/$total*100), round($ct_country16/$total*100), round($ct_country17/$total*100), round($ct_country18/$total*100), round($ct_country19/$total*100), 
		round($ct_country20/$total*100), round($ct_country21/$total*100), round($ct_country22/$total*100), round($ct_country23/$total*100), round($ct_country24/$total*100), round($ct_country25/$total*100), round($ct_country26/$total*100), round($ct_country27/$total*100), round($ct_country28/$total*100), round($ct_country29/$total*100), 
		round($ct_country30/$total*100), round($ct_country31/$total*100), round($ct_country32/$total*100), round($ct_country33/$total*100), round($ct_country34/$total*100), round($ct_country35/$total*100), round($ct_country36/$total*100), round($ct_country37/$total*100), round($ct_country38/$total*100), round($ct_country39/$total*100), 
		round($ct_country40/$total*100), round($ct_country41/$total*100), round($ct_country42/$total*100), round($ct_country43/$total*100), round($ct_country44/$total*100), round($ct_country45/$total*100), round($ct_country46/$total*100), round($ct_country47/$total*100), round($ct_country48/$total*100), round($ct_country49/$total*100), 
		round($ct_country50/$total*100), round($ct_country51/$total*100), round($ct_country52/$total*100), round($ct_country53/$total*100), round($ct_country54/$total*100), round($ct_country55/$total*100), round($ct_country56/$total*100), round($ct_country57/$total*100), round($ct_country58/$total*100), round($ct_country59/$total*100), 
		round($ct_country60/$total*100), round($ct_country61/$total*100), round($ct_country62/$total*100), round($ct_country63/$total*100), round($ct_country64/$total*100), round($ct_country65/$total*100), round($ct_country66/$total*100), round($ct_country67/$total*100), round($ct_country68/$total*100) , round($ct_country69/$total*100), 
		round($ct_country70/$total*100), round($ct_country71/$total*100), round($ct_country72/$total*100), round($ct_country73/$total*100), round($ct_country74/$total*100), round($ct_country75/$total*100), round($ct_country76/$total*100), round($ct_country77/$total*100), round($ct_country78/$total*100), round($ct_country79/$total*100), 
		round($ct_country80/$total*100), round($ct_country81/$total*100), round($ct_country82/$total*100), round($ct_country83/$total*100), round($ct_country84/$total*100), round($ct_country85/$total*100), round($ct_country86/$total*100), round($ct_country87/$total*100),round($ct_country88/$total*100), round($ct_country89/$total*100), 
		round($ct_country90/$total*100), round($ct_country91/$total*100), round($ct_country92/$total*100), round($ct_country93/$total*100), round($ct_country94/$total*100), round($ct_country95/$total*100), round($ct_country96/$total*100), round($ct_country97/$total*100),round($ct_country98/$total*100), round($ct_country99/$total*100), 
		round($ct_country100/$total*100), round($ct_country101/$total*100), round($ct_country102/$total*100), round($ct_country103/$total*100), round($ct_country104/$total*100), round($ct_country105/$total*100), round($ct_country106/$total*100), round($ct_country107/$total*100), round($ct_country108/$total*100), round($ct_country109/$total*100), 
		round($ct_country110/$total*100), round($ct_country111/$total*100), round($ct_country112/$total*100), round($ct_country113/$total*100), round($ct_country114/$total*100), round($ct_country115/$total*100), round($ct_country116/$total*100), round($ct_country117/$total*100), round($ct_country118/$total*100), round($ct_country119/$total*100), 
		round($ct_country120/$total*100), round($ct_country121/$total*100), round($ct_country122/$total*100), round($ct_country123/$total*100), round($ct_country124/$total*100), round($ct_country125/$total*100), round($ct_country126/$total*100), round($ct_country127/$total*100), round($ct_country128/$total*100), round($ct_country129/$total*100), 
		round($ct_country130/$total*100), round($ct_country131/$total*100), round($ct_country132/$total*100),round( $ct_country133/$total*100), round($ct_country134/$total*100), round($ct_country135/$total*100), round($ct_country136/$total*100), round($ct_country137/$total*100), round($ct_country138/$total*100), round($ct_country139/$total*100), 
		round($ct_country140/$total*100), round($ct_country141/$total*100), round($ct_country142/$total*100), round($ct_country143/$total*100), round($ct_country144/$total*100), round($ct_country145/$total*100), round($ct_country146/$total*100), round($ct_country147/$total*100), round($ct_country148/$total*100), round($ct_country149/$total*100), 
		round($ct_country150/$total*100), round($ct_country151/$total*100), round($ct_country152/$total*100), round($ct_country153/$total*100), round($ct_country154/$total*100), round($ct_country155/$total*100), round($ct_country156/$total*100), round($ct_country157/$total*100), round($ct_country158/$total*100), round($ct_country159/$total*100), 
		round($ct_country160/$total*100), round($ct_country161/$total*100), round($ct_country162/$total*100), round($ct_country163/$total*100), round($ct_country164/$total*100), round($ct_country165/$total*100), round($ct_country166/$total*100), round($ct_country167/$total*100), round($ct_country168/$total*100), round($ct_country169/$total*100), 
		round($ct_country170/$total*100), round($ct_country171/$total*100), round($ct_country172/$total*100), round($ct_country173/$total*100), round($ct_country174/$total*100), round($ct_country175/$total*100), round($ct_country176/$total*100), round($ct_country177/$total*100), round($ct_country178/$total*100), round($ct_country179/$total*100), 
		round($ct_country180/$total*100), round($ct_country181/$total*100), round($ct_country182/$total*100), round($ct_country183/$total*100), round($ct_country184/$total*100), round($ct_country185/$total*100), round($ct_country186/$total*100), round($ct_country187/$total*100), round($ct_country188/$total*100), round($ct_country189/$total*100), 
		round($ct_country190/$total*100), round($ct_country191/$total*100), round($ct_country192/$total*100), round($ct_country193/$total*100), round($ct_country194/$total*100),
	);
	}
	



###################### QUESTION # 3 ######################

	$ct_vd3 = 0;
	$ct_gd3 = 0;
	$ct_gs3 = 0;
	$ct_vs3 = 0;

	// get data from table (very dissatisfied)
	$query = "SELECT user_id FROM alum_survey_q3 WHERE answer_body='Very Dissatisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vd3++;
	}

	// get data from table (generally dissatisfied)
	$query = "SELECT user_id FROM alum_survey_q3 WHERE answer_body='Generally Dissatisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_gd3++;
	}

	// get data from table (generally satisfied)
	$query = "SELECT user_id FROM alum_survey_q3 WHERE answer_body='Generally Satisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_gs3++;
	}

	// get data from table (very satisfied)
	$query = "SELECT user_id FROM alum_survey_q3 WHERE answer_body='Very Satisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vs3++;
	}

###################### QUESTION # 4 ######################

	$ct_coll = 0;
	$ct_2mos = 0;
	$ct_6mos = 0;
	$ct_7mos = 0;
	$ct_1yr = 0;
	$ct_2yrs = 0;
	$ct_nots = 0;

	// get data from table (option1)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='I got a job while still in college'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_coll++;
	}

	// get data from table (option2)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='2 months or less'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_2mos++;
	}

	// get data from table (option3)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='3 to 6 months'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_6mos++;
	}

	// get data from table (option4)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='7 months to 1 year'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_7mos++;
	}

	// get data from table (option5)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='1 to 2 years'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_1yr++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='More than 2 years'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_2yrs++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='I am not sure'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_nots++;
	}

###################### QUESTION # 5 ######################

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

	$ct_emp_yes5 = 0;
		$ct_yes_full5 = 0; $ct_yes_part5 = 0; $ct_yes_self5 = 0;
		$ct_yes_ind1 = 0; $ct_yes_ind2 = 0; $ct_yes_ind3 = 0; $ct_yes_ind4 = 0;
		$ct_yes_ind5 = 0; $ct_yes_ind6 = 0; $ct_yes_ind7 = 0; $ct_yes_ind8 = 0;
		$ct_yes_ind9 = 0; $ct_yes_ind10 = 0; $ct_yes_ind11 = 0; $ct_yes_ind12 = 0;
		$ct_yes_ind13 = 0; $ct_yes_ind14 = 0; $ct_yes_ind15 = 0; $ct_yes_ind16 = 0;
		$ct_yes_ind17 = 0; $ct_yes_ind18 = 0; $ct_yes_ind19 = 0; $ct_yes_ind20 = 0;
		$ct_yes_ind21 = 0; $ct_yes_ind22 = 0; $ct_yes_other5 = 0;
		$ct_yes_ind_other = ''; $string5 = '';
	$ct_emp_no5 = 0;
		$ct_look_yes5 = 0; $ct_look_no5 = 0;

	$ct_ind_arr5 = array();
	$alum_string5 = '';
	$ct_yes_ind_other = '';


	// get data from table (yes)
	$query = "SELECT user_id FROM alum_survey_q5 WHERE Employed='Yes'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_emp_yes5++;
	}
		// get data from table (full)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Characterized='Full time (40 hours/week)'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_full5++;
		}
		// get data from table (parttime)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Characterized='Part time'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_part5++;
		}
		// get data from table (self)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Characterized='Self-employed'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_self5++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind1++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Activities of International Organizations and Bodies'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind2++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Administrative and Support Service Activities'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind3++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Agriculture, Forestry and Fishing'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind4++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Arts, Entertainment and Recreation'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind5++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Construction'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind6++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Education'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind7++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Electricity, Gas, Steam and Air Conditioning Supply'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind8++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Finance, Banks, and Insurance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind9++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Hotel/Accommodation, and Restaurant and Food Service'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind10++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Human Health and Social Work Activities'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind11++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Information Technology'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind12++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Manufacturing'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind13++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Media and Communication'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind14++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Mining and Quarrying'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind15++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Other Service Activities'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind16++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Professional, Scientific and Technical Activities'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind17++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Public Administration and Defense; Compulsory Social Security'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind18++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Real Estate Activities'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind19++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Transportation and Storage'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind20++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Water Supply; Sewerage, Waste Management and Remediation Activities'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind21++;
		}

		// get data from table (industries)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Industry='Wholesale and Retail Trade'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_ind22++;
		}

		// get data from table (other industries)
		$query = "SELECT user_id, Other_Ans FROM alum_survey_q5 WHERE Industry='other'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes_other5++;

			// for other answers
			$alum_string5 = $alum_string5 . ', ' . $row['Other_Ans'];
			$ct_yes_ind_other = ltrim($alum_string5, ', ');
		}

		$ct_ind_arr5 = [$ct_yes_ind1, $ct_yes_ind2, $ct_yes_ind3, $ct_yes_ind4, $ct_yes_ind5, $ct_yes_ind6, $ct_yes_ind7, $ct_yes_ind8, $ct_yes_ind9, $ct_yes_ind10, $ct_yes_ind11, $ct_yes_ind12, $ct_yes_ind13, $ct_yes_ind14, $ct_yes_ind15, $ct_yes_ind16, $ct_yes_ind17, $ct_yes_ind18, $ct_yes_ind19, $ct_yes_ind20, $ct_yes_ind21, $ct_yes_ind22];

		if ($ct_emp_yes5 != 0) {
			$ct_ind_arr5_percent = array(round(($ct_yes_ind1/$ct_emp_yes5*100),0), round(($ct_yes_ind2/$ct_emp_yes5*100),0), round(($ct_yes_ind3/$ct_emp_yes5*100),0), round(($ct_yes_ind4/$ct_emp_yes5*100),0), round(($ct_yes_ind5/$ct_emp_yes5*100),0), round(($ct_yes_ind6/$ct_emp_yes5*100),0), round(($ct_yes_ind7/$ct_emp_yes5*100),0), round(($ct_yes_ind8/$ct_emp_yes5*100),0), round(($ct_yes_ind9/$ct_emp_yes5*100),0), round(($ct_yes_ind10/$ct_emp_yes5*100),0), round(($ct_yes_ind11/$ct_emp_yes5*100),0), round(($ct_yes_ind12/$ct_emp_yes5*100),0), round(($ct_yes_ind13/$ct_emp_yes5*100),0), round(($ct_yes_ind14/$ct_emp_yes5*100),0), round(($ct_yes_ind15/$ct_emp_yes5*100),0), round(($ct_yes_ind16/$ct_emp_yes5*100),0), round(($ct_yes_ind17/$ct_emp_yes5*100),0), round(($ct_yes_ind18/$ct_emp_yes5*100),0), round(($ct_yes_ind19/$ct_emp_yes5*100),0), round(($ct_yes_ind20/$ct_emp_yes5*100),0), round(($ct_yes_ind21/$ct_emp_yes5*100),0), round(($ct_yes_ind22/$ct_emp_yes5*100),0)
			);
		}
		

	// get data from table (no)
	$query = "SELECT user_id FROM alum_survey_q5 WHERE Employed='No'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_emp_no5++;
	}
		// get data from table (yes)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Applying='Yes'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_look_yes5++;
		}
		// get data from table (no)
		$query = "SELECT user_id FROM alum_survey_q5 WHERE Applying='No'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_look_no5++;
		}

###################### QUESTION # 6 ######################

	$ct_hs6 = 0;
	$ct_coll6 = 0;
	$ct_ad6 = 0;
	$ct_bd6 = 0;
	$ct_md6 = 0;
	$ct_dd6 = 0;
	$ct_other6 = 0;

	$alum_other6txt = '';
	$alum_string6 = '';

	$ad_field6 = array(); $bd_field6 = array();
	$md_field6 = array(); $dd_field6 = array();

	// get data from table (option1)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='High school'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_hs6++;
	}

	// get data from table (option2)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Some college'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_coll6++;
	}

	// get data from table (option5)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Associate’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ad6++;
	}
		// get data from table (option5)
		$query = "SELECT Level, Field FROM alum_survey_q6 WHERE Level='Associate’s degree'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ad_field6[] = $row;
		}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Bachelor’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_bd6++;
	}
		// get data from table (option5)
		$query = "SELECT Level, Field FROM alum_survey_q6 WHERE Level='Bachelor’s degree'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$bd_field6[] = $row;
		}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Master’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_md6++;
	}
		// get data from table (option5)
		$query = "SELECT Level, Field FROM alum_survey_q6 WHERE Level='Master’s degree'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$md_field6[] = $row;
		}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Doctoral degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_dd6++;
	}
		// get data from table (option5)
		$query = "SELECT Level, Field FROM alum_survey_q6 WHERE Level='Doctoral degree'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$dd_field6[] = $row;
		}

	// get data from table (other)
	$query = "SELECT user_id, Field FROM alum_survey_q6 WHERE Level='Other'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_other6++;

		$alum_string6 = $alum_string6 . ', ' . $row['Field'];
		$alum_other6txt = ltrim($alum_string6, ', ');
	}

###################### QUESTION # 7 ######################

	$ct_hs7 = 0;
	$ct_coll7 = 0;
	$ct_ad7 = 0;
	$ct_bd7 = 0;
	$ct_md7 = 0;
	$ct_dd7 = 0;
	$ct_other7 = 0;
	$alum_other7txt = '';
	$alum_string7 = '';

	$ad_field7 = array(); $bd_field7 = array();
	$md_field7 = array(); $dd_field7 = array();

	// get data from table (option1)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='High school'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_hs7++;
	}

	// get data from table (option2)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Some college'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_coll7++;
	}

	// get data from table (option5)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Associate’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ad7++;
	}
		// get data from table (option5)
		$query = "SELECT Level, Field FROM alum_survey_q7 WHERE Level='Associate’s degree'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ad_field7[] = $row;
		}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Bachelor’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_bd7++;
	}
		// get data from table (option5)
		$query = "SELECT Level, Field FROM alum_survey_q7 WHERE Level='Bachelor’s degree'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$bd_field7[] = $row;
		}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Master’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_md7++;
	}
		// get data from table (option5)
		$query = "SELECT Level, Field FROM alum_survey_q7 WHERE Level='Master’s degree'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$md_field7[] = $row;
		}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Doctoral degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_dd7++;
	}
		// get data from table (option5)
		$query = "SELECT Level, Field FROM alum_survey_q7 WHERE Level='Doctoral degree'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$dd_field7[] = $row;
		}

	// get data from table (other)
	$query = "SELECT user_id, Field FROM alum_survey_q7 WHERE Level='Other'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_other7++;

		$alum_string7 = $alum_string7 . ', ' . $row['Field'];
		$alum_other7txt = ltrim($alum_string7, ', ');
	}

###################### QUESTION # 8 ######################

	$ques8_arr = array (
		"Armed Forces Occupations", "Clerical Support Workers", 
		"Craft and Related Trade Workers", "Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)", 
		"Managers", "Plant and Machine Operators, and Assemblers", "Professionals", "Service and Sales Workers",
		"Skilled Agricultural, Forestry and Fishery Workers", "Technicians and Associate Professionals"
	);

	$ct_occ1 = 0;
	$ct_occ2 = 0;
	$ct_occ3 = 0;
	$ct_occ4 = 0;
	$ct_occ5 = 0;
	$ct_occ6 = 0;
	$ct_occ7 = 0;
	$ct_occ8 = 0;
	$ct_occ9 = 0;
	$ct_occ10 = 0;

	$ct_occ_array = array();
	$ct_occ_array_percent = array();

	// get data from table (option1)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Armed Forces Occupations'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ1++;
	}

	// get data from table (option2)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Clerical Support Workers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ2++;
	}

	// get data from table (option5)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Craft and Related Trade Workers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ3++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ4++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Managers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ5++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Plant and Machine Operators, and Assemblers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ6++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Professionals'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ7++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Service and Sales Workers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ8++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Skilled Agricultural, Forestry and Fishery Workers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ9++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Technicians and Associate Professionals'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ10++;
	}

	$ct_occ_array = [$ct_occ1, $ct_occ2, $ct_occ3, $ct_occ4, $ct_occ5, $ct_occ6, $ct_occ7, $ct_occ8, $ct_occ9, $ct_occ10];

	if ($total != 0) {
		$ct_occ_array_percent = array(round(($ct_occ1/$total*100),0), round(($ct_occ2/$total*100),0), round(($ct_occ3/$total*100),0), round(($ct_occ4/$total*100),0), round(($ct_occ5/$total*100),0), round(($ct_occ6/$total*100),0), round(($ct_occ7/$total*100),0), round(($ct_occ8/$total*100),0), round(($ct_occ9/$total*100),0), round(($ct_occ10/$total*100),0)
		);
	}
		

###################### QUESTION # 9 ######################
	
	$ct_sf = 0;
	$ct_rf = 0;
	$ct_nr = 0;
	
	// get data from table (option1)
	$query = "SELECT user_id FROM alum_survey_q9 WHERE answer_body='Yes, it is the same field as my major/s'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sf++;
	}

	// get data from table (option2)
	$query = "SELECT user_id FROM alum_survey_q9 WHERE answer_body='Yes, it is related to my major/s'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_rf++;
	}

	// get data from table (option3)
	$query = "SELECT user_id FROM alum_survey_q9 WHERE answer_body='No, it is not related'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_nr++;
	}

###################### QUESTION # 10 ######################

	$data10 = array();

	// get userid data from table
	$query = "SELECT Job, Percent FROM alum_survey_q10 ORDER BY user_id";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	foreach ($result as $row) {
		$data10[] = $row;
	}

###################### QUESTION # 11 ######################
	
	$ct_yes11 = 0; $ct_yes11_full = 0; $ct_yes11_part = 0;
	$ct_no11 = 0;
	
	// get data from table (Yes)
	$query = "SELECT user_id FROM alum_survey_q11 WHERE Volunteer='Yes'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_yes11++;
	}
		// get data from table (parttime)
		$query = "SELECT user_id FROM alum_survey_q11 WHERE Characterized='Part time'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes11_part++;
		}
		// get data from table (full)
		$query = "SELECT user_id FROM alum_survey_q11 WHERE Characterized='Full time (40 hours/week)'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes11_full++;
		}

	// get data from table (no)
	$query = "SELECT user_id FROM alum_survey_q11 WHERE Volunteer='No'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_no11++;
	}

###################### QUESTION # 12 ######################
	
	$ct_noex = 0; $ct_3to6 = 0; 
	$ct_less1 = 0; $ct_more6 = 0;
	$ct_1to3 = 0;

	$noex_array = array(); $c3to6_array = array();
	$less1_array = array(); $more6_array = array();
	$c1to3_array = array();
	
	// get data from table (No experience)
	$query = "SELECT user_id FROM alum_survey_q12 WHERE Experience='No experience'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_noex++;
	}
		// get data from table (No experience)
		$query = "SELECT Experience, Necessity FROM alum_survey_q12 WHERE Experience='No experience'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$noex_array[] = $row;
		}

	// get data from table (Less than one (1) year)
	$query = "SELECT user_id FROM alum_survey_q12 WHERE Experience='Less than one (1) year'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_less1++;
	}
		// get data from table (Less than one (1) year)
		$query = "SELECT Experience, Necessity FROM alum_survey_q12 WHERE Experience='Less than one (1) year'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$less1_array[] = $row;
		}

	// get data from table (One (1) to three (3) years)
	$query = "SELECT user_id FROM alum_survey_q12 WHERE Experience='One (1) to three (3) years'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_1to3++;
	}
		// get data from table (One (1) to three (3) years)
		$query = "SELECT Experience, Necessity FROM alum_survey_q12 WHERE Experience='One (1) to three (3) years'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$c1to3_array[] = $row;
		}

	// get data from table (Three (3) to six (6) years)
	$query = "SELECT user_id FROM alum_survey_q12 WHERE Experience='Three (3) to six (6) years'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_3to6++;
	}
		// get data from table (Three (3) to six (6) years)
		$query = "SELECT Experience, Necessity FROM alum_survey_q12 WHERE Experience='Three (3) to six (6) years'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$c3to6_array[] = $row;
		}

	// get data from table (More than six (6+) years)
	$query = "SELECT user_id FROM alum_survey_q12 WHERE Experience='More than six (6+) years'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_more6++;
	}
		// get data from table (More than six (6+) years)
		$query = "SELECT Experience, Necessity FROM alum_survey_q12 WHERE Experience='More than six (6+) years'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$more6_array[] = $row;
		}

###################### QUESTION # 13 ######################

	$ct_vp13 = 0;
	$ct_la13 = 0;
	$ct_ma13 = 0;
	$ct_vw13 = 0;

	// get data from table (very poorly)
	$query = "SELECT user_id FROM alum_survey_q13 WHERE answer_body='Very Poorly'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vp13++;
	}

	// get data from table (Less than adequately)
	$query = "SELECT user_id FROM alum_survey_q13 WHERE answer_body='Less than adequately'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_la13++;
	}

	// get data from table (More than adequately)
	$query = "SELECT user_id FROM alum_survey_q13 WHERE answer_body='More than adequately'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ma13++;
	}

	// get data from table (very well)
	$query = "SELECT user_id FROM alum_survey_q13 WHERE answer_body='Very well'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vw13++;
	}

###################### QUESTION # 14 ######################

	$ct_entry14 = 0;
	$ct_sup14 = 0;
	$ct_exec14 = 0;
	$ct_chief14 = 0;

	// get data from table (Entry-level)
	$query = "SELECT user_id FROM alum_survey_q14 WHERE answer_body='Entry-level'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_entry14++;
	}

	// get data from table (Supervisory)
	$query = "SELECT user_id FROM alum_survey_q14 WHERE answer_body='Supervisory'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sup14++;
	}

	// get data from table (Executive level (except Chief Executive))
	$query = "SELECT user_id FROM alum_survey_q14 WHERE answer_body='Executive level (except Chief Executive)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_exec14++;
	}

	// get data from table (Chief Executive)
	$query = "SELECT user_id FROM alum_survey_q14 WHERE answer_body='Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_chief14++;
	}

###################### QUESTION # 15 ######################

	$ct_non15 = 0;
	$ct_som15 = 0;
	$ct_half15 = 0;
	$ct_most15 = 0;

	// get data from table (None at all)
	$query = "SELECT user_id FROM alum_survey_q15 WHERE answer_body='None at all'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_non15++;
	}

	// get data from table (Some of my time (up to 25% of my time))
	$query = "SELECT user_id FROM alum_survey_q15 WHERE answer_body='Some of my time (up to 25% of my time)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_som15++;
	}

	// get data from table (Half my time (50%))
	$query = "SELECT user_id FROM alum_survey_q15 WHERE answer_body='Half my time (50%)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_half15++;
	}

	// get data from table (Most of my time (75% of my time))
	$query = "SELECT user_id FROM alum_survey_q15 WHERE answer_body='Most of my time (75% of my time)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_most15++;
	}

###################### QUESTION # 16 ######################

	$ct_non16 = 0;
	$ct_lim16 = 0;
	$ct_dir16 = 0;
	$ct_unit16 = 0;

	// get data from table (No supervisory or lead responsibilities.)
	$query = "SELECT user_id FROM alum_survey_q16 WHERE answer_body='No supervisory or lead responsibilities.'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_non16++;
	}

	// get data from table (limited)
	$query = "SELECT user_id FROM alum_survey_q16 WHERE answer_body='Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_lim16++;
	}

	// get data from table (direct)
	$query = "SELECT user_id FROM alum_survey_q16 WHERE answer_body='Direct supervision of one or more people.'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_dir16++;
	}

	// get data from table (direct2)
	$query = "SELECT user_id FROM alum_survey_q16 WHERE answer_body='Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues.'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_unit16++;
	}

###################### QUESTION # 17 ######################

	$ct_vd17 = 0;
	$ct_gd17 = 0;
	$ct_gs17 = 0;
	$ct_vs17 = 0;

	// get data from table (very dissatisfied)
	$query = "SELECT user_id FROM alum_survey_q17 WHERE answer_body='Very Dissatisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vd17++;
	}

	// get data from table (generally dissatisfied)
	$query = "SELECT user_id FROM alum_survey_q17 WHERE answer_body='Generally Dissatisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_gd17++;
	}

	// get data from table (generally satisfied)
	$query = "SELECT user_id FROM alum_survey_q17 WHERE answer_body='Generally Satisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_gs17++;
	}

	// get data from table (very satisfied)
	$query = "SELECT user_id FROM alum_survey_q17 WHERE answer_body='Very Satisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vs17++;
	}

###################### QUESTION # 18 ######################

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

	// counters/containers for preparation
		$ct_dmcs1_vp = 0; $ct_dmcs1_la = 0; $ct_dmcs1_ma = 0; $ct_dmcs1_vw = 0;
		$ct_dmcs2_vp = 0; $ct_dmcs2_la = 0; $ct_dmcs2_ma = 0; $ct_dmcs2_vw = 0;
		$ct_dmcs3_vp = 0; $ct_dmcs3_la = 0; $ct_dmcs3_ma = 0; $ct_dmcs3_vw = 0;
		$ct_dmcs4_vp = 0; $ct_dmcs4_la = 0; $ct_dmcs4_ma = 0; $ct_dmcs4_vw = 0;
		$ct_dmcs5_vp = 0; $ct_dmcs5_la = 0; $ct_dmcs5_ma = 0; $ct_dmcs5_vw = 0;
		$ct_dmcs6_vp = 0; $ct_dmcs6_la = 0; $ct_dmcs6_ma = 0; $ct_dmcs6_vw = 0;
		$ct_dmcs7_vp = 0; $ct_dmcs7_la = 0; $ct_dmcs7_ma = 0; $ct_dmcs7_vw = 0;
		$ct_dmcs8_vp = 0; $ct_dmcs8_la = 0; $ct_dmcs8_ma = 0; $ct_dmcs8_vw = 0;
		$ct_dmcs9_vp = 0; $ct_dmcs9_la = 0; $ct_dmcs9_ma = 0; $ct_dmcs9_vw = 0;
		$ct_dmcs10_vp = 0; $ct_dmcs10_la = 0; $ct_dmcs10_ma = 0; $ct_dmcs10_vw = 0;
		$ct_dmcs11_vp = 0; $ct_dmcs11_la = 0; $ct_dmcs11_ma = 0; $ct_dmcs11_vw = 0;

	// get data from table (DMCS 1)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess the skills and mindset to improve human life' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess the skills and mindset to improve human life' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess the skills and mindset to improve human life' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess the skills and mindset to improve human life' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_vw++;
		}

	// get data from table (DMCS 2)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Commit to the freedom and welfare of all' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Commit to the freedom and welfare of all' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Commit to the freedom and welfare of all' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Commit to the freedom and welfare of all' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_vw++;
		}

	// get data from table (DMCS 3)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate mastery of knowledge in your specific discipline' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate mastery of knowledge in your specific discipline' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate mastery of knowledge in your specific discipline' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate mastery of knowledge in your specific discipline' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_vw++;
		}

	// get data from table (DMCS 4)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess breadth of mind' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess breadth of mind' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess breadth of mind' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess breadth of mind' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_vw++;
		}

	// get data from table (DMCS 5)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess strength of character' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess strength of character' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess strength of character' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess strength of character' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_vw++;
		}

	// get data from table (DMCS 6)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess generosity of spirit' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess generosity of spirit' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess generosity of spirit' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess generosity of spirit' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_vw++;
		}

	// get data from table (DMCS 7)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Inclusively engage with society and the world at large' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Inclusively engage with society and the world at large' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Inclusively engage with society and the world at large' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Inclusively engage with society and the world at large' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_vw++;
		}

	// get data from table (DMCS 8)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be mindful of the needs and capabilities of people' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be mindful of the needs and capabilities of people' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be mindful of the needs and capabilities of people' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be mindful of the needs and capabilities of people' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_vw++;
		}

	// get data from table (DMCS 9)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be sensitive to the challenges and opportunities of national development and global change' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be sensitive to the challenges and opportunities of national development and global change' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be sensitive to the challenges and opportunities of national development and global change' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be sensitive to the challenges and opportunities of national development and global change' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_vw++;
		}

	// get data from table (DMCS 10)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Effective and efficient in accomplishing tasks' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Think critically' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Think critically' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Think critically' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_vw++;
		}

	// get data from table (DMCS 11)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate discernment' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate discernment' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate discernment' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate discernment' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_vw++;
		}

###################### QUESTION # 19 ######################

	// counters/containers for comments
	$ct_yes19 = '';
	$string19 = '';

	$for_array19 = '';
	$alum_string19_array = array();

	// get data from table
	$query = "SELECT Elaborate, answer_body FROM alum_survey_q19 WHERE Elaborate='Yes'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$string19 = $string19 . ', ' . $row['answer_body'];
		$ct_yes19 = ltrim($string19, ', ');

		$alum_string19_array[] = $row;
	}


?>