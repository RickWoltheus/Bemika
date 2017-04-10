<?php $items = $item->getOne($_GET['id']);
if (isset($_POST['submit'])){
    if (!empty($_FILES['file']['name'])) {
      $media = $item->uploadFile();
    }else {

      $media = $items['0']['file'];
    }
  $id = $_GET['id'];
  $data = $item->getPosts($items, $media);

  if($item->update($data, $id, "submit")){
    echo "records saved";
    if (isset($_GET['genre'])) {
      $move = $_GET['genre'];
    }else {
      $move = $_GET['page'];
    }
    $activity->newActivity($_SESSION["user"], $_GET['class'], $_POST['title'], "updated record in ".$move."");
    if (isset($_GET['genre'])) {
      $item->redirect("?action=items&page=".$_GET['page']."&class=".$_GET['class']."&genre=".$_GET['genre']."");
    }else {
      $item->redirect("?action=items&page=".$_GET['page']."&class=".$_GET['class']);
    }
    
  }else{
    echo "something went wrong";
  }
}
?>
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
<link rel="stylesheet" href="css/addarticles.css">


</head>
<body>

<?php include('views/cms/parts/menu.php') ?>

<!-- content -->
<div id="content">

<!-- navbar activity log -->
  <div class="log-nav">
    <h2 class="bread">Movies</h2>
  </div>

<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="newPost">
<?php 

  // display form from models

  foreach ($items as $oneItem) 
  {
    foreach ($oneItem as $key => $value) 
    {
      
      if ($key == "text")
      {
        include('views/cms/parts/add_article.php');
        echo "<input type='hidden' name='text' id='resultEditor'>";
      }
      elseif ($key == "hidden")
      {
        echo "hidden: <select name='hidden'><option>true</option><option>false</option></select>";
      }
      elseif($key == "genre") 
      {
        $list = $category->getSpecific("type", strtolower($_GET['page']));
        $current = $_GET['genre'];
        echo "genre: <select name='genre'>";
        echo "<option value='".$current."'>".$current."</option>";
        foreach ($list as $key => $value) 
        {
          if ($value['title'] != $current) 
          {
            echo "<option value='".$value['title']."'>".$value['title']."</option>";
          }
        }//end foreach
        
        echo "</select><br>";
        
      }
      elseif ( $key == "type") 
      {
        $list = $page->getAll();
        $current = $_GET['page'];
        echo "<select name='type'>";
        echo "<option value='".$current."'>".$current."</option>";
        foreach ($list as $key => $value) 
        {
          if ($value['title'] != $current) 
          {
            echo "<option value='".$value['name']."'>".$value['name']."</option>";
          }
        }//end foreach
        
        echo "</select><br>";
        
      }
    elseif($key == "id")
    {
      echo "<input type='hidden' value='".$value."'>";
      
    }
    elseif($key == "tags")
    {
      echo "tags:<input type='text' name='tags' value='".$value."'>";
    }
    elseif($key == "date_created" || $key == "file")
    {
      //do nothing
    }
    else
    {
      echo "<input type='text' name='".$key."' value='".$value."' placeholder='".$key."'><br>";
      }
    }
  }

if (isset($_POST['genre'])) {
echo "<button data-func='save' type='button'>save text</button>";
}
?>



<input type="submit" id="submit" name="submit" value="submit">
</div>
</form>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="javascript/textareaEdit.js"></script>

</body>
</html>

