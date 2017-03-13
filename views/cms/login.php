
<body>

<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" action="doLogin($_POST('uname'), $_POST('uname'), $_POST('upass'))" method="post">
      
        <h2 class="form-signin-heading">Log In to WebApp.</h2><hr />
        
        <input type="text" class="form-control" name="uname" placeholder="Username or E mail ID" required />

        <input type="password" class="form-control" name="pass" placeholder="Your Password" />

        <input type="submit" name="submit">
        
        </div>  
      </form>
    </div>
</div>

</body>
</html>
<?php  
// $login = new USER();
// 
// if($login->is_loggedin()!="")
// {
// 	$login->redirect('?Page=cms');
// }
// if(isset($_POST['btn-login']))
// {
// 	$uname = strip_tags($_POST['txt_uname_email']);
// 	$umail = strip_tags($_POST['txt_uname_email']);
// 	$upass = strip_tags($_POST['txt_password']);
// 		
// 	if($login->doLogin($uname,$umail,$upass))
// 	{
// 		$login->redirect('?Page=cms');
// 	}
// 	else
// 	{
// 		$error = "Wrong Details !";
// 	}	
// }