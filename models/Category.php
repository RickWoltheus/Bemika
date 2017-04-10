<?php 

class Category extends Model
{
  public function getCategory($type, $limit) {
          $result = $this->_db->query("SELECT * FROM $this->_table WHERE type = '$type'  LIMIT $limit ");

          $userList = array();
          while ($data = $result->fetch_assoc()) {
            $userList[]= $data;
          }
            return $userList;
    }
}
