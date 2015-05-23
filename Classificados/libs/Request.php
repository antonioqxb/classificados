<?php

if(basename($_SERVER['PHP_SELF'])=='Request.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="../index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}
/**
 * Description of Request
 *
 * @author antoniojose
 */
class Request {

    public function __construct() {
    }

    public function Get($param) {
        if (isset($_GET[$param])) {
            return filter_input(INPUT_GET, $param);
        }
        return false;
    }

    public function Post($param) {
        if (isset($_POST[$param])) {
            return filter_input(INPUT_POST, $param);
        }
        return false;
    }

    public function IsGet($param) {
        return isset($_GET[$param]);
    }
    
    public function IsPost($param) {
        return isset($_POST[$param]);
    }

    public function CookieValue($nome) {
        if (isset($_COOKIE[$nome])) {
            return $_COOKIE[$nome];
        }
        return false;
    }

    public function SessionValue($nome) {
        if(session_status()==PHP_SESSION_ACTIVE && isset($_SESSION[$nome])) {
            return $_SESSION[$nome];
        }
        return false;
    }

}
