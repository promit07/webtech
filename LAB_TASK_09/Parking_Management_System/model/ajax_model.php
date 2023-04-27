<?php 
function db_conn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";


    try {
        $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // var_dump($conn) ;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $conn;
}

function ajax_location_query($segment) {

    $conn = db_conn();
    if (!empty($segment)) {
        //$sql = "SELECT name, donation_amount, country FROM fund_data WHERE name LIKE '%$segment%'";
        $sql = "SELECT name, type, cost, slot FROM location WHERE name LIKE '%$segment%'";
    }
    else {
        //$sql = "SELECT name, donation_amount, country FROM fund_data";
        $sql = "SELECT name, type, cost, slot FROM location";
    }
    try {
        $statement = $conn->query($sql);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    /*
    echo "<table class='table table-bordered'><tr><th scope='col'>Name</th><th scope='col'>Donation</th><th scope='col'>Country</th></tr>";
    foreach($result as $i => $row) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . "$" . $row['donation_amount'] . "</td>";
    echo "<td>" . $row['country'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    */

    echo "<table><tr><th>Name</th><th>Type</th><th>Cost</th><th>Slot</th></tr>";
    foreach($result as $i => $row) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['cost'] . "</td>";
    echo "<td>" . $row['slot'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
}

function showAllLocation(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `location` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}