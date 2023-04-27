
<!DOCTYPE html>
<html>
  <style>
    table, th, td {
  border: 1px solid black;
  border-radius: 10px;
}
  </style>
<body>
<?php include "log_top.php"; ?>
    <!--
    <form method="post" action="../control/search_user_control.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="user_name" />
      <input type="submit" name="findUser" value="Search"/>
    </form>-->
    <?php include "ajax_search.php"; ?>
    <a href="view_profile.php">Back</a>
  </body>
</html>