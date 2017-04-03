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

$items = $item->getOne($_GET['id']);
  // display form from models

  foreach ($items as $oneItem) {
    foreach ($oneItem as $key => $value) {
      
      if ($key == "text")
      {
        include('views/cms/parts/add_article.php');
        echo "<input type='hidden' name='text' id='resultEditor'>";
      }
      elseif($key == "genre" || $key == "type") 
      {
        $list = $category->getSpecific("type", strtolower($_GET['page']));
        $current = $_GET['genre'];
        echo "<select name='genre'>";
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
      elseif ($key == "file") 
      {
      echo "<input type='file' name='file' id='file'><br>";
      echo "de value is".$value;
      $media = $value;
    }
    elseif($key == "id")
    {
      echo "<input type='hidden' value='".$value."'>";
      
    }
    else
    {
      echo "<input type='text' name='".$key."' value='".$value."' placeholder='".$key."'><br>";
      }
    }
  }


?>
<input type="submit" id="submit" name="submit" value="submit">
<button data-func="save" type="button">save text</button>

</form>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script src="javascript/textarea.js" type="text/javascript"></script>
</body>
</html>
<?php 
if (isset($_POST['submit'])){
    if (!empty($_FILES['file']['name'])) {
      $media = $item->uploadFile();
    }
  $id = $_GET['id'];
  
  $data = $item->getPosts($items, $media);

  if($item->update($data, $id, "submit")){
    echo "records saved";
    $activity->newActivity($_SESSION["user"], $_GET['class'], "text", "updated record in ".$_GET['genre']."");
    // $item->redirect("?action=items&page=".$_GET['page']."&class=".$_GET['class']."&genre=".$_GET['genre']."");
  }else{
    echo "something went wrong";
  }
}
?>