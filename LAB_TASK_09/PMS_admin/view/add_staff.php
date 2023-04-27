<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "log_top.php";

     ?>
   

 <form action="../control/add_staff_sql.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <!--<label for="username">User Name:</label><br>
  <input type="text" id="username" name="username"><br>-->
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="gender">gender:</label><br>
  <input type="text" id="gender" name="gender"><br>
  <label for="salary">salary:</label><br>
  <input type="number" id="salary" name="salary"><br>
  <label for="dob">dob:</label><br>
  <input type="date" id="dob" name="dob"><br>
  <label for="ppp">Profile Picture :</label><br>
  <!--<input type="text" id="ppp" name="ppp"><br><br>-->
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createStudent" value="Create">
  <input type="reset"> 
  <a href="view_profile.php">Back</a>
</form> 
<?php include 'footer.php';?>
</body>
</html>

