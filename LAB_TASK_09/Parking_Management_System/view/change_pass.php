<?php include 'navbar_logged.php';?>
<?php include '../control/change_pass_control.php';?>

<!DOCTYPE html>
<html>
<head>

	<title>CHANGE PASSWORD</title>

<script>

function validateform()
{  
     
	var curr_pass=document.myForm.curr_pass.value;
    var new_pass=document.myForm.new_pass.value;
	var re_new_pass=document.myForm.re_new_pass.value;


		
    if (id==null || id=="")
    {  
		  alert("ID can't be blank");  
		  return false;  
	}
	else if(curr_pass==null || curr_pass=="")
    {  
		  alert("Current password can't be blank");  
		  return false;  
	}
    else if(new_pass==null || new_pass=="")
    {  
		  alert("New password can't be blank");  
		  return false;  
		}
    else if(re_new_pass==null || re_new_pass=="")
    {  
		  alert("Confirm password can't be blank");  
		  return false;  
		}

}

function checkId()
    {
      var id = document.getElementById("id").value;
      if (id == "")
      {
        document.getElementById("idErr").innerHTML = " *ID cannot be empty";
        document.getElementById("id").style.borderColor = "red";
      }
      else{
				document.getElementById("idErr").innerHTML = "";
			  document.getElementById("id").style.borderColor = "black";
			  document.getElementById("id").style.borderColor = "black";
			}
    }

function checkCurrPass()
     {
			if(document.getElementById("curr_pass").value == "")
			{
				document.getElementById("currPassErr").innerHTML = " *Password can not be blank";
			  	document.getElementById("curr_pass").style.borderColor = "red";
			}
        	else if ((document.getElementById("curr_pass").value).length < 5) {
			  	document.getElementById("currPassErr").innerHTML = " *Password must contain at least 5 characters";
			  	document.getElementById("curr_pass").style.borderColor = "red";
			}
			else{
				document.getElementById("currPassErr").innerHTML = "";
			  document.getElementById("curr_pass").style.borderColor = "black";
			}
    }

	function checkNewPass()
     {
			if(document.getElementById("new_pass").value == "")
			{
				document.getElementById("newPassErr").innerHTML = " *New password can not be blank";
			  	document.getElementById("new_pass").style.borderColor = "red";
			}
        	else if ((document.getElementById("new_pass").value).length < 5) {
			  	document.getElementById("newPassErr").innerHTML = " *Password must contain at least 5 characters";
			  	document.getElementById("new_pass").style.borderColor = "red";
			}
			else{
				document.getElementById("newPassErr").innerHTML = "";
			  document.getElementById("new_pass").style.borderColor = "black";
			}
    }

	function checkReNewPass()
    {
	  var new_pass = document.getElementById("new_pass").value;
      var re_new_pass = document.getElementById("re_new_pass").value;

			if(document.getElementById("re_new_pass").value == "")
			{
				document.getElementById("reNewPassErr").innerHTML = " *Confirm password can not be blank";
			  	document.getElementById("re_new_pass").style.borderColor = "red";
			}
			else if(!(re_new_pass == new_pass))
      		{
        		document.getElementById("reNewPassErr").innerHTML = "Confirm Password doesn't match!";
        		document.getElementById("re_new_pass").style.borderColor = "red";
      		}
        	else if ((document.getElementById("re_new_pass").value).length < 5) {
			  	document.getElementById("reNewPassErr").innerHTML = " *Password must contain at least 5 characters";
			  	document.getElementById("re_new_pass").style.borderColor = "red";
			}
			else{
				document.getElementById("reNewPassErr").innerHTML = "";
			  document.getElementById("re_new_pass").style.borderColor = "black";
			}
    }


</script>

</head>
<body>


	<fieldset>
		<table border="1" width="100%">
			<tr>
				<td width="25%">
					Account<hr><br>
					<ul style="list-style-type:disc;">
										<li><a href="dashboard.php">Dashboard</a></li><br>
										<li><a href="view_profile.php">View Profile</a></li><br>
										<li><a href="edit_profile.php">Edit Profile</a></li><br>
										<li><a href="change_pp.php">Change Profile Picture</a></li><br>
										<li><a href="change_pass.php">Change Password</a></li><br>
										<li><a href="locations.php">View Locations</a></li><br>
                                        <li><a href="complaints.php">Complaints</a></li><br>
                                        <li><a href="about_us.php">About Us</a></li><br>
						<form method="POST" action="logout.php">
							<button type="submit" name="logout_btn">Log out</button>
						</form>
						
					</ul>
				</td>
				<td width="75%">
				<form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit=" return validateform()" >
						<fieldset>
							<legend>CHANGE PASSWORD</legend>
							<table>

							<td>ID</td>
							<td>:</td>
								<td><input type="text" name="id" id="id" onblur="checkId()" onkeyup="checkId()" value="<?= $_SESSION['id']?>"><span style="color: red;"></span></td>
								<td><span id="idErr" style="color: red;"></span></td>
								<td></td>

								<tr>
									<td>Current Password</td>
									<td>:</td>
									<td><input type="text" name="curr_pass" id="curr_pass" onblur="checkCurrPass()" onkeyup="checkCurrPass()" value=""></td>
									<td><span  id="currPassErr" style="color: red;"></span></td>
									<td></td>
								</tr>

								<tr>
									<td>New Password</td>
									<td>:</td>
									<td><input type="text" name="new_pass" id="new_pass" onblur="checkNewPass()" onkeyup="checkNewPass()" value=""></td>
									<td><span id="newPassErr" style="color: red;"></span></td>
									

								</tr>

								<tr>
									<td>Confirm Password</td>
									<td>:</td>
									<td><input type="text" name="re_new_pass" id="re_new_pass" onblur="checkReNewPass()" onkeyup="checkReNewPass()" value=""></td>
									<td><span id="reNewPassErr" style="color: red;"></span></td>
									
								</tr>

							</table>
							<br>
							<hr>
							<input type="submit" name="submit">
						</fieldset>
					</form>

					<?php include 'footer.php';?>
				</body>
				</html>