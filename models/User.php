<?php

class User extends Model
{
	//attributes
	protected $_db;
	protected $_host;
	protected $_dbname;
	protected $_usr;
	protected $_pass;
	
	//methods
	function __construct($host, $dbname, $usr, $pass)
	{
		try
		{
			 $this->_host = $host;
			 $this->_dbname = $dbname;
			 $this->_usr = $usr;
			 $this->_pass = $pass;
			 
		   $this->_db = new PDO("mysql:host={$this->_host};dbname={$this->_dbname}",$this->_usr,$this->_pass);
		   $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
public function dologin($uname,$pass)
{
		try
		{
			$result = $this->_db->prepare("SELECT id, name, email, pass, level FROM users WHERE name=:uname OR email=:umail ");
			$result->execute(array(':uname'=>$uname, ':umail'=>$uname));
			$userRow=$result->fetch(PDO::FETCH_ASSOC);
			{
				if(password_verify($pass, $userRow['pass']))
				{
					$_SESSION['user'] = $userRow['name'];
					
					$_SESSION['level'] = $userRow['level'];
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
public function register($uname, $umail, $pass, $level){
	try
	{
		
		$hash_pass = password_hash($pass, PASSWORD_DEFAULT);
		
		$result = $this->_db->prepare("INSERT INTO users(name,email,pass,level) 
																								 VALUES(:uname, :umail, :upass, :level)");
												
		$result->bindparam(":uname", $uname);
		$result->bindparam(":umail", $umail);
		$result->bindparam(":upass", $hash_pass);										  
		$result->bindparam(":level", $level);										  
			
		$result->execute();	
		
		return $result;	
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}		
}

public function deleteUser($id){
	try
	{
		
		$result = $this->_db->prepare("DELETE FROM users WHERE id=$id");							  
			
		$result->execute();	
		
		return $result;	
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}		
}
public function getUsersInfo(){
	$resultUsers = $this->_db->query("SELECT * FROM users");
	$result = $resultUsers->fetchAll(PDO::FETCH_ASSOC);

	return $result;
	
}
}



