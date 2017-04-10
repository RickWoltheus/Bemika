<?php
	if($item->doDelete($_GET['id'])){
    echo "succes";
		if ($_GET['class'] == "Page") {
			$item->redirect("?action=items&class=".$_GET['class']."");
			$item->newActivity($_SESSION["user"], $_GET['class'], "text", "deleted page ");
		}elseif ($_GET['class'] == "Category") {
			$item->redirect("?action=items&page=".$_GET['page']."&class=".$_GET['class']);
			$item->newActivity($_SESSION["user"], $_GET['class'], "text", "deleted page ");
		}else{
			$item->redirect("?action=items&page=".$_GET['page']."&class=".$_GET['class']."&genre=".$_GET['genre']."");
			$item->newActivity($_SESSION["user"], $_GET['class'], "text", "deleted record in ".$_GET['genre']."");
		}

  }else{
    echo "failed";
  }
	

