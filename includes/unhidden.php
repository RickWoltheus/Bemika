<?php 
$article->unhide($_GET['id']);

$article->redirect("?action=items&page=".$_GET['page']."&genre=".$_GET['genre']."&class=Article");


 ?>