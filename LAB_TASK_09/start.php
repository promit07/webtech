<?php

if (isset($_POST['submit'])) {
    if (($_POST['selection']) == "admin") {
        header("Location: PMS_admin/view/login.php");
    }
    elseif (($_POST['selection']) == "driver") {
        header("Location: Parking_Management_System/view/login.php");
    }
    elseif (($_POST['selection']) == "staff") {
        header("Location: pms_admin2/view/login.php");
    }
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
		       
      <a href="start.php"><img src="Parking_Management_System/img/parking.jpg" alt="Parking" width="100" height="75" style="float:left"></a>
		
      <nav>
            <ul>
                <!--<li><a href="public_home.php">Home </a></li>
                <li><a href="login.php">Log In </a></li>
                <li><a href="registration.php">Registration</a></li>-->
            </ul>
     </nav>
							
	</fieldset>

    <fieldset>
        <p>Login as:</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <select name="selection" id="">
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
                <option value="driver">Driver</option>
            </select>
            <input type="submit" name="submit" value="Proceed">
        </form>
    </fieldset>

    <fieldset>
      <p style="text-align: center;"> <b>Copyright &#169 <?php echo date('Y'); ?> </b></p>
	</fieldset>

</body>

</html>