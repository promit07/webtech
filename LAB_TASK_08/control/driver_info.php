<?php 

require_once ('../model/model.php');

function fetchAllDrivers()
{
	return showAllDrivers();

}

function login($user_name, $password)
{
	return CheckLogin($user_name, $password);

}


