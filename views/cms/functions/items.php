
<form class="" action="" method="post">
  <table>
  <tr>
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

echo "</tr>";
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
if (isset($_GET['genre'])) {
echo "<a href='?action=new_item&class=".$_GET['class']."&genre=".$_GET['genre']."'>Add</a>";
}else {
  
echo "<a href='?action=new_item&class=".$_GET['class']."'>Add</a>";
}
?>
</table>
 </form>
</div>



