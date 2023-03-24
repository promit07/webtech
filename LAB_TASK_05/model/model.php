<?php 

require_once '../view/db_connect.php';


function showAllStaffs(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `staffs` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showStaff($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `staffs` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchStaff($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `staffs` WHERE name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addStaff($data){
	$conn = db_conn();
    $selectQuery = "INSERT into staffs (name, gender, salary, password, image)
VALUES (:name, :gender, :salary, :password, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':gender' => $data['gender'],
        	':salary' => $data['salary'],
        	':password' => $data['password'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateStaff($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE staffs set name = ?, gender = ?, salary = ? where ID = ?";
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

function deleteStaff($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `staffs` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}