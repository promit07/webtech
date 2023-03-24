<?php 

require_once '../control/staffs_info.php';
$staff = fetchStaff($_GET['id']);


 include "log_top.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../control/edit_staff_control.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $staff['name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Gender:</label><br>
  <input value="<?php echo $staff['gender'] ?>" type="text" id="gender" name="gender"><br>
  <label for="username">Salary:</label><br>
  <input value="<?php echo $staff['salary'] ?>" type="text" id="salary" name="salary"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateStaff" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

