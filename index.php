<?php

require('includes/config.php');
require('includes/bootstrap.php');

// Lees de actie uit de URL
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Het stukje hieronder is de (front) controller
switch ($action) {
	
	case 'get_one_city':
	
			$userId = isset($_GET['userId']) ? $_GET['userId'] : '2';
			
			$user = new User();
	    $cityList = $user->getOne($userId);

	    include ('views/show_one_city.php');
	break;
	
	default:
	
			$userId = isset($_GET['userId']) ? $_GET['userId'] : '';
			
			$user = new User();
	    $cityList = $user->getAll();
	
	    include ('views/show_all_city.php');
		break;
}



