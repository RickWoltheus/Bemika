
 
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
   <div class="log-nav">
     <label>Accounts</label>
     <div class="button">
     <a href="?action=new_admin"><button class='add-button'>add user</button></a>
     </div>
   </div>

   <div class="log-nav">
   <table>
     <tr id="log-nav-item">
       <th>name</th>
       <th>email</th>
       <th>level</th>
       <th></th>
       <th></th>
       </tr>
  </div>
     
     <?php
     $items = $user->getUsersInfo();
     foreach ($items as $oneItem) {
       echo "<tr>";
       echo "<td>".$oneItem['name']."</td>";
       echo "<td>".$oneItem['email']."</td>";
       echo "<td>".$oneItem['level']."</td>";
       echo "<td><td> <a class='edit-button' href='?action=delete-user&id=".$oneItem['id']."'><i class='fa fa-trash-o' aria-hidden='true'></i></i></a></td>";
     
       echo "</tr>";
     }
      ?>
   </table>
   

 </div>
 
 </body>
 </html>