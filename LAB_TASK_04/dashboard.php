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
								<li><a href="dashboard.php">Dashboard</a></li>
								<li><a href="view_profile.php">View Profile</a></li>
								<li><a href="edit_profile.php">Edit Profile</a></li>
								<li><a href="change_pp.php">Change Profile Picture</a></li>
								<li><a href="change_pass.php">Change Password</a></li>
						<form method="POST" action="logout.php">
							<li><button type="submit" name="logout_btn">Log out</button></li>
						</form>
						
					</ul>
				</td>
				<td width="75%">
					<h2 align="center">Welcome <?= $_SESSION['user']['name']?> </h2>
				</td>
			</tr>
		</table>
	</fieldset>

	<?php include 'footer.php';?>
</body>
</html>