<?php include 'navbar_logged.php';?>
<?php include '../control/edit_profile_control.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT PROFILE</title>

<script>

function validateform()
{  
	var id= document.myForm.id.value;
    var gender=document.myForm.gender.value; 
	var name=document.myForm.name.value;  
    var email=document.myForm.email.value;
    var date=document.myForm.date.value;
		
    
    if(gender==null || gender=="")
    {  
		  alert("Gender can't be blank");  
		  return false;  
	}
	else if (id==null || id=="")
    {  
		  alert("ID can't be blank");  
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
    else if(date==null || date=="")
    {  
		  alert("Date can't be blank");  
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

function checkName() {
      var name = (document.getElementById("name").value).trim();
			if (name.split(" ").length< 2) {
			  	document.getElementById("nameErr").innerHTML = " *Must contain two or more words";
			  	document.getElementById("name").style.borderColor = "red";

			}else if (!/^[a-zA-Z-' ]*$/.test(name))
      {
        document.getElementById("nameErr").innerHTML = " *Only letters and white space allowed";
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
        document.getElementById("emailErr").innerHTML = " *Invalid email format";
			  document.getElementById("email").style.borderColor = "red";
      }
      else{
        document.getElementById("emailErr").innerHTML = "";
			  document.getElementById("email").style.borderColor = "black";
      }
    }

	function checkDate()
    {
      var date = document.getElementById("date").value;
      if (date == "")
      {
        document.getElementById("dateErr").innerHTML = " *date cannot be empty";
        document.getElementById("date").style.borderColor = "red";
      }
      else{
				document.getElementById("dateErr").innerHTML = "";
			  document.getElementById("date").style.borderColor = "black";
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
					<fieldset>
						<legend>EDIT PROFILE</legend>
						<form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit=" return validateform()" >

						<legend>ID</legend>
								<input type="text" name="id" id="id" onblur="checkId()" onkeyup="checkId()" value="<?= $_SESSION['id']?>">
								<span id="idErr" style="color: red;"></span>
								<hr>
								
								<legend>Name</legend>
								<input type="text" name="name" id="name" onblur="checkName()" onkeyup="checkName()" value="<?= $_SESSION['name']?>">
								<span id="nameErr" style="color: red;"></span>
								<hr>
							

								
								<legend>Email</legend>
								<input type="text" name="email"  id="email" onblur="checkEmail()" onkeyup="checkEmail()" value="<?= $_SESSION['email']?>">
								<span id="emailErr" style="color: red;"></span>
								<hr>
							

							
								<legend>Gender</legend>
								<input type="radio" name="gender" value="male" id="gender" <?= ($_SESSION['gender'] == 'male')? "checked":"" ?>>Male
								<input type="radio" name="gender" value="female" id="gender" <?= ($_SESSION['gender'] == 'female')? "checked":"" ?>>Female
								<input type="radio" name="gender" value="others" id="gender" <?= ($_SESSION['gender'] == 'others')? "checked":"" ?>>Others
								<br><span id="genderErr" style="color: red;"></span>
								<hr>
						
							
								<legend>Date of birth</legend><br>
								<input type="date" name="date" id="date" onblur="checkDate()" onkeyup="checkDate()" value="<?= $_SESSION['date']?>">
								<span id="dateErr" style="color: red;"></span><br>
								<hr>
							

								<input type="submit" name="submit" value="Submit">

						</fieldset>
					</td>
				</tr>
			</table>
		</fieldset>

		<?php include 'footer.php';?>
	</body>
	</html>