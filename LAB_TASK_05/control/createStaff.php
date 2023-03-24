<?php  
require_once '../model/model.php';


if (isset($_POST['createStaff'])) {
	$data['name'] = $_POST['name'];
	$data['gender'] = $_POST['gender'];
	$data['salary'] = $_POST['salary'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploaded_folder/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addStaff($data)) {
  	echo 'Successfully added!! <a href="../view/view_staffs.php">View Staffs</a>';
  }
} else {
	echo 'You are not allowed to access this page. <a href="../view/view_staffs.php">View Staffs</a>';
}

?>