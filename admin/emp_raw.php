<?php

require ('controllers/emp_db.php');

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
    <link rel="icon" type="images/png" href="images/UP_seal.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script type="text/javascript"src="js/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
</head>
<?php include('header.php');  ?>
    <section>
        <?php include('sidenav.php');  ?>
        <div class="content-emp-raw">
            <h2 id="title-emp-raw">Raw Data of Employer Satisfaction Survey</h2>
            <h5 id="subtitle-emp-raw">Click the number below that corresponds with a question to view responses</h5><br>
            <div class="tab">
                <button class="tablinks" onclick="openQues(event, 'ques1')" id="defaultOpen">1</button>
                <button class="tablinks" onclick="openQues(event, 'ques2')">2</button>
                <button class="tablinks" onclick="openQues(event, 'ques3')">3</button>
                <button class="tablinks" onclick="openQues(event, 'ques4')">4</button>
                <button class="tablinks" onclick="openQues(event, 'ques5')">5</button>
                <button class="tablinks" onclick="openQues(event, 'ques6')">6</button>
                <button class="tablinks" onclick="openQues(event, 'ques7')">7</button>
                <button class="tablinks" onclick="openQues(event, 'ques8')">8</button>
                <button class="tablinks" onclick="openQues(event, 'ques9')">9</button>
                <button class="tablinks" onclick="openQues(event, 'ques10')">10</button>
                <button class="tablinks" onclick="openQues(event, 'ques11')">11</button>
                <button class="tablinks" onclick="openQues(event, 'ques12')">12</button>
                <button class="tablinks" onclick="openQues(event, 'ques13')">13</button>
                <button class="tablinks" onclick="openQues(event, 'ques14')">14</button>
                <button class="tablinks" onclick="openQues(event, 'ques15')">15</button>
                <button class="tablinks" onclick="openQues(event, 'ques16')">16</button>
                <button class="tablinks" onclick="openQues(event, 'ques17')">17</button>
            </div>
            <div id="ques1" class="tabcontent">
                <p class="ques_title"><strong>Which sector of economy does your company/organization belong to?</strong></p><br>
                <table id="table-emp-raw1" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query1)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'Other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques2" class="tabcontent">
                <p class="ques_title"><strong>Where is your company/organization located?</strong></p><br>
                <table id="table-emp-raw2" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th></th>
                            <th></th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query2)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                            $query2_1 = mysqli_query($db_conn, 'SELECT * FROM emp_survey_q2_1 WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result2_1 = mysqli_fetch_array($query2_1);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php echo $row['answer_body']; ?></td>
                                <td><?php if($result2_1) { echo $result2_1['region']; } ?></td>
                                <td><?php if($result2_1) { echo $result2_1['subregion']; } ?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques3" class="tabcontent">
                <p class="ques_title"><strong>Which industry and business does your company/organization belong to?</strong></p><br>
                <table id="table-emp-raw3" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query3)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques4" class="tabcontent">
                <p class="ques_title"><strong>What is your position in your company/organization?</strong></p><br>
                <table id="table-emp-raw4" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query4)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques5" class="tabcontent">
                <p class="ques_title"><strong>How many UP graduates are employed in your company/organization?</strong></p><br>
                <table id="table-emp-raw5" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query5)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques6" class="tabcontent">
                <p class="ques_title"><strong>How much do you agree or disagree with this statement: “UP graduates recruited in the last three to five years have the skills to work in my company/organization.”?</strong></p><br>
                <table id="table-emp-raw6" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query6)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques7" class="tabcontent">
                <p class="ques_title"><strong>Rate the importance of each skill when hiring new staff.</strong></p><br>
                <table id="table-emp-raw7" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Skill</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query7)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php echo $row['skill']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques8" class="tabcontent">
                <p class="ques_title"><strong>Rate your satisfaction on how well each skill is demonstrated by your staff who are UP graduates.</strong></p><br>
                <table id="table-emp-raw8" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Skill</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query8)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php echo $row['skill']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques9" class="tabcontent">
                <p class="ques_title"><strong>Based on your experience with the staff, how LIKELY are you to hire other graduates of UP?</strong></p><br>
                <table id="table-emp-raw9" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query9)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques10" class="tabcontent">
                <p class="ques_title"><strong>Based on your experience with the staff how likely are you going to keep the UP graduates in your company/organization?</strong></p><br>
                <table id="table-emp-raw10" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query10)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques11" class="tabcontent">
                <p class="ques_title"><strong>Rate the importance of each item to the successful performance of the job for which your staff, who are UP graduates, were hired.</strong></p><br>
                <table id="table-emp-raw11" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Skill</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query11)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php echo $row['skill']; ?></td>
                                <td><?php echo $row['answer_body']; ?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques12" class="tabcontent">
                <p class="ques_title"><strong>Rate your satisfaction on how well each item was demonstrated by your hired UP graduates.</strong></p><br>
                <table id="table-emp-raw12" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Skill</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query12)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php echo $row['skill']; ?></td>
                                <td><?php echo $row['answer_body']; ?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques13" class="tabcontent">
                <p class="ques_title"><strong>Which actions should UP take in order to improve the skill and competency set of its graduates?</strong></p><br>
                <table id="table-emp-raw13" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query13)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques14" class="tabcontent">
                <p class="ques_title"><strong>How important is UP cooperation for your company/organization?</strong></p><br>
                <table id="table-emp-raw14" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query14)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques15" class="tabcontent">
                <p class="ques_title"><strong>Do you have any other comments or suggestions as to how UP can improve the skill and competency set of its graduates?</strong></p><br>
                <table id="table-emp-raw15" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query15)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'Yes') { echo $row['answer_yes']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques16" class="tabcontent">
                <p class="ques_title"><strong>Do you have any negative feedback about the graduates?</strong></p><br>
                <table id="table-emp-raw16" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query16)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'Yes') { echo $row['answer_yes']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques17" class="tabcontent">
                <p class="ques_title"><strong>Are specific strengths of the graduates appreciated? If yes, what are these strengths?</strong></p><br>
                <table id="table-emp-raw17" class="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query17)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php if ($result) echo $result['email']; else echo "DELETED USER";?></td>
                                <td><?php if($row['answer_body'] == 'Yes') { echo $row['answer_yes']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

    <script>
        $(document).ready(function(){
            $("#table-emp-raw1").dataTable();
            $("#table-emp-raw2").dataTable();
            $("#table-emp-raw3").dataTable();
            $("#table-emp-raw4").dataTable();
            $("#table-emp-raw5").dataTable();
            $("#table-emp-raw6").dataTable();
            $("#table-emp-raw7").dataTable();
            $("#table-emp-raw8").dataTable();
            $("#table-emp-raw9").dataTable();
            $("#table-emp-raw10").dataTable();
            $("#table-emp-raw11").dataTable();
            $("#table-emp-raw12").dataTable();
            $("#table-emp-raw13").dataTable();
            $("#table-emp-raw14").dataTable();
            $("#table-emp-raw15").dataTable();
            $("#table-emp-raw16").dataTable();
            $("#table-emp-raw17").dataTable();
        });

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