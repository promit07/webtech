<?php 
    include "log_top.php";
    require_once '../control/search_staff_control.php';

?>

    <form method="post" action="../control/search_staff_control.php">
      <h1>SEARCH FOR STAFFS</h1>
      <input type="text" name="name"/>
      <input type="submit" name="findStaff" value="Search"/>
    </form>


        <table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
            <th>Gender</th>
            <th>Salary</th>
            <th>Password</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

    
    <?php 

        if(isset($_POST['name'])) {
            $allSearchedStaffs = searchStaff($_POST['name']);
            if(empty($_POST['name']))
            {
                echo "For The Specific Staff Enter The Name First";
            }
        }

    ?>

    <?php if(isset($allSearchedStaffs)): ?>
        <?php foreach ($allSearchedStaffs as $i => $staff): ?>
            <tr>
                <td><?php echo $staff['id'] ?></td>
                <td><?php echo $staff['name'] ?></td>
                <td><?php echo $staff['gender'] ?></td>
                <td><?php echo $staff['salary'] ?></td>
                <td><?php echo $staff['password'] ?></td>
                <td><a href="edit_staff.php?id=<?php echo $staff['id'] ?>">Edit</a>&nbsp;<a href="../control/delete_Staff.php?id=<?php echo $staff['id'] ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>

	</tbody>
</table>
