<?php 

require_once '../view/db_connect.php';

//require_once '../control/registration_control.php';


function login_user($data) {
    
    $conn = db_conn();
    $selectQuery = "SELECT * FROM drivers WHERE name = :name AND password = :password";

    try {

        $statement = $conn->prepare($selectQuery);
        $statement->execute(
            [
                ':name' => $data['name'],
                ':password' => $data['password']
            ]
        );
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if (empty(($result))) {
        return false;
    }
    else {
        return true;
    }
}


function showAllDrivers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `drivers` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showDriver($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `drivers` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchDriver($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM drivers WHERE name LIKE '%$name%'";

    try{
        $stmt = $conn->query($selectQuery);
        if ($stmt) {
            $rows = $stmt->fetch(PDO::FETCH_ASSOC);
            return $rows;
        } else {
            return null;
        }
    } catch(PDOException $e){
        echo $e->getMessage();
        return null;
    }
}



function addDriver($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into `drivers` (name, email, user_name, password, gender, date)
VALUES (:name, :email, :user_name, :password, :gender, :date)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':user_name' => $data['user_name'],
        	':password' => $data['password'],
        	':gender' => $data['gender'],
            ':date' => $data['date']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateDriver($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE drivers set name = ?, gender = ?, salary = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['gender'], $data['salary'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteDriver($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `drivers` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


function updateDriverInfo($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE drivers set name = ?, email = ?, gender = ?, date = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['gender'], $data['date'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function updateDriverPass($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE drivers set password = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['password'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}