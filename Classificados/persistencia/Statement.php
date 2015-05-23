<?php


class Statement {

	private static $stmt;

	private function __construct(){
		$this->stmt = null;
	}

    public static function close() {
        self::$stmt->closeCursor();
        self::$stmt = null;
    }

	public static function prepare($pdo, $query, $params) {
		if($pdo instanceof PDO) {
			self::$stmt = $pdo->prepare($query);
			if(is_array($params)) {
				self::setParams($params);
			}
			return true;
		} else {
			return false;
		}
	}

	public static function get(){
		return self::$stmt;
	}

	private static function setParams($params) {
		$i = 1;
		foreach($params as $p) {
			self::$stmt->bindValue($i, $p);
			$i++;
		}
	}

}
