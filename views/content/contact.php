<!DOCTYPE HTML>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/bemika/styles.css">
</head>

<body>
    <!-- Start Container -->
     <div id="container">

          <!-- Start Nav-Bar -->
            <div class="nav-bar white">
                <div class="logo">
                    <img src="../../img/bemika1.png" alt="logo">
                </div>
                 <div class="flex-spacer"></div>
                  <ul class="hidden-xs">
                    <li><a href="../../?action=default">Bemika</a></li>
                    <li><a href="../../?action=movies">Movies</a></li>
                    <li><a href="../../?action=software">Software</a></li>
                    <li><a href="../../?action=music">Music</a></li>
                    <li><a href="../../?action=sport">Sport</a></li>
                  </ul>

           <!-- Start Nav-Bar Collapse -->
               <a id="hambur" class="hidden-sm hidden-md hidden-lg">&#9776;</a>
                <div class="hidden-sm hidden-md hidden-lg uthink">
                    <a href="../../?action=default">Bemika</a>
                      <a href="../../?action=movies">Movies</a>
                      <a href="../../?action=software">Software</a>
                      <a href="../../?action=music">Music</a>
                      <a href="../../?action=sport">Sport</a>
                </div>
              <!-- End Nav-Bar Collapse -->
            </div>
             <!-- End Nav-Bar -->


<!-- row vergeten :P -->
<div class="row flex-row">
<div class="col-md-5 col-lg-5 vcenter">
    <div class="form-area ">
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                    </div>

        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>
</div>
</div>
   <!--Begin Footer-->
        <footer class="footer1">
    <div class="footer">
        <div class="container">

        </div> <!--/.container-->
    </div> <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <div class="pull-left"> Copyright © <a>2015-2017 Bemika</a>.  All right reserved.</div>
            <div class="pull-right">
                <ul>
                  <li><a href="privacy.php">Privacy policy</a></li>
                  <li><a href="terms.php">Terms and conditions</a></li>
                  <li><a href="contact.php">Contact</a></li>
                    <li><a href="http://nl.linkedin.com/in/milosdespotovic">LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
  </div>
    <!-- End Container -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/notfixed.js" type="text/javascript"></script>
  </div>
</body>

</html>
