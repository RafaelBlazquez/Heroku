<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b230f0aa73f761";$this->pass="f7a6ed03";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_59f0b6996393531";
	}

	function connect(){
		$this->user="b230f0aa73f761";$this->pass="f7a6ed03";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_59f0b6996393531";
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
