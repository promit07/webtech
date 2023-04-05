<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'navbar_logged.php';?>
	<?php include '../control/edit_profile_control.php';?>

	<fieldset>
		<table border="1" width="100%">
			<tr>
				<td width="25%">
					Account<hr><br>
					<ul style="list-style-type:disc;">
										<li><a href="dashboard.php">Dashboard</a></li><br>
										<li><a href="view_profile.php">View Profile</a></li><br>
										<li><a href="edit_profile.php">Edit Profile</a></li><br>
										<li><a href="change_pp.php">Change Profile Picture</a></li><br>
										<li><a href="change_pass.php">Change Password</a></li><br>
										<li><a href="locations.php">View Locations</a></li><br>
                                        <li><a href="complaints.php">Complaints</a></li><br>
                                        <li><a href="about_us.php">About Us</a></li><br>
						<form method="POST" action="logout.php">
							<button type="submit" name="logout_btn">Log out</button>
						</form>
						
					</ul>
				</td>
				<td width="75%">
					<fieldset>
						<legend>EDIT PROFILE</legend>
						<form method="post" action="">

						<legend>ID</legend>
								<input type="text" name="id" value="<?= $_SESSION['id']?>"><span style="color: red;"></span>
								<hr>
								
								<legend>Name</legend>
								<input type="text" name="name" value="<?= $_SESSION['name']?>"><span style="color: red;"><?php echo $nameErr ?></span>
								<hr>
							

								
								<legend>Email</legend>
								<input type="text" name="email" value="<?= $_SESSION['email']?>"><span style="color: red;"><?php echo $emailErr ?></span>
								<hr>
							

							
								<legend>Gender</legend>
								<input type="radio" name="gender" value="male" id="male" <?= ($_SESSION['gender'] == 'male')? "checked":"" ?>>Male
								<input type="radio" name="gender" value="female" id="female" <?= ($_SESSION['gender'] == 'female')? "checked":"" ?>>Female
								<input type="radio" name="gender" value="others" id="others" <?= ($_SESSION['gender'] == 'others')? "checked":"" ?>>Others
								<br><span style="color: red;"><?php echo $genderErr ?></span>
								<hr>
						
							
								<legend>Date of birth</legend><br>
								<input type="date" name="date" value="<?= $_SESSION['date']?>">
								<br>
								<span style="color: red;"><?php echo $dobErr ?></span><br>
								<hr>
							

								<input type="submit" name="submit" value="Submit">

						</fieldset>
					</td>
				</tr>
			</table>
		</fieldset>

		<?php include 'footer.php';?>
	</body>
	</html>