<div class='content_cms'>
<form class="" action="" method="post" enctype="multipart/form-data">
<?php 

$items = $item->getOne($_GET['id']);
  // display form from models

  foreach ($items as $oneItem) {
    foreach ($oneItem as $key => $value) {
      if ($key == "text"){
        echo "<textarea name='".$key."'>".$value."</textarea><br>";
      }elseif($key == "genre") {
        $list = $category->getSpecific("type", strtolower($_GET['page']));
        $current = $_GET['genre'];
        echo "<select name='genre'>";
        echo "<option value".$current.">".$current."</option>";
        foreach ($list as $key => $value) {
          if ($value['title'] != $current) {
            echo "<option value=".$value['title'].">".$value['title']."</option>";
          }
        }
        echo "</select><br>";
      }elseif ($key == "file") {
      echo "<input type='file' name='file' id='file'><br>";
    }elseif($key == "id"){
      echo "<input type='hidden' value='".$value."'>";
    }else{
        echo "<input type='text' name='".$key."' value='".$value."' placeholder='".$key."'><br>";
      }
    }
  }


?>
 <input type="submit" name="submit" value="submit">
 </form>
</div>

<?php 
if (isset($_POST['submit'])){

  $id = $_GET['id'];
  
  $data = $item->getPosts($items);
  if (isset($_POST['file'])) {
    $item->uploadFile();
  }
  if($item->update($data, $id, "submit")){
    echo "records saved";
    $activity->newActivity($_SESSION["user"], $_GET['class'], "text", "updated record in ".$_GET['genre']."");
    $item->redirect("?action=items&page=".$_GET['page']."&class=".$_GET['class']."&genre=".$_GET['genre']."");
  }else{
    echo "something went wrong";
  }
}
?>



