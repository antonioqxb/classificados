<?php


class ResultSet {

	private function __construct(){
	}


	public static function getObject($resultado){
		$dados = array();
		try {
			while($obj = $resultado->fetch(PDO::FETCH_OBJ)) {
				array_push($dados, $obj);
			}
			return $dados;			
		} catch(PDOException $e) {
			return null;
		}
	}

	public static function getArray($resultado){
		$dados = array();
		try {
			while($obj = $resultado->fetch(PDO::FETCH_OBJ)) {
				array_push($dados, get_object_vars($obj));
			}
			return $dados;
		} catch(PDOException $e) {
			return null;
		}
	}

	public static function getJson($resultado){
		$dados = array();
		try {
			while($obj = $resultado->fetch(PDO::FETCH_OBJ)) {
				array_push($dados, get_object_vars($obj));
			}
			return json_encode($dados);
		} catch(PDOException $e) {
			return null;
		}
	}

}