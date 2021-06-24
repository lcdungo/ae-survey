<?php
session_start();

// connect to db
require ('../config/connection.php');

// get total number of respondents
$total = 0;
$query = "SELECT user_id FROM emp_survey_q1";
$result = mysqli_query($db_conn, $query);
while ($row = mysqli_fetch_array($result)) {
	$total++;
}

###################### QUESTION #1 ######################

	// counters/containers for public and private
	$ct_pub = 0;
	$ct_priv = 0;
	$ct_other1 = 0;
	$ct_other1txt = '';
	$string1 = '';

	// get data from table (public)
	$query = "SELECT user_id FROM emp_survey_q1 WHERE answer_body='Public'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_pub++;
	}

	// get data from table (private)
	$query = "SELECT user_id FROM emp_survey_q1 WHERE answer_body='Private'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_priv++;
	}

	// get data from table (others)
	$query = "SELECT user_id, answer_others FROM emp_survey_q1 WHERE answer_body='Other'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_other1++;

		// for other answers
		$string1 = $string1 . ', ' . $row['answer_others'];
		$ct_other1txt = ltrim($string1, ', ');
	}

###################### QUESTION #2 ######################

	$abroad_array = array("Africa", "Northern Africa", "Eastern Africa", "Middle Africa", "Southern Africa", "Western Africa", 
		"America", "North America", "Central America", "South America", "Antarctica",
				"Asia", "Central Asia", "Eastern Asia", "South Asia", "Southeast Asia", "West Asia",
				"Europe", "Eastern Europe", "Northern Europe", "Southern Europe", "Western Europe",
				"Oceania", "Australia and New Zealand", "Melanesia, Micronesia, Polynesia"
	);

	// counters/containers for ph or abroad (region/subregion)
	$ct_ph = 0;
	$ct_ab = 0;
		$ct_reg_afr = 0;
			$ct_reg_afr_na = 0; $ct_rnd_afr_na = 0;
			$ct_reg_afr_ea = 0; $ct_rnd_afr_ea = 0;
			$ct_reg_afr_ma = 0; $ct_rnd_afr_ma = 0;
			$ct_reg_afr_sa = 0; $ct_rnd_afr_sa = 0;
			$ct_reg_afr_wa = 0; $ct_rnd_afr_wa = 0;
		$ct_reg_am = 0;
			$ct_reg_am_na = 0; $ct_rnd_am_na = 0;
			$ct_reg_am_ca = 0; $ct_rnd_am_ca = 0;
			$ct_reg_am_sa = 0; $ct_rnd_am_sa = 0;
		$ct_reg_ant = 0;
		$ct_reg_asia = 0;
			$ct_reg_asia_ca = 0; $ct_rnd_asia_ca = 0;
			$ct_reg_asia_ea = 0; $ct_rnd_asia_ea = 0;
			$ct_reg_asia_sa = 0; $ct_rnd_asia_sa = 0;
			$ct_reg_asia_sea = 0; $ct_rnd_asia_sea = 0;
			$ct_reg_asia_wa = 0; $ct_rnd_asia_wa = 0;
		$ct_reg_eu = 0;
			$ct_reg_eu_ee = 0; $ct_rnd_eu_ee = 0;
			$ct_reg_eu_ne = 0; $ct_rnd_eu_ne = 0;
			$ct_reg_eu_se = 0; $ct_rnd_eu_se = 0;
			$ct_reg_eu_we = 0; $ct_rnd_eu_we = 0;
		$ct_reg_oc = 0;
			$ct_reg_oc_aus = 0; $ct_rnd_oc_aus = 0;
			$ct_reg_oc_mel = 0; $ct_rnd_oc_mel = 0;

	// get data from table (philippines)
	$query = "SELECT user_id FROM emp_survey_q2 WHERE answer_body='Philippines'";
	// execute query
	$result = mysqli_query($db_conn, $query);

	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ph++;
	}

	// get data from table (abroad)
	$query = "SELECT user_id FROM emp_survey_q2 WHERE answer_body='Abroad'";
	// execute query
	$result = mysqli_query($db_conn, $query);

	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ab++;
	}

		// get data from table (region-africa)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='Africa'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_afr++;
		}
			// get data from table (region-africa-sub-north)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Northern Africa'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_afr_na++;
			}

			// get data from table (region-africa-sub-east)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Eastern Africa'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_afr_ea++;
			}

			// get data from table (region-africa-sub-mid)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Middle Africa'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_afr_ma++;
			}

			// get data from table (region-africa-sub-south)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Southern Africa'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_afr_sa++;
			}

			// get data from table (region-africa-sub-west)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Western Africa'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_afr_wa++;
			}

		// get data from table (region-america)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='America'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_am++;
		}
			// get data from table (region-america-sub-north)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='North America'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_am_na++;
			}

			// get data from table (region-america-sub-south)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='South America'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_am_sa++;
			}

			// get data from table (region-america-sub-west)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Central America'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_am_ca++;
			}

		// get data from table (region-antarctica)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='Antarctica'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_ant++;
		}

		// get data from table (region-asia)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='Asia'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_asia++;
		}
			// get data from table (region-asia-sub-north)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Central Asia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_asia_ca++;
			}

			// get data from table (region-asia-sub-east)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Eastern Asia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_asia_ea++;
			}

			// get data from table (region-asia-sub-mid)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='South Asia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_asia_sa++;
			}

			// get data from table (region-asia-sub-south)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Southeast Asia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_asia_sea++;
			}

			// get data from table (region-asia-sub-west)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='West Asia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_asia_wa++;
			}


		// get data from table (region-europe)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='Europe'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_eu++;
		}
			// get data from table (region-europe-sub-central)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Eastern Europe'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_eu_ee++;
			}

			// get data from table (region-europe-sub-east)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Northern Europe'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_eu_ne++;
			}

			// get data from table (region-europe-sub-south)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Southern Europe'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_eu_se++;
			}

			// get data from table (region-europe-sub-south)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Western Europe'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_eu_we++;
			}

		// get data from table (region-oceania)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='Oceania'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_oc++;
		}
			// get data from table (region-oceania-sub-north)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Australia and New Zealand'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_oc_aus++;
			}

			// get data from table (region-oceania-sub-east)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Melanesia, Micronesia, Polynesia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_oc_mel++;
			}

	$ct_abroad_arr = array( $ct_reg_afr, $ct_reg_afr_na, $ct_reg_afr_ea, $ct_reg_afr_ma, $ct_reg_afr_sa, $ct_reg_afr_wa, 
		$ct_reg_am, $ct_reg_am_na, $ct_reg_am_ca, $ct_reg_am_sa, $ct_reg_ant, 
		$ct_reg_asia, $ct_reg_asia_ca, $ct_reg_asia_ea, $ct_reg_asia_sa, $ct_reg_asia_sea, $ct_reg_asia_wa, 
		$ct_reg_eu, $ct_reg_eu_ee, $ct_reg_eu_ne, $ct_reg_eu_se, $ct_reg_eu_we, 
		$ct_reg_oc, $ct_reg_oc_aus, $ct_reg_oc_mel
	);

	
	if ($ct_reg_afr != 0) {
		$ct_rnd_afr_na = round(($ct_reg_afr_na/$ct_reg_afr*100),0);
		$ct_rnd_afr_ea = round(($ct_reg_afr_ea/$ct_reg_afr*100),0);
		$ct_rnd_afr_ma = round(($ct_reg_afr_ma/$ct_reg_afr*100),0);
		$ct_rnd_afr_sa = round(($ct_reg_afr_sa/$ct_reg_afr*100),0);
		$ct_rnd_afr_wa = round(($ct_reg_afr_wa/$ct_reg_afr*100),0);
	}
	if ($ct_reg_am != 0) {
		$ct_rnd_am_na = round(($ct_reg_am_na/$ct_reg_am*100),0);
		$ct_rnd_am_ca = round(($ct_reg_am_ca/$ct_reg_am*100),0);
		$ct_rnd_am_sa = round(($ct_reg_am_sa/$ct_reg_am*100),0);
	}
	if ($ct_reg_asia != 0) {
		$ct_rnd_asia_ca = round(($ct_reg_asia_ca/$ct_reg_asia*100),0);
		$ct_rnd_asia_ea = round(($ct_reg_asia_ea/$ct_reg_asia*100),0);
		$ct_rnd_asia_sa = round(($ct_reg_asia_sa/$ct_reg_asia*100),0);
		$ct_rnd_asia_sea = round(($ct_reg_asia_sea/$ct_reg_asia*100),0);
		$ct_rnd_asia_wa = round(($ct_reg_asia_wa/$ct_reg_asia*100),0);
	}
	if ($ct_reg_eu != 0) {
		$ct_rnd_eu_ee = round(($ct_reg_eu_ee/$ct_reg_eu*100),0);
		$ct_rnd_eu_ne = round(($ct_reg_eu_ne/$ct_reg_eu*100),0);
		$ct_rnd_eu_se = round(($ct_reg_eu_se/$ct_reg_eu*100),0);
		$ct_rnd_eu_we = round(($ct_reg_eu_we/$ct_reg_eu*100),0);
	}
	if ($ct_reg_oc != 0) {
		$ct_rnd_oc_aus = round(($ct_reg_oc_aus/$ct_reg_oc*100),0);
		$ct_rnd_oc_mel = round(($ct_reg_oc_mel/$ct_reg_oc*100),0);
	}

	if ($ct_ab != 0) {
		$ct_abroad_arr_percent = array( round(($ct_reg_afr/$ct_ab*100),0), $ct_rnd_afr_na, $ct_rnd_afr_ea, $ct_rnd_afr_ma, $ct_rnd_afr_sa, $ct_rnd_afr_wa, 
			round(($ct_reg_am/$ct_ab*100),0), $ct_rnd_am_na, $ct_rnd_am_ca, $ct_rnd_am_sa, round(($ct_reg_ant/$ct_ab*100),0), 
			round(($ct_reg_asia/$ct_ab*100),0), $ct_rnd_asia_ca, $ct_rnd_asia_ea, $ct_rnd_asia_sa, $ct_rnd_asia_sea, $ct_rnd_asia_wa, 
			round(($ct_reg_eu/$ct_ab*100),0), $ct_rnd_eu_ee, $ct_rnd_eu_ne, $ct_rnd_eu_se, $ct_rnd_eu_we, 
			round(($ct_reg_oc/$ct_ab*100),0), $ct_rnd_oc_aus, $ct_rnd_oc_mel
		);
	}
	

