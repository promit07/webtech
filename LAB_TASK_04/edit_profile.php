<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'navbar_logged.php';?>

	<?php 

	$name = $email = $dob = $gender = "";
	$nameErr = $emailErr = $dobErr= $genderErr = "" ;

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$errorFlag = false;

		
		if(!isset($_POST['name']) || empty($_POST['name'])){
			$nameErr = "Name is required";
			$errorFlag = true;
		}else{
			$name = $_POST['name'];
			if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
				$nameErr = "Only letters, whitespaces, - and ' are acceptable";
				$errorFlag = true;
			}
			else if(str_word_count($name)<2){
				$nameErr = "Name has to contain at least two words ";
				$errorFlag = true;
			}
		}
	
		if(empty($_POST['email'])){
			$emailErr = "Email is required";
			$errorFlag = true;
		}else{
			$email = $_POST['email'];
			$email_pattern = "/@gmail.com/i";
			$email_matching_result = preg_match($email_pattern, $email);
			if($email_matching_result == 0){
				$emailErr = "Email format is not valid";
				$errorFlag = true;
			}
		}
		
        if (empty($_POST["date"]) || empty($_POST["month"]) || empty($_POST["year"]))
        {
             $dobErr = "Date of birth is required";
             $errorFlag = true;
        }
        else
        {
            $date = $_POST["date"];
            $month = $_POST["month"];
            $year = $_POST["year"];

        if ($date < 1 || $date > 31 || $month < 1 || $month > 12 || $year < 1920 ||  $year > 2022)
        {
            $dobErr = "Invalid date of birth";
            $errorFlag = true;
        }
        }
		
		if(!isset($_POST['gender']) || empty($_POST['gender'])){
			$genderErr = "Gender field is required";
			$errorFlag = true;
		}else{
			$gender = $_POST['gender'];
		}

		if(!$errorFlag)
        {
			$users = json_decode(file_get_contents('users.json'), true);
			
			foreach ($users as $key => $value) {
				if ($value['username'] == $_SESSION['user']['username']) {
					$set = [
						'name' => $_POST['name'],
						'email' => $_POST['email'],
						'username' => $_SESSION['user']['username'],
						'password' => $_SESSION['user']['password'],
						'gender' => $_POST['gender'],
						'date'     =>     $_POST["date"], 
                        'month'     =>     $_POST["month"], 
                        'year'     =>     $_POST["year"],
						'profilePicPath' => $_SESSION['user']['profilePicPath']
					];
					$_SESSION['user'] = $set;
					if(isset($_COOKIE['user'])){
						setrawcookie('user', base64_encode(json_encode($_SESSION['user'])));
					}
					$users[$key] = $_SESSION['user'];
					file_put_contents('users.json', json_encode($users));
					header('Location: view_profile.php');
				}
			}
		}
	}
	?>


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
					<fieldset>
						<legend>EDIT PROFILE</legend>
						<form method="post" action="">
								
								<legend>Name</legend>
								<input type="text" name="name" value="<?= $_SESSION['user']['name']?>"><span style="color: red;"><?php echo $nameErr ?></span>
								<hr>
							

								
								<legend>Email</legend>
								<input type="text" name="email" value="<?= $_SESSION['user']['email']?>"><span style="color: red;"><?php echo $emailErr ?></span>
								<hr>
							

							
								<legend>Gender</legend>
								<input type="radio" name="gender" value="male" id="male" <?= ($_SESSION['user']['gender'] == 'male')? "checked":"" ?>>Male
								<input type="radio" name="gender" value="female" id="female" <?= ($_SESSION['user']['gender'] == 'female')? "checked":"" ?>>Female
								<input type="radio" name="gender" value="others" id="others" <?= ($_SESSION['user']['gender'] == 'others')? "checked":"" ?>>Others
								<br><span style="color: red;"><?php echo $genderErr ?></span>
								<hr>
						
							
								<legend>Date of birth</legend><br>
								<input type="number" name="date" value="<?= $_SESSION['user']['date']?>">
                                <input type="number" name="month" value="<?= $_SESSION['user']['month']?>">
                                <input type="number" name="year" value="<?= $_SESSION['user']['year']?>">
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