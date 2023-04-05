<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.red{
			color: red;
			font-family: Perpetua;
		}
	</style>
</head>
<body>
	<?php include 'navbar_logged.php';?>
	<?php include '../control/change_pass_control.php';?>

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
					<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
						<fieldset>
							<legend>CHANGE PASSWORD</legend>
							<table>

							<td>ID</td>
							<td>:</td>
								<td><input type="text" name="id" value="<?= $_SESSION['id']?>"><span style="color: red;"></span></td>
								<td><span class="red"><?php echo $curr_pass_Err; ?></span></td>
									<td></td>

								<tr>
									<td>Current Password</td>
									<td>:</td>
									<td><input type="text" name="curr_pass" value=""></td>
									<td><span class="red"><?php echo $curr_pass_Err; ?></span></td>
									<td></td>
								</tr>

								<tr>
									<td>New Password</td>
									<td>:</td>
									<td><input type="text" name="new_pass" value="<?php echo $new_pass; ?>"></td>
									<td><span class="red"><?php echo $new_pass_Err; ?></span></td>
									

								</tr>

								<tr>
									<td>Confirm Password</td>
									<td>:</td>
									<td><input type="text" name="re_new_pass" value="<?php echo $re_new_pass; ?>"></td>
									<td><span class="red"><?php echo $re_new_pass_Err; ?></span></td>
									
								</tr>
							</table>
							<br>
							<hr>
							<input type="submit" name="submit">
						</fieldset>
					</form>

					<?php include 'footer.php';?>
				</body>
				</html>