###################### QUESTION #3 ######################
	$ques3_arr = array(
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

	// counters/containers for industries
	$ct_ind1 = 0;
	$ct_ind2 = 0;
	$ct_ind3 = 0;
	$ct_ind4 = 0;
	$ct_ind5 = 0;
	$ct_ind6 = 0;
	$ct_ind7 = 0;
	$ct_ind8 = 0;
	$ct_ind9 = 0;
	$ct_ind10 = 0;
	$ct_ind11 = 0;
	$ct_ind12 = 0;
	$ct_ind13 = 0;
	$ct_ind14 = 0;
	$ct_ind15 = 0;
	$ct_ind16 = 0;
	$ct_ind17 = 0;
	$ct_ind18 = 0;
	$ct_ind19 = 0;
	$ct_ind20 = 0;
	$ct_ind21 = 0;
	$ct_ind22 = 0;
	$ct_other3 = 0;
	$ct_ind_other = '';
	$string3 = '';


	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind1++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Activities of International Organizations and Bodies'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind2++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Administrative and Support Service Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind3++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Agriculture, Forestry and Fishing'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind4++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Arts, Entertainment and Recreation'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind5++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Construction'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind6++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Education'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind7++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Electricity, Gas, Steam and Air Conditioning Supply'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind8++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Finance, Banks, and Insurance'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind9++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Hotel/Accommodation, and Restaurant and Food Service'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind10++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Human Health and Social Work Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind11++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Information Technology'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind12++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Manufacturing'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind13++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Media and Communication'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind14++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Mining and Quarrying'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind15++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Other Service Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind16++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Professional, Scientific and Technical Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind17++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Public Administration and Defense; Compulsory Social Security'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind18++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Real Estate Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind19++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Transportation and Storage'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind20++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Water Supply; Sewerage, Waste Management and Remediation Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind21++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Wholesale and Retail Trade'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind22++;
	}

	// get data from table (industries)
	$query = "SELECT user_id, answer_others FROM emp_survey_q3 WHERE answer_body='other'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_other3++;

		// for other answers
		$string3 = $string3 . ', ' . $row['answer_others'];
		$ct_ind_other = ltrim($string3, ', ');
	}

	$ct_ind_arr = array($ct_ind1, $ct_ind2, $ct_ind3, $ct_ind4, $ct_ind5, $ct_ind6, $ct_ind7, $ct_ind8, $ct_ind9, $ct_ind10, $ct_ind11, $ct_ind12, $ct_ind13, $ct_ind14, $ct_ind15, $ct_ind16, $ct_ind17, $ct_ind18, $ct_ind19, $ct_ind20, $ct_ind21, $ct_ind22
	);

	if ($total != 0) {
		$ct_ind_arr_percent = array(round(($ct_ind1/$total*100),0), round(($ct_ind2/$total*100),0), round(($ct_ind3/$total*100),0), round(($ct_ind4/$total*100),0), round(($ct_ind5/$total*100),0), round(($ct_ind6/$total*100),0), round(($ct_ind7/$total*100),0), round(($ct_ind8/$total*100),0), round(($ct_ind9/$total*100),0), round(($ct_ind10/$total*100),0), round(($ct_ind11/$total*100),0), round(($ct_ind12/$total*100),0), round(($ct_ind13/$total*100),0), round(($ct_ind14/$total*100),0), round(($ct_ind15/$total*100),0), round(($ct_ind16/$total*100),0), round(($ct_ind17/$total*100),0), round(($ct_ind18/$total*100),0), round(($ct_ind19/$total*100),0), round(($ct_ind20/$total*100),0), round(($ct_ind21/$total*100),0), round(($ct_ind22/$total*100),0)
		);
	}
		

