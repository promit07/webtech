<?php

require_once '../model/model.php';

	
	$curr_pass = $new_pass = $re_new_pass = "";
	$curr_pass_Err = $new_pass_Err = $re_new_pass_Err = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$errorFlag = false;

		if (!isset($_POST['curr_pass']) || empty($_POST['curr_pass'])) {
			$curr_pass_Err = "Field can not be empty";
			$errorFlag = true;
		}
		else{
			$curr_pass = $_POST['curr_pass'];	
		}

		if (!isset($_POST['new_pass']) || empty($_POST['new_pass'])) {
			$new_pass_Err = "Field can not be empty";
			$errorFlag = true;
		}
		else{
			$new_pass = $_POST['new_pass'];
		}
	
		if (!isset($_POST['re_new_pass']) || empty($_POST['re_new_pass'])) {
			$re_new_pass_Err = "Field can not be empty";
			$errorFlag = true;
		}
		else{
			$re_new_pass = $_POST['re_new_pass'];
		}
		if (!$errorFlag) {

			if($_POST['submit'])
			{
				$data['password'] = $_POST['new_pass'];
				$id = $_POST['id'];;
				$_SESSION['password'] = $_POST['new_pass'];

				if(updateDriverPass($id, $data))
				{
					echo "password has been changed";
				}
			}
			else
			{
				echo "check the password again";
			}
		}
	}
	?>
