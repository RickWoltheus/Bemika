
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
      <div class="button">
        <?php if (isset($_GET['genre'])) {
          echo "<a href='?action=new_item&page=".$_GET['page']."&class=".$_GET['class']."&genre=".$_GET['genre']."'><button class='add-button'>add article</button></a>";
        } else {
          echo "<a href='?action=new_item&page=".$_GET['page']."&class=".$_GET['class']."'><button class='add-button'>add</button></a>";
        } ?>
      </div>
      <label>Pages<i class='fa fa-arrow-right' aria-hidden='true'></i>      <?php
            if (isset($_GET['genre'])){
              $now = $_GET['genre'];
            } else {
              $now = "";
            }
             echo $_GET['page'] . " <i class='fa fa-arrow-right' aria-hidden='true'></i> " . $now; 
             ?></label>
        

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
      echo "<th></th>";
    }elseif($key != "file" && $key != "text"){
      echo "<th>".$key."</th> ";
    }
  }
echo "</div></tr>";
}

echo "<tr>";
  foreach ($items as $oneItem) { 
  if (isset($_GET['genre'])) {
    foreach ($oneItem as $key => $value) { 
      if ($key == "id") {
        echo "<td> <a class='edit-button' href='?action=delete&page=".$_GET['page']."&class=".$item->getClassName($item)."&id=".$value."&genre=".$_GET['genre']."'><i class='fa fa-trash-o' aria-hidden='true'></i></i></a><a class='edit-button' href='?action=edit&page=".$_GET['page']."&class=".$item->getClassName($item)."&id=".$value."&genre=".$_GET['genre']."'><i class='fa  fa-pencil-square-o' aria-hidden='true'></a></td>";
      }elseif($key != "file" && $key != "text"){
      echo "<td>".$value."</td>";
    }
    
  }
}else{
  foreach ($oneItem as $key => $value) { 
    if ($key == "id") {
        echo "<td> <a class='edit-button' href='?action=delete&page=".$_GET['page']."&class=".$item->getClassName($item)."&id=".$value."'><i class='fa fa-trash-o' aria-hidden='true'></i></i></a><a class='edit-button' href='?action=edit&page=".$oneItem['type']."&class=".$item->getClassName($item)."&id=".$value."'><i class='fa  fa-pencil-square-o' aria-hidden='true'></a></td>";
    }elseif($key != "file" && $key != "text"){
    echo "<td>".$value."</td>";
  }
  
}
}
  echo "</tr>";
}


?>
</table>


</div>
</div>
</body>
</html>



