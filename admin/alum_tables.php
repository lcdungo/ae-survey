<?php

require ('controllers/alum_data_chart.php');

// if user is not logged in
if (!isset($_SESSION['email'])) {
    header('location: ../login.php');
    exit();
}

// if user is not an admin but alumni
if ($_SESSION['role'] == 1) {
    header('location: ../alum_survey.php');
    exit();
}
// if user is not an admin but employer
if ($_SESSION['role'] == 2) {
    header('location: ../emp_survey.php');
    exit();
}
// if user is not an admin but alum and employer
if ($_SESSION['role'] == 3) {
    header('location: ../alum_emp.php');
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
    <title>Admin</title>
</head>
<?php include('header.php');  ?>
    <section>
        <?php include('sidenav.php');  ?>
        <div class="content-alum-table">
            <h2 id="title-alum-table">Alumni Survey Tally of Results</h2>
            <h5 id="subtitle-alum-table"></h5><br>
            <p id="total-respondents"><strong>Total Respondents: </strong><?php echo $total ; ?></p>

            <?php  if($total != 0) { ?>
                <div class="export-btn">
                    <a href="controllers/excel_alum_results.php" class="export-excel">Export to Spreadsheet</a>
                </div>
                <div class="tab">
                    <button class="tablinks" onclick="openQues(event, 'ques1')" id="defaultOpen">1 - 4</button>
                    <button class="tablinks" onclick="openQues(event, 'ques2')">5</button>
                    <button class="tablinks" onclick="openQues(event, 'ques3')">6</button>
                    <button class="tablinks" onclick="openQues(event, 'ques4')">7</button>
                    <button class="tablinks" onclick="openQues(event, 'ques5')">8 - 9</button>
                    <button class="tablinks" onclick="openQues(event, 'ques6')">10</button>
                    <button class="tablinks" onclick="openQues(event, 'ques7')">11 - 17</button>
                    <button class="tablinks" onclick="openQues(event, 'ques8')">18</button>
                    <button class="tablinks" onclick="openQues(event, 'ques9')">19</button>
                </div>
                <div id="ques1" class="tabcontent">
                    <table id="table-alum-table1">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Answers</th>
                                <th># of Respondents</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- QUESTION # 1 -->
                            <tr>
                                <td>Sex at birth</td>
                                <td>Female</td>
                                <td><?php echo $ct_fmale ; ?></td>
                                <td><?php echo round(($ct_fmale/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Male</td>
                                <td><?php echo $ct_male ; ?></td>
                                <td><?php echo round(($ct_male/$total*100),0) ; ?>%</td>
                            </tr>
                        <!-- QUESTION # 2 -->
                            <tr>
                                <td>Countries alumni work for/in more than 6 months:</td>
                                <td><?php echo $ques2_arr[0] ; ?></td>
                                <td><?php echo $ct_country0 ; ?></td>
                                <td><?php echo round(($ct_country0/$total*100),0) ; ?>%</td>
                            </tr>
                            <?php for ($i=1; $i < 195; $i++) { if ($ct_country_arr[$i] != '0') {?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques2_arr[$i] ; ?></td>
                                    <td><?php echo $ct_country_arr[$i] ; ?></td>
                                    <td><?php echo $country_percent[$i] ; ?>%</td>
                                </tr>
                            <?php }} ?>
                        <!-- QUESTION # 3 -->
                            <tr>
                                <td>Satisfaction with undergrad education in UP</td>
                                <td>Very Satisfied</td>
                                <td><?php echo $ct_vs3 ; ?></td>
                                <td><?php echo round(($ct_vs3/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Generally Satisfied</td>
                                <td><?php echo $ct_gs3 ; ?></td>
                                <td><?php echo round(($ct_gs3/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Generally Dissatisfied</td>
                                <td><?php echo $ct_gd3 ; ?></td>
                                <td><?php echo round(($ct_gd3/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Very Dissatisfied</td>
                                <td><?php echo $ct_vd3 ; ?></td>
                                <td><?php echo round(($ct_vd3/$total*100),0) ; ?>%</td>
                            </tr>
                        <!-- QUESTION # 4 -->
                            <tr>
                                <td>Got first job after graduation...</td>
                                <td>While still in college</td>
                                <td><?php echo $ct_coll ; ?></td>
                                <td><?php echo round(($ct_coll/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>In 2 months or less</td>
                                <td><?php echo $ct_2mos ; ?></td>
                                <td><?php echo round(($ct_2mos/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>In 3 to 6 months</td>
                                <td><?php echo $ct_6mos ; ?></td>
                                <td><?php echo round(($ct_6mos/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>In 7 months to 1 year</td>
                                <td><?php echo $ct_7mos ; ?></td>
                                <td><?php echo round(($ct_7mos/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>In 1 to 2 years</td>
                                <td><?php echo $ct_1yr ; ?></td>
                                <td><?php echo round(($ct_1yr/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>More than 2 years</td>
                                <td><?php echo $ct_2yrs ; ?></td>
                                <td><?php echo round(($ct_2yrs/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>I am not sure</td>
                                <td><?php echo $ct_nots ; ?></td>
                                <td><?php echo round(($ct_nots/$total*100),0) ; ?>%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="ques2" class="tabcontent">
                    <table id="table-alum-table1">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Answers</th>
                                <th># of Respondents</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- QUESTION # 5 -->
                            <tr>
                                <td>Employed?</td>
                                <td>No</td>
                                <td><?php echo $ct_emp_no5 ; ?></td>
                                <td><?php echo round(($ct_emp_no5/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td>Looking for employment?</td>
                                <td>Yes</td>
                                <td><?php echo $ct_look_yes5 ; ?></td>
                                <td><?php echo round(($ct_look_yes5/$ct_emp_no5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>No</td>
                                <td><?php echo $ct_look_no5 ; ?></td>
                                <td><?php echo round(($ct_look_no5/$ct_emp_no5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td>Employed?</td>
                                <td>Yes</td>
                                <td><?php echo $ct_emp_yes5 ; ?></td>
                                <td><?php echo round(($ct_emp_yes5/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td>Type of employment</td>
                                <td>Full time (40 hours/week)</td>
                                <td><?php echo $ct_yes_full5 ; ?></td>
                                <td><?php echo round(($ct_yes_full5/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Part time</td>
                                <td><?php echo $ct_yes_part5 ; ?></td>
                                <td><?php echo round(($ct_yes_part5/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Self-employed</td>
                                <td><?php echo $ct_yes_self5 ; ?></td>
                                <td><?php echo round(($ct_yes_self5/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td>Industry</td>
                                <td><?php echo $ques5c_arr[0] ; ?></td>
                                <td><?php echo $ct_ind_arr5[0] ; ?></td>
                                <td><?php echo round(($ct_yes_ind1/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <?php for ($i=1; $i < 22; $i++) { if ($ct_ind_arr5[$i] != '0') {?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques5c_arr[$i] ; ?></td>
                                    <td><?php echo $ct_ind_arr5[$i] ; ?></td>
                                    <td><?php echo $ct_ind_arr5_percent[$i] ; ?>%</td>
                                </tr>
                            <?php }} ?>
                            <tr>
                                <td></td>
                                <td>Others: <?php echo $ct_yes_ind_other ; ?></td>
                                <td><?php echo $ct_yes_other5 ; ?></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="ques3" class="tabcontent">
                    <table id="table-alum-table1">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Level of Education</th>
                                <th># of Respondents</th>
                                <th>Percentage</th>
                                <th>Academic Fields</th>
                                <!-- <th>Date of Computation (tent)</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <!-- QUESTION # 6 -->
                            <tr>
                                <td>Required minimum level</td>
                                <td>High school</td>
                                <td><?php echo $ct_hs6; ?></td>
                                <td><?php echo round(($ct_hs6/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <tr>
                                <td></td>
                                <td>Some College</td>
                                <td><?php echo $ct_coll6; ?></td>
                                <td><?php echo round(($ct_coll6/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <tr>
                                <td></td>
                                <td>Associate’s degree</td>
                                <td><?php echo $ct_ad6; ?></td>
                                <td><?php echo round(($ct_ad6/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php foreach ($ad_field6 as $field) { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?php echo $field['Field']; ?></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php } ; ?>
                            <tr>
                                <td></td>
                                <td>Bachelor’s degree</td>
                                <td><?php echo $ct_bd6; ?></td>
                                <td><?php echo round(($ct_bd6/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php foreach ($bd_field6 as $field) { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?php echo $field['Field']; ?></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php } ; ?>
                            <tr>
                                <td></td>
                                <td>Master’s degree</td>
                                <td><?php echo $ct_md6; ?></td>
                                <td><?php echo round(($ct_md6/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php foreach ($md_field6 as $field) { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?php echo $field['Field']; ?></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php } ; ?>
                            <tr>
                                <td></td>
                                <td>Doctoral degree</td>
                                <td><?php echo $ct_dd6; ?></td>
                                <td><?php echo round(($ct_dd6/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php foreach ($dd_field6 as $field) { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?php echo $field['Field']; ?></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php } ; ?>
                            <tr>
                                <td></td>
                                <td>OTHERS: <?php echo $alum_other6txt; ?></td>
                                <td><?php echo $ct_other6; ?></td>
                                <td><?php echo round(($ct_other6/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="ques4" class="tabcontent">
                    <table id="table-alum-table1">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Level of Education</th>
                                <th># of Respondents</th>
                                <th>Percentage</th>
                                <th>Academic Fields</th>
                                <!-- <th>Date of Computation (tent)</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <!-- QUESTION # 7 -->
                            <tr>
                                <td>Preferred minimum level</td>
                                <td>High school</td>
                                <td><?php echo $ct_hs7; ?></td>
                                <td><?php echo round(($ct_hs7/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <tr>
                                <td></td>
                                <td>Some College</td>
                                <td><?php echo $ct_coll7; ?></td>
                                <td><?php echo round(($ct_coll7/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <tr>
                                <td></td>
                                <td>Associate’s degree</td>
                                <td><?php echo $ct_ad7; ?></td>
                                <td><?php echo round(($ct_ad7/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php foreach ($ad_field7 as $field) { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?php echo $field['Field']; ?></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php } ; ?>
                            <tr>
                                <td></td>
                                <td>Bachelor’s degree</td>
                                <td><?php echo $ct_bd7; ?></td>
                                <td><?php echo round(($ct_bd7/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php foreach ($bd_field7 as $field) { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?php echo $field['Field']; ?></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php } ; ?>
                            <tr>
                                <td></td>
                                <td>Master’s degree</td>
                                <td><?php echo $ct_md7; ?></td>
                                <td><?php echo round(($ct_md7/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php foreach ($md_field7 as $field) { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?php echo $field['Field']; ?></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php } ; ?>
                            <tr>
                                <td></td>
                                <td>Doctoral degree</td>
                                <td><?php echo $ct_dd7; ?></td>
                                <td><?php echo round(($ct_dd7/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php foreach ($dd_field7 as $field) { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?php echo $field['Field']; ?></td>
                                <!-- <td></td> -->                    
                            </tr>
                            <?php } ; ?>
                            <tr>
                                <td></td>
                                <td>OTHERS: <?php echo $alum_other7txt; ?></td>
                                <td><?php echo $ct_other7; ?></td>
                                <td><?php echo round(($ct_other7/$ct_emp_yes5*100),0) ; ?>%</td>
                                <td></td>
                                <!-- <td></td> -->                    
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="ques5" class="tabcontent">
                    <table id="table-alum-table1">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Answers</th>
                                <th># of Respondents</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- QUESTION # 8 -->
                            <tr>
                                <td>Principal occupation category</td>
                                <td><?php echo $ques8_arr[0]; ?></td>
                                <td><?php echo $ct_occ_array[0]; ?></td>
                                <td><?php if (!empty($ct_occ_array_percent)) echo $ct_occ_array_percent[0]; ?>%</td>
                            </tr>
                            <?php for ($i=1; $i < 10; $i++) { ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques8_arr[$i] ; ?></td>
                                    <td><?php echo $ct_occ_array[$i] ; ?></td>
                                    <td><?php if (!empty($ct_occ_array_percent)) echo $ct_occ_array_percent[$i] ; ?>%</td>
                                </tr>
                            <?php } ?>
                        <!-- QUESTION # 9 -->
                            <tr>
                                <td>Current position related to undergraduate field(s) of study?</td>
                                <td>Yes, it is the same field as my major/s</td>
                                <td><?php echo $ct_sf; ?></td>
                                <td><?php echo round(($ct_sf/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Yes, it is related to my major/s</td>
                                <td><?php echo $ct_rf; ?></td>
                                <td><?php echo round(($ct_rf/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>No, it is not related</td>
                                <td><?php echo $ct_nr; ?></td>
                                <td><?php echo round(($ct_nr/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="ques6" class="tabcontent">
                    <!-- QUESTION # 10 -->
                    <table id="table-alum-table1">
                        <thead>
                            <tr>
                                <th>Job Duty</th>
                                <th>Time Alotted</th>
                                <th></th>
                                <!-- <th>Date of Computation (tent)</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data10 as $data) { ?>
                                <tr>
                                    <td><?php echo $data['Job']; ?></td>
                                    <td><?php echo $data['Percent']; ?>%</td>
                                </tr>
                            <?php } ; ?>
                        </tbody>
                    </table>
                </div>
                <div id="ques7" class="tabcontent">
                    <table id="table-alum-table1">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Answers</th>
                                <th># of Respondents</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- QUESTION # 11 -->
                            <tr>
                                <td>Paid volunteer for NGO or civic organization?</td>
                                <td>Yes, full time (40 hours/week)</td>
                                <td><?php echo $ct_yes11_full; ?></td>
                                <td><?php echo round(($ct_yes11_full/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Yes, part time</td>
                                <td><?php echo $ct_yes11_part; ?></td>
                                <td><?php echo round(($ct_yes11_part/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>No</td>
                                <td><?php echo $ct_no11; ?></td>
                                <td><?php echo round(($ct_no11/$total*100),0) ; ?>%</td>
                            </tr>
                        <!-- QUESTION # 12 -->
                            <tr>
                                <td>Required min. # of years of experience</td>
                                <td>No experience</td>
                                <td><?php echo $ct_noex; ?></td>
                                <td><?php echo round(($ct_noex/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Less than one (1) year</td>
                                <td><?php echo $ct_less1; ?></td>
                                <td><?php echo round(($ct_less1/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>One (1) to three (3) years</td>
                                <td><?php echo $ct_1to3; ?></td>
                                <td><?php echo round(($ct_1to3/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Three (3) to six (6) years</td>
                                <td><?php echo $ct_3to6; ?></td>
                                <td><?php echo round(($ct_3to6/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>More than six (6+) years</td>
                                <td><?php echo $ct_more6; ?></td>
                                <td><?php echo round(($ct_more6/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                        <!-- QUESTION # 13 -->
                            <tr>
                                <td>How well UP prepared alumni for their current career</td>
                                <td>Very Well</td>
                                <td><?php echo $ct_vw13; ?></td>
                                <td><?php echo round(($ct_vw13/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>More than adequately</td>
                                <td><?php echo $ct_ma13; ?></td>
                                <td><?php echo round(($ct_ma13/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Less than adequately</td>
                                <td><?php echo $ct_la13; ?></td>
                                <td><?php echo round(($ct_la13/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Very Poorly</td>
                                <td><?php echo $ct_vp13; ?></td>
                                <td><?php echo round(($ct_vp13/$total*100),0) ; ?>%</td>
                            </tr>
                        <!-- QUESTION # 14 -->
                            <tr>
                                <td>Current position</td>
                                <td>Entry-level</td>
                                <td><?php echo $ct_entry14; ?></td>
                                <td><?php echo round(($ct_entry14/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Supervisory</td>
                                <td><?php echo $ct_sup14; ?></td>
                                <td><?php echo round(($ct_sup14/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Executive level</td>
                                <td><?php echo $ct_exec14; ?></td>
                                <td><?php echo round(($ct_exec14/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Chief Executive</td>
                                <td><?php echo $ct_chief14; ?></td>
                                <td><?php echo round(($ct_chief14/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                        <!-- QUESTION # 15 -->
                            <tr>
                                <td>How much current job involve supervising or managing the work of others</td>
                                <td>None at all</td>
                                <td><?php echo $ct_non15; ?></td>
                                <td><?php echo round(($ct_non15/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Some of my time (up to 25% of my time)</td>
                                <td><?php echo $ct_som15; ?></td>
                                <td><?php echo round(($ct_som15/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Half my time (50%)</td>
                                <td><?php echo $ct_half15; ?></td>
                                <td><?php echo round(($ct_half15/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Most of my time (75% of my time)</td>
                                <td><?php echo $ct_most15; ?></td>
                                <td><?php echo round(($ct_most15/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                        <!-- QUESTION # 16 -->
                            <tr>
                                <td>Managerial responsibility</td>
                                <td>No supervisory or lead responsibilities</td>
                                <td><?php echo $ct_non16; ?></td>
                                <td><?php echo round(($ct_non16/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Limited or indirect supervision of one or more people</td>
                                <td><?php echo $ct_lim16; ?></td>
                                <td><?php echo round(($ct_lim16/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Direct supervision of one or more people</td>
                                <td><?php echo $ct_dir16; ?></td>
                                <td><?php echo round(($ct_dir16/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Direct supervision over a unit or department</td>
                                <td><?php echo $ct_unit16; ?></td>
                                <td><?php echo round(($ct_unit16/$ct_emp_yes5*100),0) ; ?>%</td>
                            </tr>
                        <!-- QUESTION # 17 -->
                            <tr>
                                <td>Satisfaction with career</td>
                                <td>Very Satisfied</td>
                                <td><?php echo $ct_vs17; ?></td>
                                <td><?php echo round(($ct_vs17/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Generally Satisfied</td>
                                <td><?php echo $ct_gs17; ?></td>
                                <td><?php echo round(($ct_gs17/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Generally Dissatisfied</td>
                                <td><?php echo $ct_gd17; ?></td>
                                <td><?php echo round(($ct_gd17/$total*100),0) ; ?>%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Very Dissatisfied</td>
                                <td><?php echo $ct_vd17; ?></td>
                                <td><?php echo round(($ct_vd17/$total*100),0) ; ?>%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="ques8" class="tabcontent">
                    <table id="table-alum-table1">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th></th>
                                <th>Rating</th>
                                <th># of Respondents</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- QUESTION # 18 -->
                            <!-- DMCS SKILL 1 -->
                                <tr>
                                    <td>How well UPB DMCS prepared its alumni...</td>
                                    <td><?php echo $ques18_arr[0]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs1_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs1_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs1_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs1_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs1_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs1_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs1_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs1_vp/$total*100),0) ; ?>%</td>
                                </tr>
                            <!-- DMCS SKILL 2 -->
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques18_arr[1]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs2_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs2_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs2_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs2_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs2_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs2_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs2_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs2_vp/$total*100),0) ; ?>%</td>
                                </tr>
                            <!-- DMCS SKILL 3 -->
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques18_arr[2]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs3_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs3_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs3_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs3_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs3_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs3_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs3_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs3_vp/$total*100),0) ; ?>%</td>
                                </tr>
                            <!-- DMCS SKILL 4 -->
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques18_arr[3]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs4_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs4_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs4_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs4_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs4_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs4_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs4_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs4_vp/$total*100),0) ; ?>%</td>
                                </tr>
                            <!-- DMCS SKILL 5 -->
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques18_arr[4]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs5_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs5_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs5_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs5_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs5_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs5_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs5_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs5_vp/$total*100),0) ; ?>%</td>
                                </tr>
                            <!-- DMCS SKILL 6 -->
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques18_arr[5]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs6_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs6_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs6_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs6_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs6_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs6_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs6_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs6_vp/$total*100),0) ; ?>%</td>
                                </tr>
                            <!-- DMCS SKILL 7 -->
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques18_arr[6]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs7_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs7_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs7_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs7_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs7_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs7_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs7_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs7_vp/$total*100),0) ; ?>%</td>
                                </tr>
                            <!-- DMCS SKILL 8 -->
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques18_arr[7]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs8_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs8_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs8_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs8_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs8_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs8_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs8_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs8_vp/$total*100),0) ; ?>%</td>
                                </tr>
                            <!-- DMCS SKILL 9 -->
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques18_arr[8]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs9_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs9_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs9_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs9_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs9_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs9_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs9_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs9_vp/$total*100),0) ; ?>%</td>
                                </tr>
                            <!-- DMCS SKILL 10 -->
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques18_arr[9]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs10_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs10_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs10_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs10_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs10_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs10_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs10_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs10_vp/$total*100),0) ; ?>%</td>
                                </tr>
                            <!-- DMCS SKILL 11 -->
                                <tr>
                                    <td></td>
                                    <td><?php echo $ques18_arr[10]; ?></td>
                                    <td>Very well</td>
                                    <td><?php echo $ct_dmcs11_vw ; ?></td>
                                    <td><?php echo round(($ct_dmcs11_vw/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>More than adequately</td>
                                    <td><?php echo $ct_dmcs11_ma ; ?></td>
                                    <td><?php echo round(($ct_dmcs11_ma/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Less than adequately</td>
                                    <td><?php echo $ct_dmcs11_la ; ?></td>
                                    <td><?php echo round(($ct_dmcs11_la/$total*100),0) ; ?>%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Very Poorly</td>
                                    <td><?php echo $ct_dmcs11_vp ; ?></td>
                                    <td><?php echo round(($ct_dmcs11_vp/$total*100),0) ; ?>%</td>
                                </tr>    
                        </tbody>
                    </table>
                </div>
                <div id="ques9" class="tabcontent">
                    <table id="table-alum-table1">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Answers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- QUESTION # 19 -->
                                <tr>
                                    <td>Other comments/suggestions how UPB DMCS helped aqcuire competencies needed: </td>
                                    <td></td>
                                </tr>
                                <?php foreach ($alum_string19_array as $data) { ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $data['answer_body']; ?></td>
                                </tr>
                            <?php } ; ?>
                        </tbody>
                    </table>
                </div>  
             <?php } ?> 
        </div>
    </section>
    
    <?php include('footer.php'); ?>

    <script>
        function openQues(evt, quesNum) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(quesNum).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</body>
</html>