###################### QUESTION #4 ######################

	// counters/containers for job level
	$ct_chief = 0;
	$ct_sup = 0;
	$ct_rank = 0;

	// get data from table (chief level)
	$query = "SELECT user_id FROM emp_survey_q4 WHERE answer_body='Chief level – General Manager/President/CEO'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_chief++;
	}

	// get data from table (supervisor level)
	$query = "SELECT user_id FROM emp_survey_q4 WHERE answer_body='Supervisory – Director/Managing Director/Supervisor'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sup++;
	}

	// get data from table (rank and file level)
	$query = "SELECT user_id FROM emp_survey_q4 WHERE answer_body='Rank and file'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_rank++;
	}

###################### QUESTION #5 ######################

	// counters/containers for number of UP hires
	$ct_up_hire = 0;

	// get data from table
	$query = "SELECT * FROM emp_survey_q5";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_up_hire = $ct_up_hire + $row['answer_body'];
	}

###################### QUESTION #6 ######################

	// counters/containers for agree/disagree
	$ct_sd = 0;
	$ct_d = 0;
	$ct_sa = 0;
	$ct_a = 0;

	// get data from table (strong disagree)
	$query = "SELECT user_id FROM emp_survey_q6 WHERE answer_body='Strongly Disagree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sd++;
	}

	// get data from table (disagree)
	$query = "SELECT user_id FROM emp_survey_q6 WHERE answer_body='Disagree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_d++;
	}

	// get data from table (agree)
	$query = "SELECT user_id FROM emp_survey_q6 WHERE answer_body='Agree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_a++;
	}

	// get data from table (strongly agree)
	$query = "SELECT user_id FROM emp_survey_q6 WHERE answer_body='Strongly Agree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sa++;
	}

