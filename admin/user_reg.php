<?php

require ('controllers/user_add.php');

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
        <div class="content-reg-users">
        	<h2 id="title-users">Register New User</h2>
        	<h5 id="subtitle-users">Fill in the following fields to add new user</h5>
        	<!-- added this area for error messages -->
			<?php if (count($errors) > 0): ?>
				<div class="alert-fail">
					<?php foreach ($errors as $error): ?>
						<?php echo $error; ?><br>
					<?php endforeach; ?>	
				</div>
			<?php endif;?>
            <form action="user_reg.php" method="post">
            	<label for="email">E-mail:</label><br>
				<input type="email" placeholder="Type email address here..." name="email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : '' ; ?>"><br><br>
				<label for="email">Role:</label><br>
				<select name="roles">
					<option value="" selected disabled>Select Role</option>
					<option value="admin" <?php echo (isset($_POST['roles']) && $_POST['roles'] === 'admin') ? 'selected' : ''; ?>>Admin</option>
					<option value="alum" <?php echo (isset($_POST['roles']) && $_POST['roles'] === 'alum') ? 'selected' : ''; ?>>Alumni</option>
					<option value="emp" <?php echo (isset($_POST['roles']) && $_POST['roles'] === 'emp') ? 'selected' : ''; ?>>Employer</option>
					<option value="alum_emp" <?php echo (isset($_POST['roles']) && $_POST['roles'] === 'alum_emp') ? 'selected' : ''; ?>>Alumni and Employer</option>
				</select><br><br>
				<label for="password">Password:</label><br>
				<input type="text" placeholder="Random password..." name="password" value="<?php echo password_generate(8); ?>" minlength="8">
				<button class="rand-pass">Random Password</button>
				<br><br>
				<input type="submit" value="Register" name="reg-btn">
            </form>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

    <script type="text/javascript">
        setTimeout(function() {
            let alert = document.querySelector(".alert-success");
                alert.remove();
        }, 3000);
        setTimeout(function() {
            let alert = document.querySelector(".alert-fail");
                alert.remove();
        }, 3000);

    </script>

</body>
</html>