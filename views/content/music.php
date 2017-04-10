<?php

if (!isset($_SESSION['viewMusic'])) {
  $pageview->pageView("music");
  $_SESSION['viewMusic'] = 0;
}else {

}



 ?>

<body>
    <!-- Start Container -->
     <div id="container">
        <div class="slider music">
          <!-- Start Nav-Bar -->
            <div class="nav-bar red">
                <div class="logo">
                     <a href="?action=music"><img src="img/bemikaMusic-hor.png" alt="logo"></a>
                </div>
                 <div class="flex-spacer"></div>
                  <ul class="hidden-xs">
                    <li><a href="?action=default">Bemika</a></li>
                    <li><a href="?action=movies">Movies</a></li>
                    <li><a href="?action=software">Software</a></li>
                    <li><a href="?action=music">Music</a></li>
                    <li><a href="?action=sport">Sport</a></li>
                  </ul>

           <!-- Start Nav-Bar Collapse -->
               <a id="hambur" class="hidden-sm hidden-md hidden-lg">&#9776;</a>
                <div class="hidden-sm hidden-md hidden-lg uthink menumusic">
                  <a href="?action=default">Bemika</a>
                  <a href="?action=movies">Movies</a>
                  <a href="?action=software">Software</a>
                  <a href="?action=music">Music</a>
                  <a href="?action=sport">Sport</a>
                </div>
              <!-- End Nav-Bar Collapse -->
            </div>
             <!-- End Nav-Bar -->
        </div>
    <!-- Start Photo under Nav-Bar -->
        <div class="content">
            <h1>Bemika Music</h1>
            <p>Rocking collaboration between creative, music loving individuals and organisations through temporary and long lasting projects, providing opportunity for personal development and creativity.</p>
        </div>
    <!--Start Category-->
       <section id="categorie">
         <?php
         foreach ($category->getCategory("music", "3") as $key => $value) {
           echo '<div class="row" id="catrow">';
              echo '<div class="col-lg-12 text-center">';
                  echo "<h2>" . $value['title'] . "</h2>";
                  echo '<hr class="star-primary">';
                  $id = $value['title'];
                  echo '<div class="row">';
                    foreach ($article->getCategoryA($id,"4") as $key => $value) {
                        echo '<div class="col-sm-3 portfolio-item">';
                            echo '<a href="?action=articleView&art='. $value['id'] .'" class="portfolio-link">';
                            echo '<div class="caption orange">';
                            echo '</div>';
                            echo '<img src="img/upload/' . $value['file'] . '" class="img-responsive" alt=""></a>';
                            echo "<h3>" . $value['title'] . "</h3>";
                            $date = new DateTime($value['date_created']);
                            echo "<h4>" . date_format($date , "d-m-Y") . "</h4>";
                        echo '</div>';
                    }
                  echo '</div>';
                  echo '<hr class="star-primary">';
                  echo '<div class="page-navigation">';
                  echo '<button><a href="?action=category&cat='. $id .'">See More </a></button>';
                  echo '</div>';
              echo '</div>';
           echo '</div>';


         }






              ?>
        </section>
        <!--Start Category-->
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
    <!-- End Container -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="javascript/topscript.js" type="text/javascript"></script>
</body>

</html>
