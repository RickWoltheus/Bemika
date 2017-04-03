
<!doctype html>
<!-- Ashvith Arumuganathan -->
<html>
<head>
<title> CMS </title>
<link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
<script src="https://use.fontawesome.com/e28b54a9f9.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/articles.css">

</head>
<body>
  
  <?php include('views/cms/parts/menu.php') ?>
  
  <!-- content -->
  <div id="content">
  
  <!-- navbar activity log -->
    <div class="log-nav">
      <h2 class="bread"><?php
      if (isset($_GET['genre'])){
        $now = $_GET['genre'];
      } else {
        $now = "";
      }
       echo $_GET['page'] . " <i class='fa fa-arrow-right' aria-hidden='true'></i> " . $now; ?>
     </h2>
      <?php if (isset($_GET['genre'])) {
        echo "<a href='?action=new_item&class=".$_GET['class']."&genre=".$_GET['genre']."'><button class='edit-button'>add article</button></a>";
      } else {
        echo "<a href='?action=new_item&class=".$_GET['class']."'><button class='edit-button'>add article</button></a>";
      } ?>
    </div>
    <div class="log-nav">
  <table>
  <tr id="log-nav-item">
  <?php
  $keys = $item->getLimited(1);
  if (isset($_GET['genre'])) {
    $items = $item->getSpecific("genre", $_GET['genre']);
  }else {
    $items = $item->getAll();
  }

  
  
//show row names from databse
  foreach ($keys as $oneItem) { 
    foreach ($oneItem as $key => $value) { 
      if ($key == "id") {
      echo "<td></td><td></td>";
      }else{
      echo "<td>".$key."</td> ";
    }
  }
echo "</div></tr>";
}

echo "<tr>";
  foreach ($items as $oneItem) { 
  if (isset($_GET['genre'])) {
    foreach ($oneItem as $key => $value) { 
      if ($key == "id") {
        echo "<td> <a href='?action=delete&page=".$_GET['page']."&class=".$item->getClassName($item)."&id=".$value."&genre=".$_GET['genre']."'>delete</td> ";
        echo "<td> <a href='?action=edit&page=".$_GET['page']."&class=".$item->getClassName($item)."&id=".$value."&genre=".$_GET['genre']."'>edit</td> ";
      }else{
      echo "<td>".$value."</td>";
    }
    
  }
}else{
  foreach ($oneItem as $key => $value) { 
    if ($key == "id") {
      echo "<td> <a href='?action=delete&class=".$item->getClassName($item)."&id=".$value."'>delete</td> ";
      echo "<td> <a href='?action=edit&class=".$item->getClassName($item)."&id=".$value."'>edit</td> ";
    }else{
    echo "<td>".$value."</td>";
  }
  
}
}
  echo "</tr>";
}


?>
</table>


</div>

</body>
</html>



