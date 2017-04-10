
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

             <p class="center">
 	            <a href="javascript:window.history.go(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i>Previous Page</a>
             </p>
             </p>

         <section id="categorie">

             <div class="row">
                 <div class="col-lg-12 text-center">
                     <h1>All Articles</h1>
                 </div>
             </div>
             <div class="wrapper">
                 <div class="row"><div id="results"> 
<!-- results appear here --></div></div>
                 <div align="center">
                     <button id="load_more_button"><img src="img/ajax-loader.gif"  class="animation_image" style="float:left;">Load More</button> <!-- load button -->
                 </div>
             </div>
             <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>

             

                 

            

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
 <script type="text/javascript">
 var track_page = 1; //track user click as page number, righ now page number 1
 load_contents(track_page); //load content
 
 $("#load_more_button").click(function (e) { //user clicks on button
   track_page++; //page number increment everytime user clicks load button
   load_contents(track_page); //load content
 });
 
 //Ajax load function
 function load_contents(track_page){
   $('.animation_image').show(); //show loading image
   
   $.post( '?action=fetch_pages2', {'page': track_page, 'class': 'Article', 'table': 'articles'}, function(data){
     
     if(data.trim().length == 0){
       //display text and disable load button if nothing to load
       $("#load_more_button").text("You have reached end of the record!").prop("disabled", true);
     }
     
     $("#results").append(data); //append data into #results element
     
     //scroll page to button element
     $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 800);
   
     //hide loading image
     $('.animation_image').hide(); //hide loading image once data is received
   });
 }
 </script>
