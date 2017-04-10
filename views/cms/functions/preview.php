
<?php 
$keys = $item->getLimited(1);
  if (isset($_FILES['file'])) {
    $media = $item->uploadFile();
  }else {
    $media = "";
  }

  $data = $item->getPosts($keys, $media);

  if($idview = $item->insertArray($data, "submit")){
    $activity->newActivity($_SESSION["user"], $_GET['class'], $_POST['title'], "added new record");

  }else{
    echo "something went wrong";
  }

?>

<body>
    <div id="container">

            <div class="nav-bar">
                    <div class="logo">
                        <a href="movies.html"><img src="img/bemikaFilm-hor.png" alt="logo"></a>
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

         <div class="content titel">
            <p class="center1">
	            <a href="javascript:window.history.go(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </p>
            <p><?php echo "00-00-0000" ?></p>
            <h1><?php echo $data['title']; ?></h1>
         </div>
         <div class="item-image">
            <img src="img/upload/<?php echo $data['file'];?>" class="img_responsive_article">
          </div>
       <div class="contenttekst">
           <div class="col-lg-3 col-sm-1"></div>
       <div class="row">
        <div class="col-lg-6 col-sm-10">
           <p><?php echo $_POST['text']; ?></p>

           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-1">Publish</button>
           

           <button type="button" class="btn btn-primary" onclick="window.location.href='?action=edit&page=<?php echo $_GET['page']; ?>&class=<?php echo $item->getClassName($item) ?>&id=<?php echo $idview; ?>&genre=<?php echo $_GET['genre'];?>';">Edit</button>
    

        <ul class="tags">
        	<li><a href="movies.html">Movies</a></li>
            <li><a href="categories.html">Action</a></li>

        </ul>
    <!--modaal venster  -->
        <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">POP UP</h4>
              </div>
              <div class="modal-body">
                <h2 id="modal-content">published</h2>
              </div>
              <div class="modal-footer">
                
                <button type="button" class="btn btn-primary" onclick="window.location.href='?action=unhidden&page=<?php echo $_GET['page']; ?>&genre=<?php echo $_GET['genre']; ?>&class=<?php echo $item->getClassName($item) ?>&id=<?php echo $idview; ?>';">Go to CMS</button>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
         </div>
           <div class="col-lg-3 col-sm-1"></div>
       </div>
        </div>

        <section class="top" id="categorie">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Latest Articles</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($item->getAllArticles("4") as $key => $value) {
                    echo '<div class="col-sm-3 portfolio-item">';
                      echo '<a href="?action=articleView&art='. $value['id'] .'" class="portfolio-link">';
                      echo '<div class="caption orange">';
                      echo '</div>';
                      echo '<img src="img/upload/' . $value['file'] . '" class="img-responsive" alt=""> </a>';
                      echo "<h3>" . $value['title'] . "</h3>";
                      $date = new DateTime($value['date_created']);
                      echo "<h4>" . date_format($date , "d-m-Y") . "</h4>";
                     echo '</div>';
                 }


                 ?>
            </div>
                    <hr class="star-primary">

                <div class="page-navigation">
                    <button><a href="?action=allarticles">See More </a></button>
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
        <script src="javascript/topscript.js" type="text/javascript"></script>
</body>
</html>