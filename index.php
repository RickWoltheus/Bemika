<?php
session_start();
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
	$article = new Article();
	include('views/content/articles.php');
	break;
	//??FETCHES PAGES FOR LOAD MORE
	case 'fetch_pages':
		$class = new $_POST['class']();
		include ('includes/fetch_pages.php');
		break;
	
	//??DEFAULT == LANDING
	default:
		include ('views/content/landing.php');
	break;
	
	//?? HERE STARTS CMS ITEMS
	//??DASHBOARD
	case 'dashboard':
		include('views/cms/functions/dashboard.php');
		include('includes/session.php');
	break;
	
	//??PAGES
	case 'pages':
	$page = new Page();
	$category = new Category();
	include('views/cms/functions/pages.php');
	include('includes/session.php');
	break;
	
	//??activity
	case 'activity':
	$article = new Article();
	$activity = new Activity();
	include ('views/cms/functions/activity.php');
	include('includes/session.php');
	break;
	
	//??ITEMS 
	case 'items':
	$item = new $_GET['class']();
	include ('views/cms/functions/items.php');
	include('includes/session.php');
	break;
	
	//??NEW ITEM 
	case'new_item':
	$category = new Category();
	$activity = new Activity();
	$item = new $_GET['class']();
	include('includes/session.php');
	include ('views/cms/functions/add.php');
	
	break;
	
	//??DELETE ITEM 
	case'delete':
	$item = new $_GET['class']();
	include ('views/cms/functions/delete.php');
	include('includes/session.php');
	break;
	
	//??EDIT ITEM 
	case 'edit':
	$category = new Category();
	$activity = new Activity();
	$item = new $_GET['class']();
	include ('views/cms/functions/edit.php');
	include('includes/session.php');
	break;
	//??LOGIN
	case 'admin_login':
	  $login = new User(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

	  include ('views/cms/functions/login.php');
	break;
	
	//??NEW ADMIN
	case 'new_admin':
		$user = new User(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
		include ('views/cms/parts/menu.php');
		include('views/cms/functions/new_admin.php');
		include('includes/session.php');
	break;
	
	//?? PAGE WITH ALL ADMINS
	case 'accounts':
		$user = new User(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
		include('views/cms/functions/users.php');
		break;
	

}



