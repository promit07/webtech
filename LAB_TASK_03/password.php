<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>


<h2>CHANGE PASSWORD</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 

<p><b>Current Password    :</b></p>         
<input type="password" name="password" value="$currpass">
<p style="color: green;"><b>New Password    :</b></p> 
<input type="password" name="newPass" value=""><br>
<p style="color:red"><b>Retype New Password : </b></p>
<input type="password" name="reTypePass" value="">
<hr>
<br><input type="submit" name="submit" value="Submit"><br><br>

</form>

<?php
$currpass="abc@1234";
$newpass=$retypepass="";

   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
   
    $newpass=$_POST["newPass"];
    $retypepass=$_POST["reTypePass"];

    if(!empty($_POST["newPass"]) && !empty($_POST["reTypePass"]))
    {
        if($currpass==$newpass)
        {
             echo " Can not be same as the previous password ";
        }
        else if($newpass!=$retypepass)
        {
            echo " Does not match with new password ";
        }
        else 
        {
            echo "password changed";
        }
    }
    else
    {
        echo "current password or retype password can not be empty ";
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
</body>
</html>
