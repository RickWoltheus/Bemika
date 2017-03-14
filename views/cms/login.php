<?php  

if(isset($_POST['submit']))
{
	$uname = strip_tags($_POST['uname']);
	$upass = strip_tags($_POST['pass']);
		
	if($login->doLogin($uname,$upass))
	{
		$login->redirect('?Page=cms');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}?>
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
