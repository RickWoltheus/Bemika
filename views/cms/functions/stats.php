



            
            <!doctype html>
            <!-- Ashvith Arumuganathan -->
            <html>
            <head>

            <title> CMS </title>
            <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
            <script src="https://use.fontawesome.com/e28b54a9f9.js"></script>

            <!-- CSS -->
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/articles.css">

            </head>
            <body>
              
              
            <?php include('views/cms/parts/menu.php') ?>
            <!-- content -->
            <div id="content">
            <!-- navbar pages -->
            <div class="log-nav">
              <label>Statistics</label>
              
            </div>
            <div class="log-nav">
          <table>
          <tr id="log-nav-item">
                <th>Page</th>
                <th>views</th>
              </tr>
            <?php
                         foreach ($stat->getAll() as $key => $value) {
                           echo '<tr>';
                           echo "<td>" .$value['Name']."</td>";
                           echo "<td>" .$value['value'].'</td>';
                           echo "</tr>";
                         }
            
                        ?>
</table>
</div>
            </div>
            </div>
            </body>
            </html>
