<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php include 'navbar.php';?>

  <?php
 
  $name = $email = $userName = $date = $month = $year = $gender = $pass = $con_pass = $message = "" ;
  $nameErr = $emailErr = $userNameErr = $dobErr = $genderErr = $passErr = $con_passErr = $error = "" ;


  if(isset($_POST["submit"]))  
  {
    $errorFlag = false;

    if (empty($_POST["name"]))
    {
      $nameErr = "Name is required";
      $errorFlag = true;
    }
    else
    {
      $name = test_input($_POST["name"]);

      if (str_word_count($name) < 2)
      {
        $nameErr = "Must contain two or more words";
        $errorFlag = true;
      }
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
      {
        $nameErr = "Only letters and white space allowed";
        $errorFlag = true;
      }     
    }
  
  if (empty($_POST["email"]))
  {
    $emailErr = "Email is required";
    $errorFlag = true;
  }
  else
  {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailErr = "Invalid email format";
      $errorFlag = true;
    }
  }

  if (empty($_POST['user_name']))
  {
    $userNameErr = " *User Name is required";
    $errorFlag = true;
  }
  else
  {
    $userName = test_input($_POST['user_name']);

    if (!preg_match("/^[a-zA-z_0-9]*$/", $userName))
    {
        $userNameErr = " *Only characters, alphabic 0-9, - , _ can be used in username";
        $errorFlag = true;
    }
  }

  if (empty($_POST['password']))
  {
    $passErr = " *Password is required";
    $errorFlag = true;
  }
  else
  {
    $pass = test_input($_POST['password']);

    if (strlen($pass) < 5)
    {
        $passErr = " *Password must contain at least 5 characters";
        $errorFlag = true;
    }
  }
    
 if (empty($_POST['con_pass']))
 {
    $con_passErr = " *Password is required";
    $errorFlag = true;
 }
 else
 {
    $con_pass = $_POST['con_pass'];

    if($_POST['password'] !== $_POST['con_pass'])
    {
    $con_passErr = " *Confirm Password Doesn't Match!";
    $errorFlag = true;
    }
 }

 if (empty($_POST["gender"]))
  {
    $genderErr = "Gender is required";
    $errorFlag = true;
  }
  else
  {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["date"]) || empty($_POST["month"]) || empty($_POST["year"]))
  {
    $dobErr = "Date of birth is required";
    $errorFlag = true;
  }
  else
  {
    $date = test_input($_POST["date"]);
    $month = test_input($_POST["month"]);
    $year = test_input($_POST["year"]);

    if ($date < 1 || $date > 31 || $month < 1 || $month > 12 || $year < 1920 ||  $year > 2022)
    {
      $dobErr = "Invalid date of birth";
      $errorFlag = true;
    }
  }

  if(($errorFlag != true)) 
      {  
           if(file_exists('users.json'))  
           {  
                $current_data = file_get_contents('users.json');  
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                     'username'     =>     $_POST["user_name"],
                     'password' => $_POST['password'],  
                     'gender'     =>     $_POST["gender"],  
                     'date'     =>     $_POST["date"], 
                     'month'     =>     $_POST["month"], 
                     'year'     =>     $_POST["year"]  
                );  
                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('users.json', $final_data))  
                {  
                     $message = "<label>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  

}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

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
  <input type="text" name="user_name" value="<?php echo $userName;?>"><span class="error">* <?php echo $userNameErr ?></span>
  <br><br>

  <label>Password: </label>
  <input type="text" name="password" value=""><span class="error">* <?php echo $passErr ?></span>
  <br><br>

  <label>Confirm Password: </label>
  <input type="text" name="con_pass" value=""><span class="error">* <?php echo $con_passErr ?></span>
  <br><br>

  <label>Gender: </label>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  <label>Date of Birth: </label>
  <input type="number" name="date" placeholder="dd" style="width : 35px;" value="<?php echo $date;?>"> /
  <input type="number" name="month" placeholder="mm" style="width : 35px;" value="<?php echo $month;?>"> /
  <input type="number" name="year" placeholder="yyyy" style="width : 50px;" value="<?php echo $year;?>">
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