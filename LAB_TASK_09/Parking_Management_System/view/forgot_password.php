<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php include 'navbar.php';?>
	
	<fieldset>

        <?php

            $msg = $pass = $username = "";
            $email_err = $no_email = "";
            $flag = false;


            if(empty($_POST["email"]))  
            {  
                $email_err = "<label>Enter Email</label>";  
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
                                $msg = "Email has been found.";

                                $username = $value['username'];

                                $pass = $value['password'];

                                $flag = true;
                                                     
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

        <form method="POST" action="<?php echo ($_SERVER['PHP_SELF']);?>">
		<fieldset>	
				<legend>FORGOT PASSWORD</legend>

				Enter email:
				<input type="text" name="email" value=""><span> <?php echo $email_err ?></span>
				<hr>

				<input type="submit" name="submit" value="submit"><br><br>

                <br> <span> <?php echo $msg,$no_email ?></span> <br>

                <br> <?php echo "Your Username is: ".$username; ?> <br>

                <br> <?php echo "Your Password is: ".$pass; ?>
                
			</fieldset>
			
	</form>
	</fieldset>
	
	<?php include 'footer.php';?>
</body>
</html>