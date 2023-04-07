<?php

//session_start();

		/*$userName = $pass = "";
		$userName_Err = $pass_Err = "";
		$matchError = false;

		$errorFlag = false;*/

		require_once '../model/model.php';
		//require_once '../view/login.php';
		

		/*if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
				
			if (empty($_POST['name']))
            {
				$userName_Err = "User Name is required";
				$errorFlag = true; 
			}
            else
            {
				$userName = $_POST['name'];
			}
				
			if (empty($_POST['password']))
            {
				$pass_Err = "Password is required";
				$errorFlag = true;
			}
            else
            {
				$pass = $_POST['password'];
			}*/


				if (isset($_POST["submit"])) {

					//require_once "../model/model.php";
					
			
					$data["name"]  = $_POST["name"];
					$data["password"]   = $_POST["password"];
			
					login_user($data);
						
					if (login_user($data) == true) {

						$_SESSION['login_status'] = true;
						
						
						$name = $_POST["name"];
						$userinfo = searchDriver($name);
						$_SESSION['id'] = $userinfo['id'];
						$_SESSION['name'] = $userinfo['name'];
						$_SESSION['user_name'] = $userinfo['user_name'];
						$_SESSION['gender'] = $userinfo['gender'];
						$_SESSION['email'] = $userinfo['email'];
						$_SESSION['date'] = $userinfo['date'];
						//$_SESSION['image'] = $userinfo['image'];
						header("Location: ../view/dashboard.php");
						//header("Location: view_profile.php");
					}
					else {
						echo "Credentials do not match";
					}
				}

		?>