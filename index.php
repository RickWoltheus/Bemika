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
	
	//??ARTICLES
	case 'articles':
	$page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;
	$article = new Article();
	include('views/content/articles.php');
	break;
	
	//?? HERE STARTS CMS ITEMS
	//??NEW ADMIN
	case 'admin_register':
		$user = new User(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
		
    include('views/cms/new_admin.php');
	break;
	
	//??ITEMS 
	case 'items':
	$item = new Article();
	include ('views/cms/items.php');
	break;
	
	//??NEW ITEM 
	case'new_item':
	$item = new Article();
	include ('views/cms/add.php');
	break;
	
	//??DELETE ITEM 
	case'delete':
	$item = new $_GET['class']();
	include ('views/cms/delete.php');
	break;
	
	//??EDIT ITEM 
	case 'edit':
	$item = new $_GET['class']();
	include ('views/cms/edit.php');
	break;
	//??LOGIN
	case 'admin_login':
	  $login = new User(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

	  include ('views/cms/login.php');
	break;
	
	//??DEFAULT == LANDING
	default:
    include ('views/content/landing.php');
	break;
}



