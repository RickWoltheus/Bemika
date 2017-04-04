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

$keys = $item->getLimited(1);

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
    elseif ($key == "file")
    {
    echo "<input type='file' name='file' id='file'><br><br>";
  }
  elseif ($key == "hidden") 
  {
    echo "<input type='hidden' name='".$key."' value='true'";
  }
  elseif($key == "id" || $key == "date_created" )
  {
     // dispay none
  }
  else
  {
      echo "<input type='text' name='".$key."' value='".$value."' placeholder='".$key."'><br>";
    }
  }
}
?>


<center><input type="submit" id="submit" name="submit" value="submit"></center>
<center><button id="save-draft" data-func="save" type="button">save text</button></center>
</form>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script src="javascript/textarea.js" type="text/javascript"></script>
</body>
</html>
<?php 

if (isset($_POST['submit'])){
  if (isset($_FILES['file'])) {
    $media = $item->uploadFile();
  }else {
    $media = "";
  }

  $data = $item->getPosts($keys, $media);
  
  $item->redirect("?action=preview&id=".$id."");

  if($item->insertArray($data, "submit") == true){
    $activity->newActivity($_SESSION["user"], $_GET['class'], "text", "added new record");
    echo "records saved";
    $id = 97;
  
  }else{
    echo "something went wrong";
  }
}
?>
