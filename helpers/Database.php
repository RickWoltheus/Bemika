<?php

class Database extends mysqli {

	private static $instance;

	public static function getInstance (){

		if (!self::$instance){ 
			
			self::$instance = new Database(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		}
	
		return self::$instance; 
	}
}