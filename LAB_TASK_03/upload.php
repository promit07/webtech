
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if ($_FILES["fileToUpload"]["size"] > 4000000)
{
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

if($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png")
{
  echo "Sorry, only JPEG, JPG & PNG files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0)
{
  echo "Sorry, your file was not uploaded.";
}
else
{
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
  {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  }
  else
  {
    echo "Sorry, there was an error uploading your file.";
  }
}

?>