###################### QUESTION #7 ######################
	$skills_arr = array(
		"Reading Comprehension", "Active Listening", "Writing Skills", 
		"Verbal Communication", "Mathematics Skills", "Scientific Literacy", 
		"Digital Literacy", "Critical Thinking", "Participatory Learning", 
		"Creative and Innovation", "Leadership Skills", "Social Awareness", 
		"Service Orientation", "Time Management", "Complex Problem Solving Skills", 
		"Judgment and Decision Making", "Systems Analysis and Evaluation"
	);

	// counters/containers for skill/importance
		$ct_read_un = 0; $ct_read_ofl = 0; $ct_read_im = 0; $ct_read_vim = 0;
		$ct_list_un = 0; $ct_list_ofl = 0; $ct_list_im = 0; $ct_list_vim = 0;
		$ct_writ_un = 0; $ct_writ_ofl = 0; $ct_writ_im = 0; $ct_writ_vim = 0;
		$ct_verb_un = 0; $ct_verb_ofl = 0; $ct_verb_im = 0; $ct_verb_vim = 0;
		$ct_math_un = 0; $ct_math_ofl = 0; $ct_math_im = 0; $ct_math_vim = 0;
		$ct_sci_un = 0; $ct_sci_ofl = 0; $ct_sci_im = 0; $ct_sci_vim = 0;
		$ct_dig_un = 0; $ct_dig_ofl = 0; $ct_dig_im = 0; $ct_dig_vim = 0;
		$ct_crit_un = 0; $ct_crit_ofl = 0; $ct_crit_im = 0; $ct_crit_vim = 0;
		$ct_part_un = 0; $ct_part_ofl = 0; $ct_part_im = 0; $ct_part_vim = 0;
		$ct_crea_un = 0; $ct_crea_ofl = 0; $ct_crea_im = 0; $ct_crea_vim = 0;
		$ct_lead_un = 0; $ct_lead_ofl = 0; $ct_lead_im = 0; $ct_lead_vim = 0;
		$ct_soca_un = 0; $ct_soca_ofl = 0; $ct_soca_im = 0; $ct_soca_vim = 0;
		$ct_serv_un = 0; $ct_serv_ofl = 0; $ct_serv_im = 0; $ct_serv_vim = 0;
		$ct_time_un = 0; $ct_time_ofl = 0; $ct_time_im = 0; $ct_time_vim = 0;
		$ct_prob_un = 0; $ct_prob_ofl = 0; $ct_prob_im = 0; $ct_prob_vim = 0;
		$ct_judg_un = 0; $ct_judg_ofl = 0; $ct_judg_im = 0; $ct_judg_vim = 0;
		$ct_sys_un = 0; $ct_sys_ofl = 0; $ct_sys_im = 0; $ct_sys_vim = 0;

	// get data from table (Reading Comprehension)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Reading Comprehension' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_read_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Reading Comprehension' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_read_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Reading Comprehension' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_read_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Reading Comprehension' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_read_vim++;
		}

	// get data from table (Active Listening)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Active Listening' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_list_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Active Listening' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_list_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Active Listening' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_list_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Active Listening' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_list_vim++;
		}

	// get data from table (Writing Skills)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Writing Skills' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_writ_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Writing Skills' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_writ_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Writing Skills' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_writ_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Writing Skills' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_writ_vim++;
		}

	// get data from table (Verbal Communication)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Verbal Communication' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_verb_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Verbal Communication' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_verb_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Verbal Communication' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_verb_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Verbal Communication' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_verb_vim++;
		}

	// get data from table (Mathematics Skills)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Mathematics Skills' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_math_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Mathematics Skills' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_math_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Mathematics Skills' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_math_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Mathematics Skills' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_math_vim++;
		}

	// get data from table (Scientific Literacy)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Scientific Literacy' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sci_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Scientific Literacy' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sci_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Scientific Literacy' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sci_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Scientific Literacy' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sci_vim++;
		}

	// get data from table (Digital Literacy)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Digital Literacy' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dig_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Digital Literacy' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dig_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Digital Literacy' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dig_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Digital Literacy' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dig_vim++;
		}

	// get data from table (Critical Thinking)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Critical Thinking' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crit_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Critical Thinking' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crit_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Critical Thinking' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crit_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Critical Thinking' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crit_vim++;
		}

	// get data from table (Participatory Learning)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Participatory Learning' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_part_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Participatory Learning' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_part_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Participatory Learning' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_part_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Participatory Learning' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_part_vim++;
		}

	// get data from table (Creative and Innovation)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Creative and Innovation' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crea_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Creative and Innovation' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crea_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Creative and Innovation' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crea_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Creative and Innovation' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crea_vim++;
		}

	// get data from table (Leadership Skills)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Leadership Skills' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_lead_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Leadership Skills' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_lead_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Leadership Skills' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_lead_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Leadership Skills' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_lead_vim++;
		}

	// get data from table (Social Awareness)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Social Awareness' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_soca_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Social Awareness' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_soca_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Social Awareness' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_soca_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Social Awareness' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_soca_vim++;
		}

	// get data from table (Service Orientation)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Service Orientation' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_serv_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Service Orientation' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_serv_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Service Orientation' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_serv_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Service Orientation' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_serv_vim++;
		}

	// get data from table (Time Management)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Time Management' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_time_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Time Management' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_time_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Time Management' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_time_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Time Management' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_time_vim++;
		}

	// get data from table (Complex Problem Solving Skills)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Complex Problem Solving Skills' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_prob_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Complex Problem Solving Skills' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_prob_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Complex Problem Solving Skills' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_prob_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Complex Problem Solving Skills' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_prob_vim++;
		}

	// get data from table (Judgment and Decision Making)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Judgment and Decision Making' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_judg_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Judgment and Decision Making' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_judg_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Judgment and Decision Making' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_judg_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Judgment and Decision Making' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_judg_vim++;
		}

	// get data from table (Systems Analysis and Evaluation)
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Systems Analysis and Evaluation' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sys_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Systems Analysis and Evaluation' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sys_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Systems Analysis and Evaluation' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sys_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q7 WHERE skill='Systems Analysis and Evaluation' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sys_vim++;
		}

