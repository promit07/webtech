<?php  
require_once '../model/model.php';


if (isset($_POST['updateStaff'])) {
	$data['name'] = $_POST['name'];
	$data['gender'] = $_POST['gender'];
	$data['salary'] = $_POST['salary'];

	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploaded_folder/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateStaff($_POST['id'], $data)) {
  	echo 'Successfully updated!!';

  	header('Location: ../view/view_staffs.php?id=');
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>