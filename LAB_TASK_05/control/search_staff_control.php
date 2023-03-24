<?php

require_once '../model/model.php';

if (isset($_POST['findStaff'])) {
	
        try {
    	
            $allSearchedStaffs = searchStaff($_POST['name']);
            require_once '../view/view_searched_staff.php';
    
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    
}