###################### QUESTION #8 ######################

	// counters/containers for skill/satisfaction
		$ct_read_vu = 0; $ct_read_us = 0; $ct_read_sa = 0; $ct_read_vs = 0;
		$ct_list_vu = 0; $ct_list_us = 0; $ct_list_sa = 0; $ct_list_vs = 0;
		$ct_writ_vu = 0; $ct_writ_us = 0; $ct_writ_sa = 0; $ct_writ_vs = 0;
		$ct_verb_vu = 0; $ct_verb_us = 0; $ct_verb_sa = 0; $ct_verb_vs = 0;
		$ct_math_vu = 0; $ct_math_us = 0; $ct_math_sa = 0; $ct_math_vs = 0;
		$ct_sci_vu = 0; $ct_sci_us = 0; $ct_sci_sa = 0; $ct_sci_vs = 0;
		$ct_dig_vu = 0; $ct_dig_us = 0; $ct_dig_sa = 0; $ct_dig_vs = 0;
		$ct_crit_vu = 0; $ct_crit_us = 0; $ct_crit_sa = 0; $ct_crit_vs = 0;
		$ct_part_vu = 0; $ct_part_us = 0; $ct_part_sa = 0; $ct_part_vs = 0;
		$ct_crea_vu = 0; $ct_crea_us = 0; $ct_crea_sa = 0; $ct_crea_vs = 0;
		$ct_lead_vu = 0; $ct_lead_us = 0; $ct_lead_sa = 0; $ct_lead_vs = 0;
		$ct_soca_vu = 0; $ct_soca_us = 0; $ct_soca_sa = 0; $ct_soca_vs = 0;
		$ct_serv_vu = 0; $ct_serv_us = 0; $ct_serv_sa = 0; $ct_serv_vs = 0;
		$ct_time_vu = 0; $ct_time_us = 0; $ct_time_sa = 0; $ct_time_vs = 0;
		$ct_prob_vu = 0; $ct_prob_us = 0; $ct_prob_sa = 0; $ct_prob_vs = 0;
		$ct_judg_vu = 0; $ct_judg_us = 0; $ct_judg_sa = 0; $ct_judg_vs = 0;
		$ct_sys_vu = 0; $ct_sys_us = 0; $ct_sys_sa = 0; $ct_sys_vs = 0;

	// get data from table (Reading Comprehension)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Reading Comprehension' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_read_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Reading Comprehension' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_read_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Reading Comprehension' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_read_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Reading Comprehension' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_read_vs++;
		}

	// get data from table (Active Listening)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Active Listening' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_list_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Active Listening' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_list_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Active Listening' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_list_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Active Listening' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_list_vs++;
		}

	// get data from table (Writing Skills)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Writing Skills' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_writ_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Writing Skills' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_writ_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Writing Skills' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_writ_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Writing Skills' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_writ_vs++;
		}

	// get data from table (Verbal Communication)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Verbal Communication' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_verb_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Verbal Communication' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_verb_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Verbal Communication' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_verb_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Verbal Communication' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_verb_vs++;
		}

	// get data from table (Mathematics Skills)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Mathematics Skills' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_math_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Mathematics Skills' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_math_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Mathematics Skills' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_math_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Mathematics Skills' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_math_vs++;
		}

	// get data from table (Scientific Literacy)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Scientific Literacy' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sci_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Scientific Literacy' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sci_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Scientific Literacy' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sci_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Scientific Literacy' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sci_vs++;
		}

	// get data from table (Digital Literacy)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Digital Literacy' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dig_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Digital Literacy' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dig_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Digital Literacy' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dig_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Digital Literacy' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dig_vs++;
		}

	// get data from table (Critical Thinking)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Critical Thinking' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crit_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Critical Thinking' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crit_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Critical Thinking' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crit_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Critical Thinking' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crit_vs++;
		}

	// get data from table (Participatory Learning)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Participatory Learning' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_part_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Participatory Learning' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_part_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Participatory Learning' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_part_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Participatory Learning' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_part_vs++;
		}

	// get data from table (Creative and Innovation)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Creative and Innovation' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crea_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Creative and Innovation' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crea_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Creative and Innovation' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crea_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Creative and Innovation' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_crea_vs++;
		}

	// get data from table (Leadership Skills)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Leadership Skills' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_lead_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Leadership Skills' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_lead_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Leadership Skills' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_lead_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Leadership Skills' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_lead_vs++;
		}

	// get data from table (Social Awareness)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Social Awareness' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_soca_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Social Awareness' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_soca_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Social Awareness' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_soca_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Social Awareness' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_soca_vs++;
		}

	// get data from table (Service Orientation)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Service Orientation' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_serv_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Service Orientation' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_serv_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Service Orientation' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_serv_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Service Orientation' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_serv_vs++;
		}

	// get data from table (Time Management)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Time Management' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_time_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Time Management' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_time_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Time Management' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_time_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Time Management' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_time_vs++;
		}

	// get data from table (Complex Problem Solving Skills)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Complex Problem Solving Skills' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_prob_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Complex Problem Solving Skills' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_prob_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Complex Problem Solving Skills' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_prob_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Complex Problem Solving Skills' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_prob_vs++;
		}

	// get data from table (Judgment and Decision Making)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Judgment and Decision Making' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_judg_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Judgment and Decision Making' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_judg_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Judgment and Decision Making' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_judg_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Judgment and Decision Making' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_judg_vs++;
		}

	// get data from table (Systems Analysis and Evaluation)
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Systems Analysis and Evaluation' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sys_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Systems Analysis and Evaluation' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sys_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Systems Analysis and Evaluation' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sys_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q8 WHERE skill='Systems Analysis and Evaluation' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_sys_vs++;
		}

