<?php
	if($item->doDelete($_GET['id'])){
    echo "succes";
    $item->redirect("http://localhost/school/Projecten/bemika/?action=items");
  }else{
    echo "failed";
  }
	

