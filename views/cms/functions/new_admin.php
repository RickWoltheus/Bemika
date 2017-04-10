
 <!doctype html>
 <!-- Ashvith Arumuganathan -->
 <html>
 <head>
 
 <title> CMS </title>
 <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
 <script src="https://use.fontawesome.com/e28b54a9f9.js"></script>
 
 <!-- CSS -->
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/addarticles.css">
 
 </head>
 <body>
   <div class="newPost">
				<form method="post" class="form-signin">
								 
						<input type="text" class="form-control" name="uname" placeholder="Enter Username"/><br>

						<input type="text" class="form-control" name="umail" placeholder="Enter E-Mail ID"/><br>

						<input type="password" class="form-control" name="pass" placeholder="Enter Password"/><br>
            
						<select class="level" name="level">
              <option value="sub-admin">sub-admin</option>
						  <option value="super-admin">super-admin</option>
						</select><br>

						<input type="submit" name="submit" value="submit new user">
 
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{

 $uname = strip_tags($_POST['uname']);
 $umail = strip_tags($_POST['umail']);
 $upass = strip_tags($_POST['pass']);	
 $level = strip_tags($_POST['level']);	
 
 if($uname=="")	{
	 $error[] = "provide username !";	
 }
 else if($umail=="")	{
	 $error[] = "provide email id !";	
 }
 else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
		 $error[] = 'Please enter a valid email address !';
 }
 else if($upass=="")	{
	 $error[] = "provide password !";
 }
 else if(strlen($upass) < 6){
	 $error[] = "Password must be atleast 6 characters";	
 }
 else
 {
	 try
	 {
			// $user->checkexistence("name", $uname);
		 // if($row['user_name']==$uname) {
		 // 	$error[] = "sorry username already taken !";
		 // }
		 // else if($row['user_email']==$umail) {
		 // 	$error[] = "sorry email id already taken !";
		 // }
		 // else
		 // {
			 if($user->register($uname,$umail,$upass,$level)){	
				 $user->redirect('?action=accounts');
		 }
	 }
	 catch(PDOException $e)
	 {
		 echo $e->getMessage();
	 }
 }	
}

?>