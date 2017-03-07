<?php

require('includes/config.php');
require('includes/bootstrap.php');

// Lees de actie uit de URL
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Het stukje hieronder is de (front) controller
switch ($action) {
	
	//??MOVIES
	case 'movies':
	    $which_page = "movies";
      include ('views/head/standardHead.php');
	    include ('views/content/movies.php');
	break;
	
	//??SOFTWARE
	case 'software':
			$which_page = "software";
			include ('views/head/standardHead.php');
			include ('views/content/software.php');
	break;
	
	//??SPORT
	case 'sport':
			$which_page = "sport";
			include ('views/head/standardHead.php');
			include ('views/content/sport.php');
	break;
	
	//??MUSIC
	case 'music':
			$which_page = "music";
			include ('views/head/standardHead.php');
			include ('views/content/music.php');
	break;
	
	//??DEFAULT == LANDING
	default:
	    $which_page = "landingsPage";
			$userId = isset($_GET['userId']) ? $_GET['userId'] : '';
			
			$user = new User();
	    $cityList = $user->getAll();
	
	    include ('views/head/landingsHead.php');
	    include ('views/content/landing.php');
		break;
}



