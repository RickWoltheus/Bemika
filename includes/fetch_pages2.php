<?php

$List = $class->loadMore($_POST["page"], 10, $_POST['table']);

foreach ($List as $value) {
  echo '<div class="col-sm-3 portfolio-item">';
  echo '<a href="?action=articleView&art='. $value['id'] .'" class="portfolio-link">';
  echo '<div class="caption orange">';
  echo '</div>';
  echo '<img src="img/upload/' . $value['file'] . '" class="img-responsive" alt=""> </a>';
  echo "<h3>" . $value['title'] . "</h3>";
  $date = new DateTime($value['date_created']);
  echo "<h4>" . date_format($date , "d-m-Y") . "</h4>";
  echo '</div>';
}
