<?php
    session_start();
    if (!isset($_SESSION['login_status']) || $_SESSION['login_status'] != true) {
        header("Location: login.php");
        exit();
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
    <a href="public_home.php"><img src="../img/parking.jpg" alt="Parking" width="100" height="75" style="float:left"></a>
    <nav>
        <?php if(isset($_SESSION['name']) && is_array($_SESSION['name'])): ?>
            <p><b> Logged in as <?= $_SESSION['name']?> </b></p><br>
            <form method="POST" action="logout.php">
                <button type="submit" name="logout_btn">Log out</button>
            </form>
        <?php endif; ?>
    </nav>
</fieldset>


</body>

</html>