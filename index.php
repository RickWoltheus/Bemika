<?php

require('includes/config.php');
require('includes/bootstrap.php');

// Lees de actie uit de URL
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Het stukje hieronder is de (front) controller
switch ($action) {
	
	case 'movies':
	    $which_page = "movies";
			
			
			$user = new User();
	 
      include ('views/head/standardHead.php');
	    include ('views/content/bemikaMoviesPage.php');
	break;
	default:
	    $which_page = "landingsPage";
			$userId = isset($_GET['userId']) ? $_GET['userId'] : '';
			
			$user = new User();
	    $cityList = $user->getAll();
	
	    include ('views/head/landingsHead.php');
	    include ('views/content/bemikaLandingsPage.php');
		break;
}



