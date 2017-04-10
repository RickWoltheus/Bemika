<?php
if (isset($_POST['submit'])) {
	if($login->dologin($_POST['uname'],$_POST['pass'])) {
		if( isset($_SESSION["user"]) ){
	    $login->redirect('?action=dashboard');
  }
	
	}else{
		echo "failed to log in";
	}
}
?>
<!doctype html>
<!-- Jennifer Hoogeland -->
<html>
<head>

<title> Bemika CMS Login </title>

<!-- CSS -->
<link rel="stylesheet" href="css/login.css">


</head>
<body bgcolor="#FFD777">
  <div class="containerlogin">
					<form class="form-login" action="" method="post">
					<h2 class="form-login-heading">Log In</h2>
					<div class="login-wrap">
					 <center><input type="text" class="form-control" name="uname" placeholder="Username" required /></center>

					 <center><input type="password" class="form-control" name="pass" placeholder="Your Password" /></center>

 				 	 <center><button name="submit" class="button" href="index.html" type="submit"><i class="fa fa-lock"></i> Log in</button></center>
					 
				 </div>
				 <h2 class="ending"></h2>
				 </form>
    </div>
</body>
</html>

