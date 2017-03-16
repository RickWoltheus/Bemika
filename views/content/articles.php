<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/test.css" >
  </head>
  <body>
    <div class="categoriePage">

        <?php


        foreach ($article->getLimited("3") as $key => $value) {
          echo '<div class="articlebox">';
          echo "<h1>" . $value['articleImage'] . "</h1>";
          echo "<p>" . $value['articleDescription'] . "</p>";
          $date = new DateTime($value['date_created']);
          echo "<h4>" . date_format($date , "d-m-Y") . "</h4>";
          echo '</div>';
        }




         ?>
      </div>
    </div>
  </body>
</html>