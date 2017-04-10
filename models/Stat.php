<?php


class Stat extends model
{

  public function pageView($pagename){
    $result = $this->_db->query("UPDATE stats SET value=value + 1 WHERE Name = '$pagename' ");

  }
}


 ?>
