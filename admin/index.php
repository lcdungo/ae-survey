<?php

require ('controllers/user_del.php');

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
        <div class="content-users">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert-success">
                    <?php echo $_SESSION['success']; ?><br>
                </div>
            <?php endif; ?>
            <?php unset($_SESSION['success']); ?>
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert-fail">
                    <?php echo $_SESSION['error']; ?><br>
                </div>
            <?php endif; ?>
            <?php unset($_SESSION['error']); ?>
            <div class="tab">
                <button class="tablinks" onclick="openQues(event, 'ques1')" id="defaultOpen"><h2 id="title-users">List of Registered Users</h2></button>
                <button class="tablinks" onclick="openQues(event, 'ques2')"><h2 id="title-users">Password Resend Requests (<?php echo $pass_rows_count; ?>)</h2></button>
            </div>
            <br>
            <div id="ques1" class="tabcontent">
                <table id="table-users">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Finished Survey?</th>
                            <th>Time Created</th>
                            <th>Last Login</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query)) {?>
                            <?php 
                            $emp_check_query = 'SELECT * FROM emp_survey_q1 WHERE user_id='.$row['user_id'].' LIMIT 1';
                            $result1 = mysqli_query($db_conn, $emp_check_query);
                            $user_emp = mysqli_fetch_assoc($result1); 
                            $alum_check_query = 'SELECT * FROM alum_survey_q1 WHERE user_id='.$row['user_id'].' LIMIT 1';
                            $result2 = mysqli_query($db_conn, $alum_check_query);
                            $user_alum = mysqli_fetch_assoc($result2);
                            ?>
                            <tr class="user-row">
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['pass']; ?></td>
                                <td>
                                    <?php if ($row['role_id'] == 0) { echo "ADMIN"; } ?>
                                    <?php if ($row['role_id'] == 1) { echo "ALUMNI"; } ?>
                                    <?php if ($row['role_id'] == 2) { echo "EMPLOYER"; } ?>
                                    <?php if ($row['role_id'] == 3) { echo "ALUMNI AND EMPLOYER"; } ?>
                                </td>
                                <td>
                                    <?php if ($row['role_id'] == 0) { echo "-"; } ?>
                                    <?php if ($row['role_id'] == 1) { if ($user_alum && $user_alum['user_id'] == $row['user_id']) { echo "YES"; } else {echo "NO";} }?>
                                    <?php if ($row['role_id'] == 2) { if ($user_emp && $user_emp['user_id'] == $row['user_id']) { echo "YES"; } else {echo "NO";} }?>
                                    <?php if ($row['role_id'] == 3) { if ($user_alum && $user_alum['user_id'] == $row['user_id'] && !($user_emp)) { echo "ALUMNI ONLY"; } elseif ($user_emp && $user_emp['user_id'] == $row['user_id'] && !($user_alum)) { echo "EMPLOYER ONLY"; } elseif ($user_alum && $user_alum['user_id'] == $row['user_id'] && $user_emp && $user_emp['user_id'] == $row['user_id']) { echo "YES"; } else {echo "NO";} }  ?>
                                </td>
                                <td><?php echo $row['time_created']; ?></td>
                                <td><?php echo $row['last_login']; ?></td>
                                <td>
                                    <a class="delete" href="index.php?delete=<?php echo $row['user_id']; ?>" onClick="return confirm('Are you sure you want to delete this user from the database?');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques2" class="tabcontent">
                <p id="note-pass">NOTE: Clicking "send password" only resends the stored password in the database to the user.</p>
                <table id="table-requests">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Date of Request</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($pass_query)) {?>
                            <tr class="user-row">
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['date_request']; ?></td>
                                <td>
                                    <a class="send-email" href="index.php?id=<?php echo $row['user_id']; ?>" onClick="return confirm('Are you sure you want to send email to user?');">Send Password</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#table-users").dataTable();
            $("#table-requests").dataTable();
        });

        setTimeout(function() {
            let alert = document.querySelector(".alert-success");
                alert.remove();
        }, 3000);

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