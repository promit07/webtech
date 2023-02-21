<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <style>
        table
        {
            border: 1px solid black;
            border-radius: 10px;
        }
        td
        {
            padding: 9px;
            border-style: none;
        }
        select
        {
            width: 48%;
        }  
    </style>

</head>

<body>

<h1 align="center">Welcome to Registration</h1>

<table border="2" border-style: dotted align="center" width=25%>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 

        <tr>
            <td>
                <p><b>First Name: </b></p>
                <input type="text" name="name1" placeholder="First Name" id="">
            </td>
        </tr>

        <tr>
            <td>
            <p><b>Last Name: </b></p>
            <input type="text" name="name2" placeholder="Last Name" id="">
            </td>
        </tr>

        <tr>
            <td>
                <p><b>Birth Date :</b></p>
                <input type="date" name="dob">
            </td>
        </tr>
            
        <tr>
            <td>
                <p><b>Gender :</b></p>
                <input type="radio" id="male" name="gender" value="MALE">Male
                <input type="radio" id="female" name="gender" value="FEMALE">Female
            </td>
        </tr>
            
        <tr>
            <td>
                <p><b>Degree :</b></p>
                <input type="checkbox" name='degree[]' value="SSC"> SSC 
                <input type="checkbox" name='degree[]' value="HSC"> HSC 
                <input type="checkbox" name='degree[]' value="BSC"> BSC
            </td>
        </tr>

        <tr>
            <td>
                <p><b>University :</b></p>
                <select name="university">
                    <option value="Empty">Choose your university</option>
                    <option value="AIUB">AIUB</option>
                    <option value="BRAC">BRAC</option>
                    <option value="IUB">IUB</option>
                    <option value="NSU">NSU</option>
                </select>
            </td>
        </tr>
            
        <tr>
            <td>
                <p><b>Credits Completed :</b></p>
                <input type="number" name="credits"> <br><br>
            </td>
        </tr>
            
        <tr>
            <td align="center">
                <input type="submit"> <br> <br>
            </td>
        </tr>

    </form>

</table>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST['name1']))
  {
    echo "First name: Empty";
  } 
  else
  {
    echo "First Name: " .$_POST['name1'];
  }
}

echo"<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST['name2']))
    {
      echo "Last name: Empty";
    }
    else
    {
        echo "Last Name: " .$_POST['name2'];
    }
}

echo"<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
 
      if (empty($_POST['dob']))
      {
        echo "Date of Birth: Empty";
      }
      else
      {
          echo "Date of Birth: " .$_POST['dob'];
      }
}

echo"<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
  if (empty($_POST['gender']))
  {
    echo "Gender: Empty";
  } 
  else
  {
    echo "Gender: " .$_POST['gender'];
  }
}

echo"<br>";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST['degree']))
    {    
        echo "Degree: Empty";
    }
    else
    {
        echo "Degree:";
        echo "<ul>";
        foreach($_POST['degree'] as $value)
        {
            echo "<li>".$value."</li>";
        }
        echo "</ul>";      
    }
}

echo"<br>";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if($_POST['university'] == "")
    {
        echo "University: ";
    }
    else
    {
        echo "University: " . $_POST['university'];
    }
}

echo"<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
  if (empty($_POST['credits']))
  {
    echo "Credits Completed: Empty";
  } 
  else
  {
    echo "Credits Completed: " .$_POST['credits'];
  }
}

?>

</body>
</html>



