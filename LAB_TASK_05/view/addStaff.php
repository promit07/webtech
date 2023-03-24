<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <?php 
        include "log_top.php";

     ?>
   

 <form action="../control/createStaff.php" method="POST" enctype="multipart/form-data">

  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="gender">Gender:</label><br>
  <input type="text" id="gender" name="gender"><br>
  
  <label for="salary">Salary:</label><br>
  <input type="text" id="salary" name="salary"><br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>

  <input type="file" name="image"><br><br>

  <input type="submit" name = "createStaff" value="Create">

  <input type="reset"> 

</form> 

</body>
</html>