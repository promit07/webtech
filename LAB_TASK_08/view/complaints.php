<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
          
        <style type="text/css">

               table, tr, td,th
               {
                    border: 1px solid black;
                    border-collapse: collapse;
                    padding: 2rem;            
               }
               
          </style>

      </head>  
      <body> 
        
      <?php include 'navbar_logged.php';?>

      <?php

            $msg = "";
            $email_err = $no_email = $error = "";
            $flag = false;

           
            
                if(empty($_POST["email"]))  
                {  
                    $email_err = "<label>Enter Email</label>";  
                }
                if(empty($_POST["complaint"]))  
                {  
                     $error = "<label>Enter Your Complaint</label>";  
                }

                if($_SERVER["REQUEST_METHOD"] == "POST")
                {

                if(!empty($_POST['email']) && isset($_POST['submit']))
                {
                    $users = json_decode(file_get_contents('../model/users.json'), true);

                    if(is_array($users))
                    {
                        foreach($users as $key => $value)
                        {
                            if ($value['email'] == $_POST['email'])
                            {
                                if(file_exists('../model/complaints.json'))  
                                {  
                                    $current_data = file_get_contents('../model/complaints.json');  
                                    $array_data = json_decode($current_data, true);  
                                    $new_data = array(  
                                    'complaint'               =>     $_POST['complaint'] 
                                    );  
                                        $array_data[] = $new_data;  
                                        $final_data = json_encode($array_data);  
                                        if(file_put_contents('../model/complaints.json', $final_data))  
                                        {  
                                            $msg = "<label>Complaint has been sent to admin successfully.</p>";  
                                        } 
                                        
                                        $flag = true;
                                }  

                            }

                            if($flag != true)
                            {
                                $no_email = "No email found";
                            }                          
                                                                               
                        }
                            
                     }                         
                }

                   
                }

            
        ?>

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
						<legend><b>Complaint</b></legend>
						<div>              
                <div> 
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <br><br><label>Email: </label>
                        <input type="text" name="email" value="">
                        <span class="error">* <?php echo $email_err;?></span>
                        <br><br>

                    <label>Your Complaints: </label>
                        <input type="text" name="complaint" value="">
                        <span class="error">* <?php echo $error;?></span>
                        <br><br>

                        <input type="submit" name="submit" value="Submit"> <br>

                        <br> <span> <?php echo $msg,$no_email ?></span> <br>

                </form>
                   </div>
                 </div>
            						
					</fieldset>
				</td>
			</tr>
		</table>
	</fieldset>
        
                 <?php include 'footer.php';?>
      </body>  
 </html>  