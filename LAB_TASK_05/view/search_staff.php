<!DOCTYPE html>
<html>
  <body>
<?php 
    include "log_top.php";

?>

    <form method="post" action="../control/search_staff_control.php">
      <h1>SEARCH FOR STAFFS</h1>
      <input type="text" name="name" />
      <input type="submit" name="findStaff" value="Search"/>
    </form>


    <table>
	<thead>
		<tr>
			<th>Staff ID</th>
			<th>Staff Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedStaffs as $i => $staff): ?>
			<tr>
				<td><?php echo $staff['id'] ?></a></td>
				<td><?php echo $staff['name'] ?></td>
                <td><?php echo $staff['gender'] ?></td>
                <td><?php echo $staff['salary'] ?></td>
                <td><?php echo $staff['password'] ?></td>
				<td><a href="edit_staff.php?php echo $staff['id'] ?>">Edit</a>&nbsp<a href="../control/delete_Staff.php?id=<?php echo $staff['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	
</table>

  </body>
</html>