<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php

	$name = $password = "";
	$nameErr = $passwordErr = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["name"]))
        {
          $nameErr = "Name is required";
        }
        elseif (!preg_match("/^[a-zA-Z-0-9-._' ]*$/", $_POST["name"]))
        {
			$nameErr = "* can only contain alpha numeric characters, period, dash or underscore";
		}
		elseif (strlen($_POST["name"]) < 2)
        {
			$nameErr = "* Enter at least two characters";
		}
        else
        {
          $name = $_POST["name"];       
        }


		if(empty($_POST["password"]))
        {
            $passwordErr = "password required";
        }
        else
        {
            $password = $_POST ["password"];

            if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST["password"]))
            {
            $passwordErr = "Password must contain  special character and  must 8 characters password";
            }
            else
            {
                $password = $_POST["password"];
            }
        }
    }
    ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<h2>Login</h2>

	Username:
	<input type="text" name="name" value="<?php echo $name ?>">
	<span class="error"><?php echo $nameErr;?></span>
	<br>

	Password:
	<input type="password" name="password" value="<?php echo $password ?>">
	<span class="error"><?php echo $passwordErr;?></span>
    <hr>


	<input id="remember" type="checkbox" name="remember">
	<label for="remember">Remember me</label>
	<br><br>

	<input type="submit" name="login" value="Login">

    <span> <a href="#">forgot password?</a> </span> <br><br>

</form>

<?php
    echo $name;
    echo "<br>";
    echo $password;
?>
</body>
</html>