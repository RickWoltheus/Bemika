<?php  

class Article extends Model
{
  
  public function getAllArticles($limit) {

    $result = $this->_db->query("SELECT * FROM $this->_table WHERE hidden = 'false' ORDER BY date_created  DESC LIMIT $limit ");

    $List = array();
    while ($data = $result->fetch_assoc()) {
      $List[]= $data;
    }
    return $List;
  }

  public function getCategoryA($categoryName, $limitArt) {

                $result = $this->_db->query("SELECT * FROM $this->_table WHERE genre = '$categoryName' AND hidden = 'false' LIMIT $limitArt ");

                $userList = array();
                while ($data = $result->fetch_assoc()) {
                  $userList[]= $data;
                }
                  return $userList;

          }

    public function getLimitedArticles($id, $limit) {

                    $result = $this->_db->query("SELECT * FROM $this->_table WHERE genre = '$id' AND hidden = 'false'");

                    $userList = array();
                    while ($data = $result->fetch_assoc()) {
                      $userList[]= $data;
                    }
                      return $userList;
    }
    public function getArticleViews($art){

                          $result = $this->_db->query("SELECT * FROM $this->_table WHERE id = '$art' AND hidden = 'false'");
                          $userList = array();
                          while ($data = $result->fetch_assoc()) {
                            $userList[]= $data;
                          }
                            return $userList;
    }
    public function unhide($id){
      $result = $this->_db->query("UPDATE $this->_table SET hidden='false' WHERE id=$id");
      return $result;
    }
}