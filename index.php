<?php

require('includes/config.php');
require('includes/bootstrap.php');

// Lees de actie uit de URL
$action = isset($_GET['action']) ? $_GET['action'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '1';

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
	  $user = new User();
			$which_page = "music";
			include ('views/head/standardHead.php');
			include ('views/content/music.php');
	break;
	
	//??DEFAULT == LANDING
	default:
			$user = new User();
			
	    include ('views/cms/login.php');
		break;
}



