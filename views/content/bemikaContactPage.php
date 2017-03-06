

<!DOCTYPE HTML>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Welkom bij Bemika movies</title>
  <link rel="stylesheet" type="text/css" href="css/parts/movie.css">
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/topscript.js" type="text/javascript"></script>
</head>

<body>
    <div id="container">
        <div class="">
            <div class="nav-bar">
                <div class="logo"></div>
                <ul>
                    <li><a href="index.html">Bemika</a></li>
                    <li>Software</li>
                    <li>Music</li>
                    <li>Sport</li>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>Contact</h1>

            <div class="contactform">

                        <form id="myForm" action="form.php" method="post" enctype="multipart/form-data">

                            <label>Voornaam</label>
                            <input class="apparte" name="name" required="required" placeholder="Uw voornaam..." id="naamvak">

                            <label>Achternaam</label>
                            <input class="apparte" name="surname" required="required" placeholder="Uw achternaam..." id="naamvak">

                            <label>Email adres</label>
                            <input class="apparte" name="email" type="email" required="required" placeholder="Bijv.: jouwemail@voorbeeld.nl">

                            <label>Onderwerp</label>
                            <input class="apparte" name="subject" type="subject" required="required" placeholder="Bijv.: responsive site">


                            <label>Uw vraag</label>
                            <textarea name="message" cols="20" rows="5" required="required" placeholder="Typ hier uw vraag..."></textarea>


                            <input id="cancel" name="cancel" type="reset" value="Opnieuw" />

                            <input id="submit" name="submit" type="submit" value="Verzenden">

                        </form>



        </div>
</div>

       <footer class="footer">
            <div class="copyright">&copy; 2015-2017 Bemika. All rights reserved.</div>
            <div class="links">
                <ul>
                    <li><a href="privacy.html">Privacy policy</a></li>
                    <li><a href="terms.html">Terms and conditions</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="http://nl.linkedin.com/in/milosdespotovic">LinkedIn</a></li>
                </ul>
            </div>

        </footer>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>

