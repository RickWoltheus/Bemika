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
  
  public function getAll() {

    $result = $this->_db->query('SELECT * FROM `'.$this->_table.'`');
    echo $this->_table;
    $List = array();
    while ($data = $result->fetch_assoc()) {
      $List[]= $data;
    }
    return $List;
  }
  public function getOne($id) {

    $result = $this->_db->query("SELECT * FROM $this->_table WHERE id = $id");
  
    $List = array();
    while ($data = $result->fetch_assoc()) {
      $List[]= $data;
    }
    return $List;
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
  
  //gets all $_POST in a form
  public function getPosts($keys){
    $data = array();
      foreach ($keys as $oneItem) {
             foreach ($oneItem as $key => $value){
               if ($key != "id") {
                 $data[$key]=$_POST[$key];
               }
            }
          }
          return $data;
  }
  
  //inserts an array with into a table
  public function insertArray($data, $exclude = array()){
      
        if( !is_array($exclude) ) $exclude = array($exclude);
        
        array_push($exclude, "id");
        
        $fields = $values = array();
        
        
        foreach( array_keys($data) as $key ) {
                if( !in_array($key, $exclude) ) {
                  if (!empty($data[$key])){
                    $fields[] = "$key";
                    $values[] = "'" .$data[$key]. "'";
                  }
                }
            }
            $fields = implode(",", $fields);
            $values = implode(",", $values);

            $result = $this->_db->query('INSERT INTO `'.$this->_table.'`('.$fields.') 
                              VALUES ('.$values.')')or die (mysqli_error($this->_db));
                              
            return $result;
            
  }
  public function update($data, $id, $exclude = array()){
				if( !is_array($exclude) ) $exclude = array($exclude);
				
				array_push($exclude, "id");
				
				$fields = $values = array();
				
				var_dump($fields);
				foreach( array_keys($data) as $key ) {
								if( !in_array($key, $exclude) ) {
										$fields[] = "$key='$data[$key]'";
								}
						}
						var_dump($fields);
						$content = implode(", ", $fields);
					  
						$result = $this->_db->query("UPDATE $this->_table SET $content WHERE id=$id");
					
						return $result;		
  }
  
  public function doDelete($id){
     $result = $this->_db->query("DELETE FROM $this->_table WHERE id=$id");
     return $result;
  }
  
  public function getClassName($name){
  $result = get_class($name);
  return $result;
  }
  // public function checkexistence($column, $name){
  //     echo $this->_table;
  // 		$result = $this->_db->query('SELECT * FROM users WHERE name="admin"');
  // 		$data = $result->fetch_assoc();
  //     var_dump($data);
  // 		return $data;
  // }
}