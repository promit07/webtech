<?php  
require_once '../control/staffs_info.php';

$staff = fetchAllStaffs();


    include "log_top.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Gender</th>
			<th>Salary</th>
			<th>Password</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($staff as $i => $staff): ?>
			<tr>
				<td><?php echo $staff['name'] ?></a></td>
				<td><?php echo $staff['gender'] ?></td>
				<td><?php echo $staff['salary'] ?></td>
				<td><?php echo $staff['password'] ?></td>
				<td><img width="100px" src="../uploaded_folder/?php echo $staff['image'] ?>" alt="<?php echo $staff['name'] ?>"></td>
				<td><a href="edit_staff.php?id=<?php echo $staff['id'] ?>">Edit</a>&nbsp<a href="../control/delete_Staff.php?id=<?php echo $staff['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>