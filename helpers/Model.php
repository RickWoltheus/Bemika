<?php
class Model {

    protected $_db;
    protected $_table;
    
    //constructs database
	public function __construct()
	{

		$this->_table = strtolower(get_class($this)).'s';
  
		$this->_db = Database::getInstance();
	}
  
  // checks if user is logged in
  public function is_loggedin($session){
  	if (isset($session)) {
  		return TRUE;
  	}
  }
  // gets all items from a table
  public function getAll() {

    $result = $this->_db->query('SELECT * FROM `'.$this->_table.'`');
  
    $List = array();
    while ($data = $result->fetch_assoc()) {
      $List[]= $data;
    }
    return $List;
  }
  
  //gets one item
  public function getOne($id) {

    $result = $this->_db->query("SELECT * FROM $this->_table WHERE id = $id");
  
    $List = array();
    while ($data = $result->fetch_assoc()) {
      $List[]= $data;
    }
    return $List;
  }
  
  //gets items from a table where id is equal to te var you give with the function
  public function getSpecific($key, $value) {
    $result = $this->_db->query("SELECT * FROM $this->_table WHERE $key = '$value'");
    $List = array();
    while ($data = $result->fetch_assoc()) {
      $List[]= $data;
    }
    return $List;
  }
  
  // gets an limited number from an table
  public function getLimited($limit) {
    
     $result = $this->_db->query('SELECT * FROM `'.$this->_table.'` LIMIT ' .$limit. ' ');

     $List = array();
     while ($data = $result->fetch_assoc()) {
       $List[]= $data;
     }
      return $List;
  }
  
  //gets all $_POST in a form
  public function getPosts($keys, $media){
    $data = array();
      foreach ($keys as $oneItem) {
             foreach ($oneItem as $key => $value){
               if ($key != "id" && $key != "date_created" && $key != "file") {
                 $data[$key]=$_POST[$key];
               }elseif ($key == "file") {
                 echo $media;
                  $data[$key]= $media;
               }
            }
          }
          return $data;
  }
  
  //inserts an array with into a table
  public function insertArray($data, $exclude = array()){
      
        if( !is_array($exclude) ) $exclude = array($exclude);
        
        array_push($exclude, "id", "date_created");
        
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
            
            var_dump($values);
            $result = $this->_db->query('INSERT INTO `'.$this->_table.'`('.$fields.') 
                              VALUES ('.$values.')')or die (mysqli_error($this->_db));
                              
            return $result;
            
  }
  public function uploadFile(){
    $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
      $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if ((($_FILES["file"]["type"] == "video/mp4")
    || ($_FILES["file"]["type"] == "audio/mp3")
    || ($_FILES["file"]["type"] == "audio/wma")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg"))
    
    && ($_FILES["file"]["size"] < 2000000)
    && in_array($extension, $allowedExts))
    
      {
      if ($_FILES["file"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        }
      else
        {
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    
        if (file_exists("img/upload/" . $_FILES["file"]["name"]))
          {
          echo $_FILES["file"]["name"] . " already exists. ";
          return  $_FILES["file"]["name"];
          }
        else
          {
          move_uploaded_file($_FILES["file"]["tmp_name"],
          "img/upload/" . $_FILES["file"]["name"]);
          echo "Stored in: " . "img/upload/" . $_FILES["file"]["name"];
          
          return  $_FILES["file"]["name"];
          }
        }
      }
    else
      {
      echo "Invalid file";
      }
  }
  //update an item with array
  public function update($data, $id, $exclude = array()){
				if( !is_array($exclude) ) $exclude = array($exclude);
				
				array_push($exclude, "id");
				
				$fields = $values = array();
				
				
				foreach( array_keys($data) as $key ) {
								if( !in_array($key, $exclude) ) {
										$fields[] = "$key='$data[$key]'";
								}
						}
						
						$content = implode(", ", $fields);
					  
						$result = $this->_db->query("UPDATE $this->_table SET $content WHERE id=$id");
					
						return $result;		
  }
  
  //deletes an item
  public function doDelete($id){
     $result = $this->_db->query("DELETE FROM $this->_table WHERE id=$id");
     return $result;
  }
  
  //gets class name that is used
  public function getClassName($name){
  $result = get_class($name);
  return $result;
  }
  
  //redirects you to new page
  public function redirect($url){
    header('Location: '.$url);
  }
  
  //gets items for the loadmore
  public function loadMore($page, $item_per_page){
  	$page_number = filter_var($page, FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
  
  	//throw HTTP error if page number is not valid
  	if(!is_numeric($page_number)){
  		header('HTTP/1.1 500 Invalid page number!');
  		exit();
  	}
  
  	//get current starting point of records
  	$position = (($page_number-1) * $item_per_page);
  
  	//fetch records using page position and item per page. 
  	$results = $this->_db->prepare("SELECT id, genre FROM articles ORDER BY id DESC LIMIT ?, ?");
  
  	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
  	//for more info https://www.sanwebe.com/2013/03/basic-php-mysqli-usage
  	$results->bind_param("dd", $position, $item_per_page); 
  	$results->execute(); //Execute prepared Query
  	$results->bind_result($id, $genre); //bind variables to prepared statement
  
  	//output results from database
  
  	while($results->fetch()){ //fetch values
  		echo '<li>'.$id.') <strong>'.$genre.'</strong></li>';	
  	}
  }
  

  // public function checkexistence($column, $name){
  //     echo $this->_table;
  // 		$result = $this->_db->query('SELECT * FROM users WHERE name="admin"');
  // 		$data = $result->fetch_assoc();
  //     var_dump($data);
  // 		return $data;
  // }
}