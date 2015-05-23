<?php

class Config {

	public static $url    = 'localhost';
	public static $port   = '3306';
	public static $name   = 'Helpdesk';
	public static $user   = 'root';
	public static $passwd = '12345';

	public static function dsn(){
		return 'mysql:host='.self::$url.';dbname='.self::$name;
	}

}