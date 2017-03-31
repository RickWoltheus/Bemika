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
<body>

<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" action="" method="post">
      
        <h2 class="form-signin-heading">Log In to WebApp.</h2><hr />
        
        <input type="text" class="form-control" name="uname" placeholder="Username" required />

        <input type="password" class="form-control" name="pass" placeholder="Your Password" />

        <input type="submit" name="submit">
        
        </div>  
      </form>
    </div>
</div>

</body>
</html>
