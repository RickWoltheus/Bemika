<?php

$List = $class->loadMore($_POST["page"], 10, $_POST['table']);

foreach ($List as $oneItem) {
  echo "<tr>";
  foreach ($oneItem as $key => $value) {
    if ($key != "id") {
      echo " <td>".$value."</td>";
    }
  
  }
echo  "</tr>";
}
echo "</table";
