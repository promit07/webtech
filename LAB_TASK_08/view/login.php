<?php
	include 'navbar.php';
	include '../control/login_control.php';
?>

<!DOCTYPE html>
<html>
<head>

	<title>Login</title>

<script>

	function validateform()
	{  
    
	var name=document.myForm.name.value;  
	var password=document.myForm.password.value;
		
    
	if (name==null || name=="")
    {  
		  alert("Name can't be blank");  
		  return false;  
	}
    else if(password==null || password=="")
    {  
		  alert("Password can't be blank");  
		  return false;  
		}
    
	}

	function checkName()
    {
      var name = document.getElementById("name").value;
      if (name == "")
      {
        document.getElementById("nameErr").innerHTML = " *Name cannot be empty";
        document.getElementById("name").style.borderColor = "red";
      }
	  else
      {
        document.getElementById("nameErr").innerHTML = "";
        document.getElementById("name").style.borderColor = "black";
      }
	}

	function checkPass()
    {
      var password = document.getElementById("password").value;
      if (password == "")
      {
        document.getElementById("passErr").innerHTML = " *Password cannot be empty";
        document.getElementById("password").style.borderColor = "red";
      }
	  else
      {
        document.getElementById("passwordErr").innerHTML = "";
        document.getElementById("password").style.borderColor = "black";
      }
	}

</script>


<style>
.error {color: #FF0000;}
</style>

</head>

<body>
	
	<fieldset>

		<form name= "myForm" method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>" onsubmit=" return validateform()" >
			<fieldset>
				<legend><h2>LOGIN</h2></legend>

				<table>
					<tr>
						<td><label>User Name: </label></td>
						<td><input type="text" name="name" id= "name" onblur="checkName()" onkeyup="checkName()"></td>
						<td><span id = "nameErr" class="error"></span></td>
					</tr>

					<tr>
						<td><label>Password: </label></td>
						<td><input type="password" name="password" id= "password" onblur="checkPass()" onkeyup="checkPass()"></td>
						<td><span id = "passErr" class="error"></span></td>
					</tr>

				</table><br>
				<hr>
				<input type="checkbox" name="remember_me" value="remembered">Remember me<br><br>
				<input type="submit" name="submit" value="submit">
				 <a href="forgot_password.php">Forgot Password?</a>	 		
			</fieldset>
		</form>
	</fieldset>

	<?php include 'footer.php';?>

</body>
</html>