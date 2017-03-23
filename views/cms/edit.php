<div class='content_cms'>
<?php 

$items = $item->getOne($_GET['id']);


echo "<form class='' action='' method='post'>";
  
  // display form from models

  foreach ($items as $oneItem) {
    foreach ($oneItem as $key => $value) {
      echo "<p>edit ".$key."</p>";
      echo "<input type='text' name='".$key."' value='".$value."'><br>";
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
  
  if($item->update($data, $id, "submit")){
    echo "records saved";
    $item->redirect("http://localhost/school/Projecten/bemika/?action=items");
  }else{
    echo "something went wrong";
  }
}
?>



