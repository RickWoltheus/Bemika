<form class="" action="" method="post">
<?php 

$keys = $item->getLimited(1);


  foreach ($keys as $oneItem) {
    foreach ($oneItem as $key => $value) { 
      if ($key == "id") {
      }elseif($key == "time"){
      echo "<p>Add ".$key."</p>";
      echo "<input type='text' name='".$key."' value='' placeholder='".$value."'><br>";
    }else{
      echo "<p>Add ".$key."</p>";
      echo "<input type='text' name='".$key."' value='' placeholder='".$value."'><br>";
    }
  }
}
?>
<input type="submit" name="submit" value="submit">
</form>
<?php 
if (isset($_POST['submit'])){
  
  $data = $item->getPosts($keys);
  if($item->insertArray($data, "submit") == true){
    echo "records saved";
  }else{
    echo "something went wrong";
  }
}
?>