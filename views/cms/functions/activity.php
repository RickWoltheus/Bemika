djiejdiej
<div class="activity">
  <table>
  <?php 
   $activities = $activity->getAll();
   
   foreach ($activities as $oneItem) {
     echo "<tr>";
     foreach ($oneItem as $key => $value) {
       echo "<td>".$value."</td>";
     }
     echo "</tr>";
   }
   ?>
   </table>
</div>



