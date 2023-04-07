<?php include 'navbar.php';?>
<?php include '../control/registration_control.php';
?>

<!DOCTYPE HTML>  
<html>
<head>

<title>Registration</title>

<script>

function validateform()
{  
    var gender=document.myForm.gender.value; 
		var name=document.myForm.name.value;  
		var password=document.myForm.password.value;
    var email=document.myForm.email.value;
    var user_name=document.myForm.user_name.value;
    var con_pass=document.myForm.con_pass.value;
    var date=document.myForm.date.value;
		
    
    if(gender==null || gender=="")
    {  
		  alert("Gender can't be blank");  
		  return false;  
		}
		else if (name==null || name=="")
    {  
		  alert("Name can't be blank");  
		  return false;  
		}
    else if(password==null || password=="")
    {  
		  alert("Password can't be blank");  
		  return false;  
		}
    else if(email==null || email=="")
    {  
		  alert("Email can't be blank");  
		  return false;  
		}
    else if(user_name==null || user_name=="")
    {  
		  alert("User name can't be blank");  
		  return false;  
		}
    else if(con_pass==null || con_pass=="")
    {  
		  alert("Confirm password can't be blank");  
		  return false;  
		}    
    else if(date==null || date=="")
    {  
		  alert("Date can't be blank");  
		  return false;  
		}

	}

    function checkName() {
      var name = document.getElementById("name").value;
			if (name.split(" ").length< 2) {
			  	document.getElementById("nameErr").innerHTML = " Must contain two or more words";
			  	document.getElementById("name").style.borderColor = "red";

			}else if (!/^[a-zA-Z-' ]*$/.test(name))
      {
        document.getElementById("nameErr").innerHTML = " Only letters and white space allowed";
			  document.getElementById("name").style.borderColor = "red";
      }  
      else{
			  	document.getElementById("nameErr").innerHTML = "";
			  	document.getElementById("name").style.borderColor = "black";
			}			
     }

     function checkEmail()
    {
      var email = document.getElementById("email").value;
      if(!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email))
      {
        document.getElementById("emailErr").innerHTML = "Invalid email format";
			  document.getElementById("email").style.borderColor = "red";
      }
      else{
        document.getElementById("emailErr").innerHTML = "";
			  document.getElementById("email").style.borderColor = "black";
      }
    }

    function checkUname()
    {
      var username = document.getElementById("user_name").value;
      if (username == "")
      {
        document.getElementById("userNameErr").innerHTML = "Username cannot be empty";
        document.getElementById("user_name").style.borderColor = "red";
      }
      else if (!/^[a-zA-Z0-9_-]*$/.test(username))
      {
        document.getElementById("userNameErr").innerHTML = "Only characters, alphabetic 0-9, -, and _ can be used in username";
        document.getElementById("user_name").style.borderColor = "red";
      } 
      else
      {
        document.getElementById("userNameErr").innerHTML = "";
        document.getElementById("user_name").style.borderColor = "black";
      }

	  }

     function checkPassword()
     {
        	if ((document.getElementById("password").value).length < 5) {
			  	document.getElementById("passErr").innerHTML = "Password must contain at least 5 characters";
			  	document.getElementById("password").style.borderColor = "red";
			}else{
				document.getElementById("passErr").innerHTML = "";
			  document.getElementById("password").style.borderColor = "black";
			}
    }

    function checkConPassword()
    {
      var con_pass = document.getElementById("con_pass").value;
      var password = document.getElementById("password").value;
      if (con_pass == "")
      {
        document.getElementById("conPassErr").innerHTML = "Confirm password cannot be empty";
        document.getElementById("con_pass").style.borderColor = "red";
      }
      else if(!(con_pass == password))
      {
        document.getElementById("conPassErr").innerHTML = "Confirm Password doesn't match!";
        document.getElementById("con_pass").style.borderColor = "red";
      }
      else{
				document.getElementById("conPassErr").innerHTML = "";
			  document.getElementById("con_pass").style.borderColor = "black";
			}
    }

    function checkDate()
    {
      var date = document.getElementById("date").value;
      if (date == "")
      {
        document.getElementById("dateErr").innerHTML = "date cannot be empty";
        document.getElementById("date").style.borderColor = "red";
      }
      else{
				document.getElementById("dateErr").innerHTML = "";
			  document.getElementById("date").style.borderColor = "black";
			}
    }


</script>

<style>
.error {color: #FF0000;}
</style>

</head>
<body>


<h2>Registration</h2>
<p><span class="error">* required field</span></p>
<form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit=" return validateform()" >

  <label>Name: </label>
  <input type="text" name="name" id="name" onblur="checkName()" onkeyup="checkName()"> *
  <span id="nameErr" class="error"></span>
  <br><br>

  <label>Email: </label>
  <input type="text" name="email" id="email" onblur="checkEmail()" onkeyup="checkEmail()"> *
  <span id="emailErr" class="error"></span>
  <br><br>

  <label>User Name: </label>
  <input type="text" name="user_name" id="user_name" onblur="checkUname()" onkeyup="checkUname()"> *
  <span id="userNameErr" class="error"></span>
  <br><br>

  <label>Password: </label>
  <input type="text" name="password" id="password" onblur="checkPassword()" onkeyup="checkPassword()"> *
  <span id="passErr" class="error"></span>
  <br><br>

  <label>Confirm Password: </label>
  <input type="text" name="con_pass" id="con_pass" onblur="checkConPassword()" onkeyup="checkConPassword()"> *
  <span id="conPassErr" class="error"></span>
  <br><br>

  <label>Gender: </label>
  <input type="radio" name="gender" id="gender" onblur="checkGender()" onkeyup="checkGender()" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" id="gender" onblur="checkGender()" onkeyup="checkGender()" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" id="gender" onblur="checkGender()" onkeyup="checkGender()" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  <span> *</span>
  <span id="genderErr" class="error"> </span>
  <br><br>

  <label>Date of Birth: </label>
  <input type="date" id="date" name="date" onblur="checkDate()" onkeyup="checkDate()"> *
  <span id="dateErr" class="error"></span>
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