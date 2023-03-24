<?php 

require_once ('../model/model.php');

function fetchAllStaffs(){
	return showAllStaffs();

}
function fetchStaff($id){
	return showStaff($id);

}