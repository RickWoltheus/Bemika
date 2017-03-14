<?php
class Model {

    protected $db;
    protected $table;
    
	public function __construct()
	{

		$this->table = strtolower(get_class($this)).'s';
  
		$this->db = Database::getInstance();
	}
  
  public function getOne($id){
    $result = $this->db->query('SELECT * FROM `'.$this->table.'` WHERE id='.$id);
    $data = $result->fetch_assoc();
    return $data;
  }
  public function getAll() {

            $result = $this->db->query('SELECT * FROM `'.$this->table.'`');
            echo $this->table;
            $userList = array();
            while ($data = $result->fetch_assoc()) {
              $userList[]= $data;
            }
              return $userList;
      }
  public function redirect($url){
    header('Location: '.$url);
  }
}