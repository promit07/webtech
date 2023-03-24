<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
          
          <style type="text/css">
               table, tr, td,th{
                    border: 1px solid black;
                    border-collapse: collapse;
               }
          </style>
      </head>  
      <body>
      <?php include 'log_top.php';?>
      <?php
          $id = $name = $username = $password = $gender = $salary = $dob = $ppp = "";
          $index = 0;
      ?>
        <div>              
                
                          <?php   
                          $data = file_get_contents("../model/hhhusers.json");
                          $data = json_decode($data, true);
                          if (isset($data)) {
                              foreach($data as $row)  
                               {  
                                    if ($row["id"] == $_GET["id"]) {

                                        $id = $row["id"];
                                        $name = $row["name"];
                                        $username = $row["username"];
                                        $password = $row["password"];
                                        $gender = $row["gender"];
                                        $salary = $row["salary"];
                                        $dob = $row["dob"];
                                        $ppp = $row["profilePicPath"];
                                        //var_dump($row);

                                        /*
                                        echo '<tr>
                                         <td>'.$row["name"].'</td>
                                         <td>'.$row["email"].'</td>
                                         <td>'.$row["username"].'</td>
                                         <td>'.$row["password"].'</td>
                                         <td>'.$row["gender"].'</td>
                                         <td>'.$row["dob"].'</td>
                                         <td>'.$row["profilePicPath"].'</td>
                                         <!--<td><a href="staffeditedit.php?email='.$row["email"].'">Edit</a></td>-->
                                         </tr>'; 
                                         */
                                         //echo $index;
                                         break;
                                    }
                                    else{
                                        $index++;
                                    }
                               } 
                          }
                          ?>
                     <!--</table>  -->
                     <a href="view_profile.php">Back</a>
                   </div>
                 </div>
                        
        <fieldset>
		<table border="1" width="100%">
			<tr>
				<td width="75%">
					<fieldset>
						<legend>EDIT PROFILE</legend>
						<form method="post" action="">
								
								<legend>ID</legend>
								<input type="text" name="id" value="<?php echo $id; ?>">
								<hr>
							

								
								<legend>Name</legend>
								<input type="text" name="name" value="<?php echo $name; ?>">
								<hr>

                                        <legend>Username</legend>
								<input type="text" name="username" value="<?php echo $username; ?>">
								<hr>
							
                                        <legend>Password</legend>
								<input type="text" name="password" value="<?php echo $password; ?>">
								<hr>
							
								<legend>Gender</legend>
								<input type="radio" name="gender" value="male" id="male" <?php if ($gender=="male") echo "checked"; ?>>Male
								<input type="radio" name="gender" value="female" id="female" <?php if ($gender=="female") echo "checked"; ?>>Female
								<input type="radio" name="gender" value="others" id="others" <?php if ($gender=="others") echo "checked"; ?>>Others
								<br><span style="color: red;"><?php //echo $genderErr ?></span>
								<hr>

                                        <legend>Salary</legend>
								<input type="text" name="salary" value="<?php echo $salary; ?>">
								<hr>
							
								<legend>Date of birth</legend><br>
								<input type="date" name="dob" value="<?php echo $dob ?>">
								<br>
								<span style="color: red;"><?php //echo $dobErr ?></span><br>
								<hr>

                                        <legend>PPP</legend>
								<input type="text" name="ppp" value="<?php echo $ppp; ?>">
								<hr>
							

								<input type="submit" name="submit" value="Submit">

						</fieldset>
					</td>
				</tr>
			</table>
		</fieldset>


          <?php
          
          if ($_SERVER["REQUEST_METHOD"] == "POST") {

               $new_data = array(  
                    'id'               =>     $_POST['id'],  
                    'name'          =>     $_POST["name"],  
                    'username'     =>     $_POST["username"],  
                    'password'     =>   $_POST["password"],
                    'gender'     =>     $_POST["gender"],  
                    'salary'     =>     $_POST["salary"],  
                    'dob'     =>     $_POST["dob"],
                    'profilePicPath' => $_POST["ppp"]
               );
               
               $current_data = file_get_contents('../model/hhhusers.json');  
               $data = json_decode($current_data, true);
               //var_dump($data);
               echo '<br>';
               $data[$index] = $new_data;
               $final_data = json_encode($data);
               if(file_put_contents('../model/hhhusers.json', $final_data))  
               {  
                    echo "<p>Done Successfully</p>";
               }
               else {
                    echo "<p>fatal error!</p>";
               }
          }
          
          ?>
                 <?php include 'footer.php';?>


      </body>  
 </html>  