<?php 

require_once '../control/showstaffinfo.php';
$staff = fetchStaff($_GET['id']);


 include "log_top.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../control/updatestaff.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $staff['name'] ?>" type="text" id="name" name="name"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $staff['username'] ?>" type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input value="<?php echo $staff['password'] ?>" type="password" id="password" name="password"><br>
  <label for="gender">gender:</label><br>
  <input value="<?php echo $staff['gender'] ?>" type="text" id="gender" name="gender"><br>
  <label for="salary">salary:</label><br>
  <input value="<?php echo $staff['salary'] ?>" type="number" id="salary" name="salary"><br>
  <label for="dob">dob:</label><br>
  <input value="<?php echo $staff['dob'] ?>" type="date" id="dob" name="dob"><br>
  <label for="image">image:</label><br>
  <!--<input value="<?php //echo $staff['ppp'] ?>" type="text" id="ppp" name="ppp"><br>-->
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateStaff" value="Update">
  <input type="reset">
</form> 

</body>
</html>

