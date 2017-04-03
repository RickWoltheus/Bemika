<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> CMS </title>
<link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
<script src="https://use.fontawesome.com/e28b54a9f9.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/pages.css">
<!--<link rel="stylesheet" href="css/article.css">-->

</head>
<body>
<!--include menu  -->
<?php include('views/cms/parts/menu.php') ?>

<!-- content -->
<div id="content">
  
  <!-- navbar pages -->
  <div class="log-nav">
    <div class="button">
    <button id="cat-button" onclick="window.location.href='?action=items&class=Page';">Edit Pages</button>
    </div>
    <div class="button">
    <button id="edit-button" onclick="window.location.href='?action=items&page=new_cat&class=Category';">Add category</button>
    </div>
  </div>

  <!-- pages -->
  <div class="pages">
  <?php 

  $pages = $page->getAll();
  $categorys = $category->getAll();

  foreach ($pages as $oneItem) {
  echo '<button class="accordion">'.$oneItem['name'].'</button><div class="panel">';

     foreach ($categorys as $value) {
      if ($oneItem['name'] == $value['type']) {
        echo "<a href='?action=items&page=".$oneItem['name']."&genre=".$value['title']."&class=Article'>".$value['title']."</a></br>";
      }
     }   
  echo "</div>";
  } 
  ?>

  </div>
  </div>

  

</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="javascript/animation.js"></script>
</body>
</html>

