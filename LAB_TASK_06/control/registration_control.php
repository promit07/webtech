  <?php

require_once '../model/model.php';
//require_once '../view/registration.php';
 
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
    $userNameErr = " * User Name is required";
    $errorFlag = true;
  }
  else
  {
    $userName = test_input($_POST['user_name']);

    if (!preg_match("/^[a-zA-z_0-9]*$/", $userName))
    {
        $userNameErr = " * Only characters, alphabic 0-9, - , _ can be used in username";
        $errorFlag = true;
    }
  }

  if (empty($_POST['password']))
  {
    $passErr = " * Password is required";
    $errorFlag = true;
  }
  else
  {
    $pass = test_input($_POST['password']);

    if (strlen($pass) < 5)
    {
        $passErr = " * Password must contain at least 5 characters";
        $errorFlag = true;
    }
  }
    
 if (empty($_POST['con_pass']))
 {
    $con_passErr = " * Password is required";
    $errorFlag = true;
 }
 else
 {
    $con_pass = $_POST['con_pass'];

    if($_POST['password'] !== $_POST['con_pass'])
    {
    $con_passErr = " * Confirm Password Doesn't Match!";
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

  if (empty($_POST["date"]))
  {
    $dobErr = "Date of birth is required";
    $errorFlag = true;
  }
  else
  {
    $date = test_input($_POST["date"]);

  }

  if(($errorFlag != true)) 
      {  
        if (isset($_POST['submit']))
        {
          $data['name'] = $_POST['name'];
          $data['email'] = $_POST['email'];
          $data['user_name'] = $_POST['user_name'];
          $data["password"]   = $_POST["password"];
          //$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
          $data['gender'] = $_POST['gender'];
          $data['date'] = $_POST['date'];
        
        
          if (addDriver($data)) {
            echo 'Registration Completed Successfully';
          }
        } 
        else 
        {
          echo 'For Accessing The Next Page Please Register Yourself First';
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
