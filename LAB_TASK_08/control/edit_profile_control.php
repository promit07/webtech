<?php 

require_once '../model/model.php';


	/*$name = $email = $dob = $gender = "";
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
		
        if (empty($_POST["date"]))
        {
             $dobErr = "Date of birth is required";
             $errorFlag = true;
        }
        else
        {
            $date = $_POST["date"];
        }
		
		if(!isset($_POST['gender']) || empty($_POST['gender'])){
			$genderErr = "Gender field is required";
			$errorFlag = true;
		}else{
			$gender = $_POST['gender'];
		}*/

			if (isset($_POST['submit']))
			{
				$data['name'] = $_POST['name'];
    			$_SESSION['name'] = $_POST['name'];

				$data['email'] = $_POST['email'];
    			$_SESSION['email'] = $_POST['email'];

    			$data['gender'] = $_POST['gender'];
    			$_SESSION['gender'] = $_POST['gender'];

    			$data['date'] = $_POST['date'];
    			$_SESSION['date'] = $_POST['date'];

				$id = $_POST['id'];

  				if (updateDriverInfo($_POST['id'], $data)) {
  					echo 'Successfully updated';
 
  					header('Location: ../view/view_profile.php');
  				}

				else {
					echo 'Unsuccessful Attempt';
				}

			}
		
	?>
