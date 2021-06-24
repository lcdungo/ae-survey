<?php

require ('emp_data_chart.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body onload="<?php header("Content-Type: application/xls"); header("Content-Disposition: attachment; filename=emp_survey_results.xls"); ?>">
	<h4>EMPLOYER SATISFACTION SURVEY SUMMARY OF RESULTS<br>
            Total Respondents: <?php echo $total ; ?> <br>
            Date of Generation: <?php echo date("m/d/Y"); ?></h4><br>
	<table id="table-emp-table1">
        <thead>
            <tr>
                <th>Questions</th>
                <th>Answers</th>
                <th># of Respondents</th>
                <th>Percentage</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <!-- QUESTION # 1 -->
            <tr>
                <td>1. Sector of Economy</td>
                <td>Public</td>
                <td><?php echo $ct_pub ; ?></td>
                <td><?php echo round(($ct_pub/$total*100),0) ; ?>%</td>
            </tr>
            <tr>
                <td></td>
                <td>Private</td>
                <td><?php echo $ct_priv ; ?></td>
                <td><?php echo round(($ct_priv/$total*100),0) ; ?>%</td>
            </tr>
            <tr>
                <td></td>
                <td>Others: <?php echo $ct_other1txt ; ?></td>
                <td><?php echo $ct_other1 ; ?></td>
                <td><?php echo round(($ct_other1/$total*100),0) ; ?>%</td>
            </tr>
        <!-- QUESTION # 2 -->
            <tr>
                <td>2. Location</td>
                <td>Philippines</td>
                <td><?php echo $ct_ph ; ?></td>
                <td><?php echo round(($ct_ph/$total*100),0) ; ?>%</td>
            </tr>
            <tr>
                <td></td>
                <td>Abroad</td>
                <td><?php echo $ct_ab ; ?></td>
                <td><?php echo round(($ct_ab/$total*100),0) ; ?>%</td>
            </tr>
        <!-- QUESTION # 2.1 -->
        <?php for ($i=0; $i < 25; $i++) { if ($ct_abroad_arr[$i] != '0') {?>
            <tr>
                <td></td>
                <td><?php echo $abroad_array[$i] ; ?></td>
                <td><?php echo $ct_abroad_arr[$i] ; ?></td>
                <td><?php echo $ct_abroad_arr_percent[$i] ; ?>%</td>
            </tr>
        <?php } }?>
            
        <!-- QUESTION # 3 -->
            <tr>
                <td>3. Industry/Business Sector</td>
                <td><?php echo $ques3_arr[0]; ?></td>
                <td><?php echo $ct_ind1 ; ?></td>
                <td><?php echo round(($ct_ind1/$total*100),0) ; ?>%</td>
            </tr>
            <?php for ($i=1; $i < 22; $i++) { if ($ct_ind_arr[$i] != '0') {?>
                <tr>
                    <td></td>
                    <td><?php echo $ques3_arr[$i]; ?></td>
                    <td><?php echo $ct_ind_arr[$i] ; ?></td>
                    <td><?php echo $ct_ind_arr_percent[$i] ; ?>%</td>
                </tr>
            <?php } }?>    
            
            <tr>
                <td></td>
                <td>Others: <?php echo $ct_ind_other; ?></td>
                <td><?php echo $ct_other3 ; ?></td>
                <td><?php echo round(($ct_other3/$total*100),0) ; ?>%</td>
            </tr>
        <!-- QUESTION # 4 -->
            <tr>
                <td>4. Position in Company/Organization</td>
                <td>Chief level</td>
                <td><?php echo $ct_chief ; ?></td>
                <td><?php echo round(($ct_chief/$total*100),0) ; ?>%</td>
            </tr>
            <tr>
                <td></td>
                <td>Supervisory</td>
                <td><?php echo $ct_sup ; ?></td>
                <td><?php echo round(($ct_sup/$total*100),0) ; ?>%</td>
            </tr>
            <tr>
                <td></td>
                <td>Rank and file</td>
                <td><?php echo $ct_rank ; ?></td>
                <td><?php echo round(($ct_rank/$total*100),0) ; ?>%</td>
            </tr>
        <!-- QUESTION # 5 -->
            <tr>
                <td>5. Number of Employees from UP</td>
                <td>Current Total</td>
                <td><?php echo $ct_up_hire ; ?></td>
                <td><?php echo round(($ct_up_hire/$total),0) ; ?> (Average)</td>
            </tr>
        <!-- QUESTION # 6 -->
            <tr>
                <td>6. UP graduates recruited in the last three to five years have the skills to work in company/organization</td>
                <td>Strongly Agree</td>
                <td><?php echo $ct_sa ; ?></td>
                <td><?php echo round(($ct_sa/$total*100),0) ; ?>%</td>
            </tr>
            <tr>
                <td></td>
                <td>Agree</td>
                <td><?php echo $ct_a ; ?></td>
                <td><?php echo round(($ct_a/$total*100),0) ; ?>%</td>
            </tr>
            <tr>
                <td></td>
                <td>Disagree</td>
                <td><?php echo $ct_d ; ?></td>
                <td><?php echo round(($ct_d/$total*100),0) ; ?>%</td>
            </tr>
            <tr>
                <td></td>
                <td>Strongly Disagree</td>
                <td><?php echo $ct_sd ; ?></td>
                <td><?php echo round(($ct_sd/$total*100),0) ; ?>%</td>
            </tr>
        </tbody>
    </table>
    <table id="table-emp-table1">
        <thead>
            <tr>
                <th>Questions</th>
                <th>Skill</th>
                <th>Importance</th>
                <th># of Respondents</th>
                <th>Percentage</th>
                <th>Satisfaction</th>
                <th># of Respondents</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
        <!-- QUESTION # 7 - 8 -->
            <!-- SKILL 1 -->
                <tr>
                    <td>7-8. General Skills</td>
                    <td><?php echo $skills_arr[0]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_read_vim ; ?></td>
                    <td><?php echo round(($ct_read_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_read_vs ; ?></td>
                    <td><?php echo round(($ct_read_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_read_im ; ?></td>
                    <td><?php echo round(($ct_read_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_read_sa ; ?></td>
                    <td><?php echo round(($ct_read_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_read_ofl ; ?></td>
                    <td><?php echo round(($ct_read_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_read_us ; ?></td>
                    <td><?php echo round(($ct_read_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_read_un ; ?></td>
                    <td><?php echo round(($ct_read_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_read_vu ; ?></td>
                    <td><?php echo round(($ct_read_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 2 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[1]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_list_vim ; ?></td>
                    <td><?php echo round(($ct_list_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_list_vs ; ?></td>
                    <td><?php echo round(($ct_list_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_list_im ; ?></td>
                    <td><?php echo round(($ct_list_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_list_sa ; ?></td>
                    <td><?php echo round(($ct_list_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_list_ofl ; ?></td>
                    <td><?php echo round(($ct_list_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_list_us ; ?></td>
                    <td><?php echo round(($ct_list_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_list_un ; ?></td>
                    <td><?php echo round(($ct_list_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_list_vu ; ?></td>
                    <td><?php echo round(($ct_list_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 3 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[2]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_writ_vim ; ?></td>
                    <td><?php echo round(($ct_writ_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_writ_vs ; ?></td>
                    <td><?php echo round(($ct_writ_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_writ_im ; ?></td>
                    <td><?php echo round(($ct_writ_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_writ_sa ; ?></td>
                    <td><?php echo round(($ct_writ_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_writ_ofl ; ?></td>
                    <td><?php echo round(($ct_writ_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_writ_us ; ?></td>
                    <td><?php echo round(($ct_writ_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_writ_un ; ?></td>
                    <td><?php echo round(($ct_writ_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_writ_vu ; ?></td>
                    <td><?php echo round(($ct_writ_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 4 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[3]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_verb_vim ; ?></td>
                    <td><?php echo round(($ct_verb_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_verb_vs ; ?></td>
                    <td><?php echo round(($ct_verb_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_verb_im ; ?></td>
                    <td><?php echo round(($ct_verb_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_verb_sa ; ?></td>
                    <td><?php echo round(($ct_verb_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_verb_ofl ; ?></td>
                    <td><?php echo round(($ct_verb_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_verb_us ; ?></td>
                    <td><?php echo round(($ct_verb_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_verb_un ; ?></td>
                    <td><?php echo round(($ct_verb_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_verb_vu ; ?></td>
                    <td><?php echo round(($ct_verb_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 5 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[4]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_math_vim ; ?></td>
                    <td><?php echo round(($ct_math_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_math_vs ; ?></td>
                    <td><?php echo round(($ct_math_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_math_im ; ?></td>
                    <td><?php echo round(($ct_math_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_math_sa ; ?></td>
                    <td><?php echo round(($ct_math_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_math_ofl ; ?></td>
                    <td><?php echo round(($ct_math_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_math_us ; ?></td>
                    <td><?php echo round(($ct_math_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_math_un ; ?></td>
                    <td><?php echo round(($ct_math_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_math_vu ; ?></td>
                    <td><?php echo round(($ct_math_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 6 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[5]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_sci_vim ; ?></td>
                    <td><?php echo round(($ct_sci_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_sci_vs ; ?></td>
                    <td><?php echo round(($ct_sci_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_sci_im ; ?></td>
                    <td><?php echo round(($ct_sci_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_sci_sa ; ?></td>
                    <td><?php echo round(($ct_sci_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_sci_ofl ; ?></td>
                    <td><?php echo round(($ct_sci_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_sci_us ; ?></td>
                    <td><?php echo round(($ct_sci_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>>
                    <td><?php echo $ct_sci_un ; ?></td>
                    <td><?php echo round(($ct_sci_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_sci_vu ; ?></td>
                    <td><?php echo round(($ct_sci_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 7 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[6]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dig_vim ; ?></td>
                    <td><?php echo round(($ct_dig_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dig_vs ; ?></td>
                    <td><?php echo round(($ct_dig_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dig_im ; ?></td>
                    <td><?php echo round(($ct_dig_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dig_sa ; ?></td>
                    <td><?php echo round(($ct_dig_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dig_ofl ; ?></td>
                    <td><?php echo round(($ct_dig_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dig_us ; ?></td>
                    <td><?php echo round(($ct_dig_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dig_un ; ?></td>
                    <td><?php echo round(($ct_dig_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dig_vu ; ?></td>
                    <td><?php echo round(($ct_dig_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 8 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[7]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_crit_vim ; ?></td>
                    <td><?php echo round(($ct_crit_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_crit_vs ; ?></td>
                    <td><?php echo round(($ct_crit_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_crit_im ; ?></td>
                    <td><?php echo round(($ct_crit_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_crit_sa ; ?></td>
                    <td><?php echo round(($ct_crit_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_crit_ofl ; ?></td>
                    <td><?php echo round(($ct_crit_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_crit_us ; ?></td>
                    <td><?php echo round(($ct_crit_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_crit_un ; ?></td>
                    <td><?php echo round(($ct_crit_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_crit_vu ; ?></td>
                    <td><?php echo round(($ct_crit_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 9 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[8]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_part_vim ; ?></td>
                    <td><?php echo round(($ct_part_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_part_vs ; ?></td>
                    <td><?php echo round(($ct_part_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_part_im ; ?></td>
                    <td><?php echo round(($ct_part_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_part_sa ; ?></td>
                    <td><?php echo round(($ct_part_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_part_ofl ; ?></td>
                    <td><?php echo round(($ct_part_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_part_us ; ?></td>
                    <td><?php echo round(($ct_part_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_part_un ; ?></td>
                    <td><?php echo round(($ct_part_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_part_vu ; ?></td>
                    <td><?php echo round(($ct_part_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 10 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[9]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_crea_vim ; ?></td>
                    <td><?php echo round(($ct_crea_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_crea_vs ; ?></td>
                    <td><?php echo round(($ct_crea_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_crea_im ; ?></td>
                    <td><?php echo round(($ct_crea_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_crea_sa ; ?></td>
                    <td><?php echo round(($ct_crea_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_crea_ofl ; ?></td>
                    <td><?php echo round(($ct_crea_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_crea_us ; ?></td>
                    <td><?php echo round(($ct_crea_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_crea_un ; ?></td>
                    <td><?php echo round(($ct_crea_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_crea_vu ; ?></td>
                    <td><?php echo round(($ct_crea_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 11 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[10]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_lead_vim ; ?></td>
                    <td><?php echo round(($ct_lead_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_lead_vs ; ?></td>
                    <td><?php echo round(($ct_lead_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_lead_im ; ?></td>
                    <td><?php echo round(($ct_lead_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_lead_sa ; ?></td>
                    <td><?php echo round(($ct_lead_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_lead_ofl ; ?></td>
                    <td><?php echo round(($ct_lead_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_lead_us ; ?></td>
                    <td><?php echo round(($ct_lead_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_lead_un ; ?></td>
                    <td><?php echo round(($ct_lead_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_lead_vu ; ?></td>
                    <td><?php echo round(($ct_lead_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 12 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[11]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_soca_vim ; ?></td>
                    <td><?php echo round(($ct_soca_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_soca_vs ; ?></td>
                    <td><?php echo round(($ct_soca_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_soca_im ; ?></td>
                    <td><?php echo round(($ct_soca_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_soca_sa ; ?></td>
                    <td><?php echo round(($ct_soca_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_soca_ofl ; ?></td>
                    <td><?php echo round(($ct_soca_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_soca_us ; ?></td>
                    <td><?php echo round(($ct_soca_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_soca_un ; ?></td>
                    <td><?php echo round(($ct_soca_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_soca_vu ; ?></td>
                    <td><?php echo round(($ct_soca_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 13 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[12]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_serv_vim ; ?></td>
                    <td><?php echo round(($ct_serv_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_serv_vs ; ?></td>
                    <td><?php echo round(($ct_serv_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_serv_im ; ?></td>
                    <td><?php echo round(($ct_serv_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_serv_sa ; ?></td>
                    <td><?php echo round(($ct_serv_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_serv_ofl ; ?></td>
                    <td><?php echo round(($ct_serv_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_serv_us ; ?></td>
                    <td><?php echo round(($ct_serv_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_serv_un ; ?></td>
                    <td><?php echo round(($ct_serv_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_serv_vu ; ?></td>
                    <td><?php echo round(($ct_serv_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 14 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[13]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_time_vim ; ?></td>
                    <td><?php echo round(($ct_time_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_time_vs ; ?></td>
                    <td><?php echo round(($ct_time_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_time_im ; ?></td>
                    <td><?php echo round(($ct_time_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_time_sa ; ?></td>
                    <td><?php echo round(($ct_time_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_time_ofl ; ?></td>
                    <td><?php echo round(($ct_time_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_time_us ; ?></td>
                    <td><?php echo round(($ct_time_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_time_un ; ?></td>
                    <td><?php echo round(($ct_time_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_time_vu ; ?></td>
                    <td><?php echo round(($ct_time_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 15 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[14]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_prob_vim ; ?></td>
                    <td><?php echo round(($ct_prob_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_prob_vs ; ?></td>
                    <td><?php echo round(($ct_prob_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_prob_im ; ?></td>
                    <td><?php echo round(($ct_prob_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_prob_sa ; ?></td>
                    <td><?php echo round(($ct_prob_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_prob_ofl ; ?></td>
                    <td><?php echo round(($ct_prob_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_prob_us ; ?></td>
                    <td><?php echo round(($ct_prob_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_prob_un ; ?></td>
                    <td><?php echo round(($ct_prob_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_prob_vu ; ?></td>
                    <td><?php echo round(($ct_prob_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 16 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[15]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_judg_vim ; ?></td>
                    <td><?php echo round(($ct_judg_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_judg_vs ; ?></td>
                    <td><?php echo round(($ct_judg_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_judg_im ; ?></td>
                    <td><?php echo round(($ct_judg_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_judg_sa ; ?></td>
                    <td><?php echo round(($ct_judg_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_judg_ofl ; ?></td>
                    <td><?php echo round(($ct_judg_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_judg_us ; ?></td>
                    <td><?php echo round(($ct_judg_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_judg_un ; ?></td>
                    <td><?php echo round(($ct_judg_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_judg_vu ; ?></td>
                    <td><?php echo round(($ct_judg_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- SKILL 17 -->
                <tr>
                    <td></td>
                    <td><?php echo $skills_arr[16]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_sys_vim ; ?></td>
                    <td><?php echo round(($ct_sys_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_sys_vs ; ?></td>
                    <td><?php echo round(($ct_sys_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_sys_im ; ?></td>
                    <td><?php echo round(($ct_sys_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_sys_sa ; ?></td>
                    <td><?php echo round(($ct_sys_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_sys_ofl ; ?></td>
                    <td><?php echo round(($ct_sys_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_sys_us ; ?></td>
                    <td><?php echo round(($ct_sys_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_sys_un ; ?></td>
                    <td><?php echo round(($ct_sys_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_sys_vu ; ?></td>
                    <td><?php echo round(($ct_sys_vu/$total*100),0) ; ?>%</td>
                </tr>
        <!-- QUESTION # 11 - 12 -->
            <!-- DMCS SKILL 1 -->
                <tr>
                    <td>11-12. DMCS Skills</td>
                    <td><?php echo $dmcs_skills_arr[0]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs1_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs1_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs1_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs1_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs1_im ; ?></td>
                    <td><?php echo round(($ct_dmcs1_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs1_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs1_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs1_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs1_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs1_us ; ?></td>
                    <td><?php echo round(($ct_dmcs1_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs1_un ; ?></td>
                    <td><?php echo round(($ct_dmcs1_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs1_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs1_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- DMCS SKILL 2 -->
                <tr>
                    <td></td>
                    <td><?php echo $dmcs_skills_arr[1]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs2_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs2_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs2_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs2_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs2_im ; ?></td>
                    <td><?php echo round(($ct_dmcs2_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs2_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs2_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs2_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs2_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs2_us ; ?></td>
                    <td><?php echo round(($ct_dmcs2_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs2_un ; ?></td>
                    <td><?php echo round(($ct_dmcs2_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs2_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs2_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- DMCS SKILL 3 -->
                <tr>
                    <td></td>
                    <td><?php echo $dmcs_skills_arr[2]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs3_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs3_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs3_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs3_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs3_im ; ?></td>
                    <td><?php echo round(($ct_dmcs3_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs3_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs3_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs3_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs3_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs3_us ; ?></td>
                    <td><?php echo round(($ct_dmcs3_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs3_un ; ?></td>
                    <td><?php echo round(($ct_dmcs3_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs3_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs3_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- DMCS SKILL 4 -->
                <tr>
                    <td></td>
                    <td><?php echo $dmcs_skills_arr[3]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs4_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs4_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs4_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs4_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs4_im ; ?></td>
                    <td><?php echo round(($ct_dmcs4_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs4_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs4_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs4_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs4_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs4_us ; ?></td>
                    <td><?php echo round(($ct_dmcs4_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs4_un ; ?></td>
                    <td><?php echo round(($ct_dmcs4_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs4_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs4_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- DMCS SKILL 5 -->
                <tr>
                    <td></td>
                    <td><?php echo $dmcs_skills_arr[4]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs5_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs5_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs5_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs5_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs5_im ; ?></td>
                    <td><?php echo round(($ct_dmcs5_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs5_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs5_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs5_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs5_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs5_us ; ?></td>
                    <td><?php echo round(($ct_dmcs5_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs5_un ; ?></td>
                    <td><?php echo round(($ct_dmcs5_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs5_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs5_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- DMCS SKILL 6 -->
                <tr>
                    <td></td>
                    <td><?php echo $dmcs_skills_arr[5]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs6_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs6_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs6_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs6_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs6_im ; ?></td>
                    <td><?php echo round(($ct_dmcs6_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs6_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs6_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs6_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs6_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs6_us ; ?></td>
                    <td><?php echo round(($ct_dmcs6_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs6_un ; ?></td>
                    <td><?php echo round(($ct_dmcs6_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs6_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs6_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- DMCS SKILL 7 -->
                <tr>
                    <td></td>
                    <td><?php echo $dmcs_skills_arr[6]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs7_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs7_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs7_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs7_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs7_im ; ?></td>
                    <td><?php echo round(($ct_dmcs7_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs7_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs7_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs7_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs7_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs7_us ; ?></td>
                    <td><?php echo round(($ct_dmcs7_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs7_un ; ?></td>
                    <td><?php echo round(($ct_dmcs7_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs7_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs7_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- DMCS SKILL 8 -->
                <tr>
                    <td></td>
                    <td><?php echo $dmcs_skills_arr[7]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs8_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs8_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs8_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs8_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs8_im ; ?></td>
                    <td><?php echo round(($ct_dmcs8_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs8_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs8_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs8_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs8_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs8_us ; ?></td>
                    <td><?php echo round(($ct_dmcs8_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs8_un ; ?></td>
                    <td><?php echo round(($ct_dmcs8_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs8_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs8_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- DMCS SKILL 9 -->
                <tr>
                    <td></td>
                    <td><?php echo $dmcs_skills_arr[8]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs9_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs9_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs9_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs9_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs9_im ; ?></td>
                    <td><?php echo round(($ct_dmcs9_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs9_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs9_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs9_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs9_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs9_us ; ?></td>
                    <td><?php echo round(($ct_dmcs9_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs9_un ; ?></td>
                    <td><?php echo round(($ct_dmcs9_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs9_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs9_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- DMCS SKILL 10 -->
                <tr>
                    <td></td>
                    <td><?php echo $dmcs_skills_arr[9]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs10_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs10_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs10_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs10_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs10_im ; ?></td>
                    <td><?php echo round(($ct_dmcs10_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs10_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs10_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs10_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs10_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs10_us ; ?></td>
                    <td><?php echo round(($ct_dmcs10_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs10_un ; ?></td>
                    <td><?php echo round(($ct_dmcs10_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs10_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs10_vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- DMCS SKILL 11 -->
                <tr>
                    <td></td>
                    <td><?php echo $dmcs_skills_arr[10]; ?></td>
                    <td>Very Important</td>
                    <td><?php echo $ct_dmcs11_vim ; ?></td>
                    <td><?php echo round(($ct_dmcs11_vim/$total*100),0) ; ?>%</td>
                    <td>Very Satisfied</td>
                    <td><?php echo $ct_dmcs11_vs ; ?></td>
                    <td><?php echo round(($ct_dmcs11_vs/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Important</td>
                    <td><?php echo $ct_dmcs11_im ; ?></td>
                    <td><?php echo round(($ct_dmcs11_im/$total*100),0) ; ?>%</td>
                    <td>Satisfied</td>
                    <td><?php echo $ct_dmcs11_sa ; ?></td>
                    <td><?php echo round(($ct_dmcs11_sa/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_dmcs11_ofl ; ?></td>
                    <td><?php echo round(($ct_dmcs11_ofl/$total*100),0) ; ?>%</td>
                    <td>Unatisfied</td>
                    <td><?php echo $ct_dmcs11_us ; ?></td>
                    <td><?php echo round(($ct_dmcs11_us/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_dmcs11_un ; ?></td>
                    <td><?php echo round(($ct_dmcs11_un/$total*100),0) ; ?>%</td>
                    <td>Very Unatisfied</td>
                    <td><?php echo $ct_dmcs11_vu ; ?></td>
                    <td><?php echo round(($ct_dmcs11_vu/$total*100),0) ; ?>%</td>
                </tr>    
        </tbody>
    </table>
    <table id="table-emp-table1">
        <thead>
            <tr>
                <th>Questions</th>
                <th>Answers</th>
                <th># of Respondents</th>
                <th>Percentage</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- QUESTION # 9 -->
                <tr>
                    <td>9. How LIKELY to hire other graduates of UP</td>
                    <td>Very Likely</td>
                    <td><?php echo $ct_9vl ; ?></td>
                    <td><?php echo round(($ct_9vl/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Likely</td>
                    <td><?php echo $ct_9l ; ?></td>
                    <td><?php echo round(($ct_9l/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Unlikely</td>
                    <td><?php echo $ct_9u ; ?></td>
                    <td><?php echo round(($ct_9u/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Very Unlikely</td>
                    <td><?php echo $ct_9vu ; ?></td>
                    <td><?php echo round(($ct_9vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- QUESTION # 10 -->
                <tr>
                    <td>10. How LIKELY to keep UP graduates</td>
                    <td>Very Likely</td>
                    <td><?php echo $ct_10vl ; ?></td>
                    <td><?php echo round(($ct_10vl/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Likely</td>
                    <td><?php echo $ct_10l ; ?></td>
                    <td><?php echo round(($ct_10l/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Unlikely</td>
                    <td><?php echo $ct_10u ; ?></td>
                    <td><?php echo round(($ct_10u/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Very Unlikely</td>
                    <td><?php echo $ct_10vu ; ?></td>
                    <td><?php echo round(($ct_10vu/$total*100),0) ; ?>%</td>
                </tr>
            <!-- QUESTION # 13 -->
                <tr>
                    <td>13. Actions UP should take to improve skill and competency of graduates</td>
                    <td>Design courses that are more relevant to the needs of employers</td>
                    <td><?php echo $ct_des ; ?></td>
                    <td><?php echo round(($ct_des/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Include practical experience as part of the academic programs</td>
                    <td><?php echo $ct_prac ; ?></td>
                    <td><?php echo round(($ct_prac/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Include sector specific job placements as an integral part of the degree program</td>
                    <td><?php echo $ct_sec ; ?></td>
                    <td><?php echo round(($ct_sec/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Provide better post-graduation support (facilitate relations between graduates and companies/organizations)</td>
                    <td><?php echo $ct_post ; ?></td>
                    <td><?php echo round(($ct_post/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Others: <?php echo $ct_other13txt; ?></td>
                    <td><?php echo $ct_other13 ; ?></td>
                    <td><?php echo round(($ct_other13/$total*100),0) ; ?>%</td>
                </tr>
            <!-- QUESTION # 14 -->
                <tr>
                    <td>14. Importance of cooperating with UP in the design of curricula and study programs</td>
                    <td>Important</td>
                    <td><?php echo $ct_im ; ?></td>
                    <td><?php echo round(($ct_im/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Moderately part Important</td>
                    <td><?php echo $ct_mod ; ?></td>
                    <td><?php echo round(($ct_mod/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Of Little Importance</td>
                    <td><?php echo $ct_of ; ?></td>
                    <td><?php echo round(($ct_of/$total*100),0) ; ?>%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Unimportant</td>
                    <td><?php echo $ct_un ; ?></td>
                    <td><?php echo round(($ct_un/$total*100),0) ; ?>%</td>
                </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>Questions</th>
                <th>Answers</th>
            </tr>
        </thead>
        <tbody>
            <!-- QUESTION # 15 -->
                <tr>
                    <td>15. Other comments/suggestions to improve skill or competency of graduates</td>
                    <td><?php// echo $ct_yes15; ?></td>
                </tr>
                <?php foreach ($emp_string15_array as $data) { ?>
                <tr>
                    <td></td>
                    <td><?php echo $data['answer_yes']; ?></td>
                </tr>
                <?php } ; ?>
            <!-- QUESTION # 16 -->
                <tr>
                    <td>16. Negative feedback about graduates</td>
                    <td><?php// echo $ct_yes16; ?></td>
                </tr>
                <?php foreach ($emp_string16_array as $data) { ?>
                <tr>
                    <td></td>
                    <td><?php echo $data['answer_yes']; ?></td>
                </tr>
                <?php } ; ?>
            <!-- QUESTION # 17 -->
                <tr>
                    <td>17. Specific strengths of graduates</td>
                    <td><?php// echo $ct_yes17; ?></td>
                </tr>
                <?php foreach ($emp_string17_array as $data) { ?>
                <tr>
                    <td></td>
                    <td><?php echo $data['answer_yes']; ?></td>
                </tr>
                <?php } ; ?>
        </tbody>
    </table>
</body>
</html>