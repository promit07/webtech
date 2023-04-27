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
               .about{
                margin-left: 6rem;
                margin-bottom: 1rem;
                margin-top: 1rem;
                text-align: center;
               }
               .about th
               {
                text-decoration: underline;
               }
          </style>

      </head>  
      <body> 
        
      <?php include 'navbar_logged.php';?>


      <fieldset>
		<table border="1" width="100%">
			<tr>
				<td width="20%">
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
				<td width="80%">
					<fieldset>
						<legend><b>About Us</b></legend>
						<div>              
                <div> 
                     <table class="about">  
                          <tr>  
                               <th>ID</th> 
                               <th>NAME</th>  
                               <th>SECTION</th>
                               <th>GROUP</th>    
                               <th>GITHUB LINK</th>    
                          </tr>  
                          <?php   
                          $data = file_get_contents("../model/about_us.json");  
                          $data = json_decode($data, true);
                          if (isset($data)) {
                              foreach($data as $row)  
                               {                                     
                                        echo '<tr>
                                         <td>'.$row["id"].'</td>
                                         <td>'.$row["name"].'</td>
                                         <td>'.$row["section"].'</td>
                                         <td>'.$row["group"].'</td>
                                         <td>'.$row["githubLink"].'</td>
                                         </tr>';                                                                       
                               }
                                
                          }
                           
                          ?>
                           
                     </table>  
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