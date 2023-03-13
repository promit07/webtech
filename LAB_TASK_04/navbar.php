<?php
session_start();
if(isset($_SESSION['user']) || isset($_COOKIE['user']))
{
	if(!isset($_SESSION['user']))
    {
		$_SESSION['user'] = json_decode(base64_decode($_COOKIE['user']), true);
	}
	header('Location: dashboard.php');
}
?>

<!DOCTYPE HTML>  
<html>
<head>
	<title>Home</title>
</head>

<style>

    nav
    {
        display: flex;
        justify-content: flex-end;
    }

    nav ul
    {
        display: flex;
        list-style: none;
        margin-right: 19px;
        padding: 5px;
    }

    nav li
    {
        margin-left: 2rem;
    }

</style>

<body>	
	
	<fieldset>
		       
      <a href="public_home.php"><img src="img/millenium.jpg" alt="Millenium Investment" width="70" height="65" style="float:left"></a>
		
      <nav>
            <ul>
                <li><a href="public_home.php">Home </a></li>
                <li><a href="login.php">Log In </a></li>
                <li><a href="registration.php">Registration</a></li>
            </ul>
     </nav>
							
	</fieldset>

</body>

</html>