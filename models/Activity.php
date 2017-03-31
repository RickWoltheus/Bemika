<?php 
/**
 * 
 */
class Activity extends model
{
  
  public function newActivity($author, $page, $type, $action){
          $result = $this->_db->query("INSERT INTO activitys(author, page, type, action) 
                            VALUES ('$author', '$page', '$type', '$action')")or die (mysqli_error($this->_db));
                            
          return $result;
          
  }
}
