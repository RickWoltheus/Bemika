<?php
class Model {

    protected $_db;
    protected $_table;
    
	public function __construct()
	{

		$this->_table = strtolower(get_class($this)).'s';
  
		$this->_db = Database::getInstance();
	}
  
  public function is_loggedin($session){
  	if (isset($session)) {
  		return TRUE;
  	}
  }
  
  public function getOne($id){
    $result = $this->_db->query('SELECT * FROM `'.$this->_table.'` WHERE id='.$id);
    $data = $result->fetch_assoc();
    return $data;
  }
  
  public function getAll() {

    $result = $this->_db->query('SELECT * FROM `'.$this->_table.'`');
    echo $this->_table;
    $userList = array();
    while ($data = $result->fetch_assoc()) {
      $userList[]= $data;
    }
    return $userList;
  }
  
  public function redirect($url){
    header('Location: '.$url);
  }
  
  public function getLimited($limit) {
    
     $result = $this->_db->query('SELECT * FROM `'.$this->_table.'` LIMIT ' .$limit. ' ');

     $List = array();
     while ($data = $result->fetch_assoc()) {
       $List[]= $data;
     }
      return $List;
  }
  // public function checkexistence($column, $name){
  //     echo $this->_table;
  // 		$result = $this->_db->query('SELECT * FROM users WHERE name="admin"');
  // 		$data = $result->fetch_assoc();
  //     var_dump($data);
  // 		return $data;
  // }
}