###################### QUESTION #9 ######################

	// counters/containers for likely/unlikely
	$ct_9vu = 0;
	$ct_9u = 0;
	$ct_9l = 0;
	$ct_9vl = 0;

	// get data from table (very unlikely)
	$query = "SELECT user_id FROM emp_survey_q9 WHERE answer_body='Very Unlikely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_9vu++;
	}

	// get data from table (unlikely)
	$query = "SELECT user_id FROM emp_survey_q9 WHERE answer_body='Unlikely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_9u++;
	}

	// get data from table (likely)
	$query = "SELECT user_id FROM emp_survey_q9 WHERE answer_body='Likely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_9l++;
	}

	// get data from table (very likely)
	$query = "SELECT user_id FROM emp_survey_q9 WHERE answer_body='Very Likely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_9vl++;
	}

###################### QUESTION #10 ######################

	// counters/containers for likely/unlikely
	$ct_10vu = 0;
	$ct_10u = 0;
	$ct_10l = 0;
	$ct_10vl = 0;

	// get data from table (very unlikely)
	$query = "SELECT user_id FROM emp_survey_q10 WHERE answer_body='Very Unlikely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_10vu++;
	}

	// get data from table (unlikely)
	$query = "SELECT user_id FROM emp_survey_q10 WHERE answer_body='Unlikely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_10u++;
	}

	// get data from table (likely)
	$query = "SELECT user_id FROM emp_survey_q10 WHERE answer_body='Likely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_10l++;
	}

	// get data from table (very likely)
	$query = "SELECT user_id FROM emp_survey_q10 WHERE answer_body='Very Likely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_10vl++;
	}

