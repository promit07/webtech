<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php include 'navbar.php';?>
<?php include '../control/registration_control.php';
?>


<h2>Registration</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  <label>Name: </label>
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  <label>Email: </label>
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  <label>User Name: </label>
  <input type="text" name="user_name" value="<?php echo $userName;?>"><span class="error"> * <?php echo $userNameErr ?></span>
  <br><br>

  <label>Password: </label>
  <input type="text" name="password" value=""><span class="error"> * <?php echo $passErr ?></span>
  <br><br>

  <label>Confirm Password: </label>
  <input type="text" name="con_pass" value=""><span class="error"> * <?php echo $con_passErr ?></span>
  <br><br>

  <label>Gender: </label>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  <label>Date of Birth: </label>
  <input type="date" id="date" name="date">
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>
 
  <input type="submit" name="submit" value="Submit"> <br>

  <?php

      if(isset($message))
      {
        echo "<br>". $message;
      }
  ?>

</form>

<br> <?php include 'footer.php';?>
</body>
</html>