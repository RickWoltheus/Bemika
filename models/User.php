.<?php
class User extends Model {

	// maak deze functie af
	public function getOne($id) {
		
		$result = $this->db->query('SELECT * FROM city WHERE id ='.$id);

    $cityInfo = $result->fetch_assoc();

		return $cityInfo;
	}

    // schrijf deze functie
		public function getAll() {

							$result = $this->db->query('SELECT * FROM city');

							$userList = array();
							while ($data = $result->fetch_assoc()) {
								$userList[]= $data;
							}
								return $userList;
		    }
	
}
?>