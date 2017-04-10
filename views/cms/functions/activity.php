<!doctype html>
<!-- Ashvith Arumuganathan -->
<html>
<head>

<title> CMS </title>
<link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
<script src="https://use.fontawesome.com/e28b54a9f9.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/activity.css">

</head>
<body>
  
  <?php include('views/cms/parts/menu.php') ?>
  
  <!-- content -->
  <div id="content">
  
  <!-- navbar activity log -->
  <div class="log-nav">
    <label>Activity</label>

    </div>
  </div>
    
      <div class="wrapper">
          <table id="results"> <tr>
   <th>Date</th>
   <th>Author</th>
   <th>Place</th>
   <th>Title</th>
   <th>Action</th>
 </tr><!-- results appear here --></table>
          <div align="center">
              <button id="load_more_button"><img src="img/ajax-loader.gif"  class="animation_image" style="float:left;">Load More</button> <!-- load button -->
          </div>
      </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
      <script type="text/javascript" src="javascript/loadMore.js"></script>