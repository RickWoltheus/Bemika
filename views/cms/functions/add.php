<form class="" action="" method="post" enctype="multipart/form-data">
<?php 

$keys = $item->getLimited(1);

foreach ($keys as $oneItem) {
  foreach ($oneItem as $key => $value) {
    if ($key == "text"){
      echo "<textarea name='".$key."'></textarea><br>";
    }elseif($key == "genre") {
      echo "<input type='hidden' name='".$key."' value='".$_GET['genre']."'><br>";
    }elseif ($key == "file") {
    echo "<input type='file' name='file' id='file'><br><br>";
  }elseif($key == "id" || $key == "date_created"){
    
  }else{
      echo "<input type='text' name='".$key."' value='".$value."' placeholder='".$key."'><br>";
    }
  }
}
?>
<input type="submit" name="submit" value="submit">
</form>
<?php 

if (isset($_POST['submit'])){
  $media = $item->uploadFile();
  $data = $item->getPosts($keys, $media);
  

  echo $media;
  if($item->insertArray($data, "submit") == true){
    $activity->newActivity($_SESSION["user"], $_GET['class'], "text", "added new record");
  
    echo "records saved";
  }else{
    echo "something went wrong";
  }
}
?>