###################### QUESTION #11 ######################

	$dmcs_skills_arr = array(
		"Willing to undergo training and/or further education", 
		"Has strong and professional work ethic", 
		"Willing to share knowledge and expertise within the company and/or community", 
		"Willing and has a positive attitude towards working with others", 
		"Is able to learn quickly the basic company operations", 
		"Is able to provide solutions and contribute to the growth of the company", 
		"Is able to master company operations", 
		"Effective in both oral and written communication", 
		"Computer and Technical Literate", 
		"Effective and efficient in accomplishing tasks", 
		"Able to provide innovative ideas to the company"
	);
	
	// counters/containers for dmcs skill/importance
		$ct_dmcs1_un = 0; $ct_dmcs1_ofl = 0; $ct_dmcs1_im = 0; $ct_dmcs1_vim = 0;
		$ct_dmcs2_un = 0; $ct_dmcs2_ofl = 0; $ct_dmcs2_im = 0; $ct_dmcs2_vim = 0;
		$ct_dmcs3_un = 0; $ct_dmcs3_ofl = 0; $ct_dmcs3_im = 0; $ct_dmcs3_vim = 0;
		$ct_dmcs4_un = 0; $ct_dmcs4_ofl = 0; $ct_dmcs4_im = 0; $ct_dmcs4_vim = 0;
		$ct_dmcs5_un = 0; $ct_dmcs5_ofl = 0; $ct_dmcs5_im = 0; $ct_dmcs5_vim = 0;
		$ct_dmcs6_un = 0; $ct_dmcs6_ofl = 0; $ct_dmcs6_im = 0; $ct_dmcs6_vim = 0;
		$ct_dmcs7_un = 0; $ct_dmcs7_ofl = 0; $ct_dmcs7_im = 0; $ct_dmcs7_vim = 0;
		$ct_dmcs8_un = 0; $ct_dmcs8_ofl = 0; $ct_dmcs8_im = 0; $ct_dmcs8_vim = 0;
		$ct_dmcs9_un = 0; $ct_dmcs9_ofl = 0; $ct_dmcs9_im = 0; $ct_dmcs9_vim = 0;
		$ct_dmcs10_un = 0; $ct_dmcs10_ofl = 0; $ct_dmcs10_im = 0; $ct_dmcs10_vim = 0;
		$ct_dmcs11_un = 0; $ct_dmcs11_ofl = 0; $ct_dmcs11_im = 0; $ct_dmcs11_vim = 0;

	// get data from table (DMCS 1)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing to undergo training and/or further education' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing to undergo training and/or further education' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing to undergo training and/or further education' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing to undergo training and/or further education' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_vim++;
		}

	// get data from table (DMCS 2)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Has strong and professional work ethic' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Has strong and professional work ethic' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Has strong and professional work ethic' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Has strong and professional work ethic' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_vim++;
		}

	// get data from table (DMCS 3)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing to share knowledge and expertise within the company and/or community' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing to share knowledge and expertise within the company and/or community' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing to share knowledge and expertise within the company and/or community' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing to share knowledge and expertise within the company and/or community' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_vim++;
		}

	// get data from table (DMCS 4)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing and has a positive attitude towards working with others' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing and has a positive attitude towards working with others' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing and has a positive attitude towards working with others' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Willing and has a positive attitude towards working with others' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_vim++;
		}

	// get data from table (DMCS 5)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to learn quickly the basic company operations' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to learn quickly the basic company operations' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to learn quickly the basic company operations' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to learn quickly the basic company operations' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_vim++;
		}

	// get data from table (DMCS 6)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to provide solutions and contribute to the growth of the company' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to provide solutions and contribute to the growth of the company' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to provide solutions and contribute to the growth of the company' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to provide solutions and contribute to the growth of the company' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_vim++;
		}

	// get data from table (DMCS 7)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to master company operations' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to master company operations' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to master company operations' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Is able to master company operations' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_vim++;
		}

	// get data from table (DMCS 8)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Effective in both oral and written communication' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Effective in both oral and written communication' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Effective in both oral and written communication' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Effective in both oral and written communication' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_vim++;
		}

	// get data from table (DMCS 9)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Computer and Technical Literate' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Computer and Technical Literate' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Computer and Technical Literate' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Computer and Technical Literate' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_vim++;
		}

	// get data from table (DMCS 10)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Effective and efficient in accomplishing tasks' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Effective and efficient in accomplishing tasks' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Effective and efficient in accomplishing tasks' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Effective and efficient in accomplishing tasks' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_vim++;
		}

	// get data from table (DMCS 11)
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Able to provide innovative ideas to the company' AND answer_body='Unimportant'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_un++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Able to provide innovative ideas to the company' AND answer_body='Of Little Importance'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_ofl++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Able to provide innovative ideas to the company' AND answer_body='Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_im++;
		}
		$query = "SELECT user_id FROM emp_survey_q11 WHERE skill='Able to provide innovative ideas to the company' AND answer_body='Very Important'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_vim++;
		}

###################### QUESTION #12 ######################

	// counters/containers for dmcs skill/satisfaction
		$ct_dmcs1_vu = 0; $ct_dmcs1_us = 0; $ct_dmcs1_sa = 0; $ct_dmcs1_vs = 0;
		$ct_dmcs2_vu = 0; $ct_dmcs2_us = 0; $ct_dmcs2_sa = 0; $ct_dmcs2_vs = 0;
		$ct_dmcs3_vu = 0; $ct_dmcs3_us = 0; $ct_dmcs3_sa = 0; $ct_dmcs3_vs = 0;
		$ct_dmcs4_vu = 0; $ct_dmcs4_us = 0; $ct_dmcs4_sa = 0; $ct_dmcs4_vs = 0;
		$ct_dmcs5_vu = 0; $ct_dmcs5_us = 0; $ct_dmcs5_sa = 0; $ct_dmcs5_vs = 0;
		$ct_dmcs6_vu = 0; $ct_dmcs6_us = 0; $ct_dmcs6_sa = 0; $ct_dmcs6_vs = 0;
		$ct_dmcs7_vu = 0; $ct_dmcs7_us = 0; $ct_dmcs7_sa = 0; $ct_dmcs7_vs = 0;
		$ct_dmcs8_vu = 0; $ct_dmcs8_us = 0; $ct_dmcs8_sa = 0; $ct_dmcs8_vs = 0;
		$ct_dmcs9_vu = 0; $ct_dmcs9_us = 0; $ct_dmcs9_sa = 0; $ct_dmcs9_vs = 0;
		$ct_dmcs10_vu = 0; $ct_dmcs10_us = 0; $ct_dmcs10_sa = 0; $ct_dmcs10_vs = 0;
		$ct_dmcs11_vu = 0; $ct_dmcs11_us = 0; $ct_dmcs11_sa = 0; $ct_dmcs11_vs = 0;

	// get data from table (DMCS 1)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing to undergo training and/or further education' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing to undergo training and/or further education' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing to undergo training and/or further education' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing to undergo training and/or further education' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_vs++;
		}

	// get data from table (DMCS 2)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Has strong and professional work ethic' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Has strong and professional work ethic' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Has strong and professional work ethic' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Has strong and professional work ethic' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_vs++;
		}

	// get data from table (DMCS 3)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing to share knowledge and expertise within the company and/or community' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing to share knowledge and expertise within the company and/or community' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing to share knowledge and expertise within the company and/or community' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing to share knowledge and expertise within the company and/or community' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_vs++;
		}

	// get data from table (DMCS 4)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing and has a positive attitude towards working with others' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing and has a positive attitude towards working with others' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing and has a positive attitude towards working with others' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Willing and has a positive attitude towards working with others' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_vs++;
		}

	// get data from table (DMCS 5)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to learn quickly the basic company operations' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to learn quickly the basic company operations' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to learn quickly the basic company operations' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to learn quickly the basic company operations' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_vs++;
		}

	// get data from table (DMCS 6)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to provide solutions and contribute to the growth of the company' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to provide solutions and contribute to the growth of the company' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to provide solutions and contribute to the growth of the company' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to provide solutions and contribute to the growth of the company' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_vs++;
		}

	// get data from table (DMCS 7)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to master company operations' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to master company operations' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to master company operations' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Is able to master company operations' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_vs++;
		}

	// get data from table (DMCS 8)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Effective in both oral and written communication' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Effective in both oral and written communication' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Effective in both oral and written communication' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Effective in both oral and written communication' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_vs++;
		}

	// get data from table (DMCS 9)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Computer and Technical Literate' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Computer and Technical Literate' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Computer and Technical Literate' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Computer and Technical Literate' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_vs++;
		}

	// get data from table (DMCS 10)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Effective and efficient in accomplishing tasks' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Effective and efficient in accomplishing tasks' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Effective and efficient in accomplishing tasks' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Effective and efficient in accomplishing tasks' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_vs++;
		}

	// get data from table (DMCS 11)
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Able to provide innovative ideas to the company' AND answer_body='Very Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_vu++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Able to provide innovative ideas to the company' AND answer_body='Unsatisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_us++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Able to provide innovative ideas to the company' AND answer_body='Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_sa++;
		}
		$query = "SELECT user_id FROM emp_survey_q12 WHERE skill='Able to provide innovative ideas to the company' AND answer_body='Very Satisfied'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_vs++;
		}

