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

			$pageview = new Stat();
			$category = new Category();
			$article = new Article();
			include 'views/content/head.php';
	    include ('views/content/movies.php');
	break;

	//??SOFTWARE
	case 'software':
			$pageview = new Stat();
			$category = new Category();
			$article = new Article();
			include 'views/content/head.php';
			include ('views/content/software.php');
	break;

	//??SPORT
	case 'sport':
			$pageview = new Stat();
			$category = new Category();
			$article = new Article();
			
			include 'views/content/head.php';
			include ('views/content/sport.php');
	break;

	//??MUSIC
	case 'music':
			$pageview = new Stat();
			$category = new Category();
			$article = new Article();
			
			include 'views/content/head.php';
			include ('views/content/music.php');
	break;

	//??ARTICLES
	case 'articles':
	$article = new Article();
	include 'views/content/head.php';
	include('views/content/articles.php');
	break;
	//??FETCHES PAGES FOR LOAD MORE
	case 'fetch_pages':
		$class = new $_POST['class']();
	
		include ('includes/fetch_pages.php');
		break;
		
		case 'fetch_pages2':
			$class = new $_POST['class']();
		
			include ('includes/fetch_pages2.php');
			break;

		case 'articleView':
				$article = new Article();
				include 'views/content/head.php';
				include 'views/content/articleView.php';
		break;

		case 'category':
	  $article = new Article();
		include 'views/content/head.php';
		include 'views/content/category.php';
		break;

		case 'allarticles':
	  $article = new Article();
		include 'views/content/head.php';
		include 'views/content/allarticles.php';
		break;
	
	//?? HERE STARTS CMS ITEMS
	//??DASHBOARD
	case 'dashboard':
	include('includes/session.php');
		include('views/cms/functions/dashboard.php');
		
	break;
	
	//??PAGES
	case 'pages':
	include('includes/session.php');
	$page = new Page();
	$category = new Category();
	include('views/cms/functions/pages.php');
	break;
	
	//??activity
	case 'activity':
	include('includes/session.php');
	$article = new Article();
	$activity = new Activity();
	include ('views/cms/functions/activity.php');
	
	break;
	
	//??STATISTICS
	case 'stats':
	include('includes/session.php');
	$stat= new Stat();
	include ('views/cms/functions/stats.php');
		break;
	
	//??ITEMS 
	case 'items':
	include('includes/session.php');
	$item = new $_GET['class']();
	include ('views/cms/functions/items.php');

	break;
	
	//??NEW ITEM 
	case'new_item':
	$page = new Page();
	$category = new Category();
	$activity = new Activity();
	$item = new $_GET['class']();
	include('includes/session.php');
	include ('views/cms/functions/add.php');
	
	break;
	
	//??DELETE ITEM 
	case'delete':
	$item = new $_GET['class']();
	include('includes/session.php');
	include ('views/cms/functions/delete.php');
	include('includes/session.php');
	break;
	
	//??EDIT ITEM 
	case 'edit':
	include('includes/session.php');
	$page = new Page();
	$category = new Category();
	$activity = new Activity();
	$item = new $_GET['class']();
	include ('views/cms/functions/edit.php');
	
	break;
	
	//??PREVIEW 
	case 'preview':
	include('includes/session.php');
	$page = new Page();
	$category = new Category();
	$activity = new Activity();
	$item = new $_GET['class']();
	include 'views/content/head.php';
		include("views/cms/functions/preview.php");
		break;
		
		//??UNHIDDEN
		case'unhidden':
    $article = new Article();
		include("includes/unhidden.php");
		break;
		
	//??LOGIN	
	case 'admin_login':
	  $login = new User(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

	  include ('views/cms/functions/login.php');
	break;
	

	
	//??NEW ADMIN
	case 'new_admin':
	include('includes/session.php');
		$user = new User(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
		include ('views/cms/parts/menu.php');
		include('views/cms/functions/new_admin.php');
	break;
	
	//?? PAGE WITH ALL ADMINS
	case 'accounts':
	  include('includes/session.php');
		$user = new User(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
		include('views/cms/functions/users.php');
		break;
		
	//?? DELETE users
	
	case 'delete-user':
	  include('includes/session.php');
		$user = new User(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
		include('views/cms/functions/delete-user.php');
		break;
		
		case 'logout':
		  $user = new User(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
			include('views/cms/functions/logout.php');
			break;
			
			//??DEFAULT == LANDING
default:
include 'views/content/head.php';
	include ('views/content/landing.php');
break;


	

}



