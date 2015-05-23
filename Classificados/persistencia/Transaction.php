<?php 
	
class Transaction {

	private static $link;
	private static $stmt;
	private static $rset;

	private function __construct() {
		self::$link = null;
		self::$stmt = null;
		self::$rset = null;
	}

	public static function open($dsn,$usuario,$senha,$params = null) {
		$flag = Connection::create($dsn,$usuario,$senha,$params);
		if($flag) {
			if( Connection::isPdo()) {
				self::$link = Connection::getConnection();
				self::$link->exec("SET NAMES utf8");
				self::$link->exec("SET character_set='utf8'");
				self::$link->exec("SET collation_connection='utf8_general_ci'");
				self::$link->exec("SET character_set_connection='utf8'");
				self::$link->exec("SET character_set_client='utf8'");
				self::$link->exec("SET character_set_results='utf8'");
				return true;
			} else {
				# die('O objeto recuperado nao e um PDO');
				return false;
			}
		} else {
			# die('Ocorreu um erro ao estabelecer uma conexao com o banco de dados!');
			return false;
		}
	}

	public static function close() {
		self::$link = null;
		self::$stmt = null;
		self::$rset = null;
		ResultSet::close();
		Connection::close();
	}

	public static function  prepareQuery($query, $params = array()) {
		if(self::validateQuery($query)) {
			$flag = Statement::prepare(self::$link,$query,$params);
			if($flag) {
				self::$stmt = Statement::get();
			} else {

			}
		} else {
			return false;
		}
	}

	public static function execute() {
		try {
			$flag = self::$stmt->execute();
			return $flag;
		} catch(\PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public static function getArray() {
		try {
			return ResultSet::getArray(self::$stmt);
		} catch(PDOException $e) {
			return null;
		}
	}

	public static function getJson() {
		try {
			return ResultSet::getJson(self::$stmt);
		} catch(PDOException $e) {
			return null;
		}
	}

	public static function getObject() {
		try {
			return ResultSet::getObject(self::$stmt);
		} catch(PDOException $e) {
			return null;
		}
	}

	private static function validateQuery($query) {
		/***
		$proibidos = array('table','drop','show','describe','create','tables','database','databases');
		$queryQuebrada = str_split($query,' '); 
		$acho = 0;
		foreach($queryQuebrada as $palavra) {
			if(in_array($palavra,$proibidos)) {
				$acho++;
			}
		}
		return ($acho==0) ? true : false;
		***/
		return true;
	}

}


