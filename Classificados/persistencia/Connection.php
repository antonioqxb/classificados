<?php

class Connection {

	private static $link;

	private function __construct() {}

	public static function create($dsn,$usuario,$senha,$config=null) {
		if(!empty($dsn) && !empty($usuario) && !empty($senha)) {
			try {
				if(is_array($config)) {
					self::$link = new PDO($dsn, $usuario,$senha,$config);
				} else {
					self::$link = new PDO($dsn, $usuario,$senha);
				}
				return true;
			} catch(PDOException $e) {
				return false;
			}
		} else {
			return false;
		}
	}

	public static function isPdo() {
		return (self::$link instanceof PDO) ? true : false ;
	}

	public static function getConnection() {
		return self::$link;
	}

    public static function close() {
        self::$link = null;
    }

}

?>
