<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php include 'navbar_logged.php';?>

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
						<legend>PROFILE</legend>
						<table width="100%">
							<tr>

							<td width="25%">ID</td>
								<td><span>:</span><?= $_SESSION['id']?></td>
								</tr>

								<td width="25%">Name</td>
								<td><span>:</span><?= $_SESSION['name']?></td>
								
								<!--<td rowspan="3" width="100%" align="center"><img src="<?//= $_SESSION['user']['profilePicPath'] ?>" height="200" width="200"></td>-->
							</tr>

							<tr>
								<td width="25%">Email</td>
								<td><span>:</span><?= $_SESSION['email']?></td>
							</tr>

							<tr>
								<td width="25%">Gender</td>
								<td><span>:</span><?= $_SESSION['gender']?></td>
							</tr>

							<tr>
								<td width="25%">Date of Birth</td>
								<td><span>:</span><?= $_SESSION['date']?></td>
								<td align="center" width="100%"><a href="change_pp.php">Change</a></td>
							</tr>
						</table><hr>
						<a href="edit_profile.php">Edit Profile</a>
					</fieldset>
				</td>
			</tr>
		</table>
	</fieldset>

	<?php include 'footer.php';?>

</body>

</html>
	