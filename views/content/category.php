
 <body>
     <div id="container">
           <div class="nav-bar">
                     <div class="logo">
                        <a href="?action=default"><img src="img/bemikaFilm-hor.png" alt="logo"></a>
                     </div>
                     <div class="flex-spacer"></div>
                 <ul class="hidden-xs">
                   <li><a href="?action=default">Bemika</a></li>
                   <li><a href="?action=movies">Movies</a></li>
                   <li><a href="?action=software">Software</a></li>
                   <li><a href="?action=music">Music</a></li>
                   <li><a href="?action=sport">Sport</a></li>
                 </ul>
                 <a id="hambur" class="hidden-sm hidden-md hidden-lg">&#9776;</a>
                 <div class="hidden-sm hidden-md hidden-lg uthink">
                   <a href="?action=default">Bemika</a>
                   <a href="?action=movies">Movies</a>
                   <a href="?action=software">Software</a>
                   <a href="?action=music">Music</a>
                   <a href="?action=sport">Sport</a>
                 </div>
             </div>

             <p class="center">
 	            <a href="javascript:window.history.go(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i>Previous Page</a>
             </p>
             </p>

         <section id="categorie">

             <div class="row">
                 <div class="col-lg-12 text-center">
                     <h1><?php
                     $id = $_GET['cat'];
                     echo $id;

                      ?></h1>
                 </div>
             </div>

             <div class="row">

                 <?php
                 $id = $_GET['cat'];
                 foreach ($article->getLimitedArticles($id,"100") as $key => $value) {
                          echo '<div class="col-sm-3 portfolio-item">';
                          echo '<a href="?action=articleView&art='. $value['id'] .'" class="portfolio-link">';
                          echo '<div class="caption orange">';
                          echo '</div>';
                          echo '<img src="img/upload/' . $value['file'] . '" class="img-responsive" alt="" width="300" height="300" > </a>';
                          echo "<h3>" . $value['title'] . "</h3>";
                          $date = new DateTime($value['date_created']);
                          echo "<h4>" . date_format($date , "d-m-Y") . "</h4>";
                          echo '</div>';
                           }



                  ?>
              </div>

 </section>
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
                   <li><a href="views/content/privacy.php">Privacy policy</a></li>
                   <li><a href="views/content/terms.php">Terms and conditions</a></li>
                   <li><a href="views/content/contact.php">Contact</a></li>
                     <li><a href="http://nl.linkedin.com/in/milosdespotovic">LinkedIn</a></li>
                 </ul>
             </div>
         </div>
     </div>
 </footer>
 <!--Eind Footer-->

     </div>
         <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <script src="js/topscript.js" type="text/javascript"></script>
 </body>
