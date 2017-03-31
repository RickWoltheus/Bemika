<?php

	$session = new Page();
	
	// if user session is not active(not loggedin) this page will help 'home.php and profile.php' to redirect to login page
	// put this file within secured pages that users (users can't access without login)
	
	if(!$session->is_loggedin($_SESSION["user"]))
	{
		// session no set redirects to login page
		$session->redirect('index.php');
	}