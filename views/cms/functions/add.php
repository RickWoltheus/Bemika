<?php 
$keys = $item->getLimited(1);
if (isset($_POST['submit']) && !isset($_GET['genre'])){
  if (isset($_FILES['file'])) {
    $media = $item->uploadFile();
  }else {
    $media = "";
  }

  $data = $item->getPosts($keys, $media);
  

  if($item->insertArray($data, "submit") == true){
    $activity->newActivity($_SESSION["user"], $_GET['class'], $_POST['title'], "added new record");
    echo "records saved";
  
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
    <h2 class="bread">Adding item</h2>
  </div>

<form class="" action="<?php if (isset($_GET['genre'])){echo "?action=preview&page=".$_GET['page']."&class=Article&genre=".$_GET['genre']."";} ?>" method="post" enctype="multipart/form-data">
  <div class="newPost">
<?php 



foreach ($keys as $oneItem) {
  foreach ($oneItem as $key => $value) {
    if ($key == "text")
    {
      include('views/cms/parts/add_article.php');
      echo "<input type='hidden' name='text' id='resultEditor'>";
    }
    elseif($key == "genre") 
    {
      echo "<input type='hidden' name='".$key."' value='".$_GET['genre']."'><br>";
    }
  elseif ($key == "hidden") 
  {
    echo "<input type='hidden' name='".$key."' value='true'>";
  }
  elseif($key == "id" || $key == "date_created" || $key == "file")
  {
     // dispay none
  }
  elseif($key == "tags")
  {
    echo "<input type='text' name='tags' placeholder='".$key.", like, this,'>";
  }
  elseif ( $key == "type") 
  {
    $list = $page->getAll();
    $current = $_GET['page'];
    echo "<select name='type'>";
    foreach ($list as $key => $value) 
    {
      if ($value['name'] != $current) 
      {
        echo "<option value='".$value['name']."'>".$value['name']."</option>";
      }
    }//end foreach
  }
  else
  {
      echo "<input type='text' name='".$key."' placeholder='".$key."'><br>";
    }
  }
}
?>



<?php if (isset($_GET['genre'])): ?>
<button id="save-draft" data-func="save" type="button">save as draft</button>
<?php endif; ?>
<input type="submit" id="submit" name="submit" value="submit">
</form>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script src="javascript/textarea.js" type="text/javascript"></script>
</body>
</html>

