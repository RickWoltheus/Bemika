
<!-- content -->

<!-- navbar pages -->
<div class="log-nav">
  <div class="button">
  <button id="cat-button" onclick="window.location.href='?action=items&class=Page';">Edit Pages</button>
  </div>
  <div class="button">
  <button id="edit-button" onclick="window.location.href='?action=articles';">Add category</button>
  </div>
</div>

<!-- pages -->
<div class="pages">
<?php 

$pages = $page->getAll();
$categorys = $category->getAll();

foreach ($pages as $oneItem) {
echo '<button class="accordion">'.$oneItem['name'].'</button><div class="panel">';

   foreach ($categorys as $value) {
    if ($oneItem['name'] == $value['type']) {
      echo "<a href='?action=items&page=".$oneItem['name']."&genre=".$value['title']."&class=Article'>".$value['title']."</a></br>";
    }
   }   
echo "</div>";
} 
?>

</div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>
