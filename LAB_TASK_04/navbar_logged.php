<?php 
session_start(); 
	if(!isset($_SESSION['user']) && !isset($_COOKIE['user']))
    {
		header('Location: login.php');
	}
	if(!isset($_SESSION['user']))
    {
		$_SESSION['user'] = json_decode(base64_decode($_COOKIE['user']), true);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<link rel="stylesheet" type="text/css" href="top.css">
</head>

<style>

    nav
    {
        display: flex;
        justify-content: flex-end;
    }

    nav p
    {
        display: flex;
        margin-right: 19px;
        padding: 5px;
    }

    nav button
    {
        margin-top: 1rem;
        margin-left: 2rem;
        margin-right: 1rem;
    }

</style>

<body>

	<fieldset>
		
    <a href="public_home.php"><img src="img/millenium.jpg" alt="Millenium Investment" width="70" height="65" style="float:left"></a>

    <nav>

            <p><b> Logged in as <?= $_SESSION['user']['name']?> </b></p><br>

                    <form method="POST" action="logout.php">
							<button type="submit" name="logout_btn">Log out</button>
					</form>

    </nav>
					
	</fieldset>

</body>

</html>