###################### QUESTION #13 ######################

	// counters/containers for actions
	$ct_des = 0;
	$ct_prac = 0;
	$ct_sec = 0;
	$ct_post = 0;
	$ct_other13 = 0;
	$ct_other13txt = '';
	$string13 = '';

	// get data from table (design)
	$query = "SELECT user_id FROM emp_survey_q13 WHERE answer_body='Design courses that are more relevant to the needs of employers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_des++;
	}

	// get data from table (practical)
	$query = "SELECT user_id FROM emp_survey_q13 WHERE answer_body='Include practical experience as part of the academic programs'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_prac++;
	}

	// get data from table (sector)
	$query = "SELECT user_id FROM emp_survey_q13 WHERE answer_body='Include sector specific job placements as an integral part of the degree program'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sec++;
	}

	// get data from table (post-grad)
	$query = "SELECT user_id FROM emp_survey_q13 WHERE answer_body='Provide better post-graduation support (facilitate relations between graduates and companies/organizations)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_post++;
	}

	// get data from table (other)
	$query = "SELECT user_id, answer_others FROM emp_survey_q13 WHERE answer_body='other'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_other13++;
		
		// for other answers
		$string13 = $string13 . ', ' . $row['answer_others'];
		$ct_other13txt = ltrim($string13, ', ');
	}

###################### QUESTION #14 ######################

	// counters/containers for importance
	$ct_un = 0;
	$ct_of = 0;
	$ct_mod = 0;
	$ct_im = 0;

	// get data from table (very unlikely)
	$query = "SELECT user_id FROM emp_survey_q14 WHERE answer_body='Unimportant'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_un++;
	}

	// get data from table (unlikely)
	$query = "SELECT user_id FROM emp_survey_q14 WHERE answer_body='Of Little Importance'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_of++;
	}

	// get data from table (likely)
	$query = "SELECT user_id FROM emp_survey_q14 WHERE answer_body='Moderately part Important'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_mod++;
	}

	// get data from table (very likely)
	$query = "SELECT user_id FROM emp_survey_q14 WHERE answer_body='Important'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_im++;
	}

###################### QUESTION #15 ######################

	// counters/containers for comments
	$ct_yes15 = '';
	$string15 = '';

	$emp_string15_array = array();

	// get data from table
	$query = "SELECT answer_yes FROM emp_survey_q15 WHERE answer_body='Yes'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$string15 = $string15 . '; ' . $row['answer_yes'];
		$ct_yes15 = ltrim($string15, '; ');

		$emp_string15_array[] = $row;
	}
	

###################### QUESTION #16 ######################

	// counters/containers for feedback
	$ct_yes16 = '';
	$string16 = '';

	$emp_string16_array = array();

	// get data from table
	$query = "SELECT answer_yes FROM emp_survey_q16 WHERE answer_body='Yes'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$string16 = $string16 . '; ' . $row['answer_yes'];
		$ct_yes16 = ltrim($string16, '; ');

		$emp_string16_array[] = $row;
	}

###################### QUESTION #17 ######################

	// counters/containers for strengths
	$ct_yes17 = '';
	$string17 = '';

	$emp_string17_array = array();

	// get data from table
	$query = "SELECT answer_yes FROM emp_survey_q17 WHERE answer_body='Yes'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$string17 = $string17 . '; ' . $row['answer_yes'];
		$ct_yes17 = ltrim($string17, '; ');

		$emp_string17_array[] = $row;
	}


?>