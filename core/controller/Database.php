<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="ba7ef97bc41990";$this->pass="f1ed729f";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_02b2719c8ff0657";
	}

	function connect(){
		$this->user="ba7ef97bc41990";$this->pass="f1ed729f";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_02b2719c8ff0657";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
