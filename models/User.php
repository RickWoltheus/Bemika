<?php
class User extends Model {
public function is_loggedin($session){
	if (isset($session)) {
		return TRUE;
	}
}

public function doLogin($uname,$upass)
	{
		try
		{
			$result = $this->db->query("SELECT user_id, user_name, user_email, user_pass FROM users WHERE user_name=:uname");
			
			$result->execute(array(':uname'=>$uname));
			echo $result;
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($result->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['user_pass']))
				{
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}