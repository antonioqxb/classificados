<?php

if(basename($_SERVER['PHP_SELF'])=='Response.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="../index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}

/**
 * Description of Response
 *
 * @author antoniojose
 */
class Response {
    
    public function __construct(){}
    
    public function CookieSetValue($nome, $valor) {
        if (!empty($nome)) {
            return setcookie($nome, $valor, time() + (3600*24*7), '/');
        }
        return false;
    }

    public function CookieRemove($nome) {
        if (isset($_COOKIE[$nome])) {
            $_COOKIE[$nome] = null;
            unset($_COOKIE[$nome]);
            return true;
        }
        return false;
    }
    
    public function SessionSetValue($nome, $valor) {
        if(session_status()==PHP_SESSION_ACTIVE) {
            $_SESSION[$nome] = $valor;
            return true;
        }
        return false;    
    }
    
    public function SessionRemoveValue($nome) {
        if(session_status()==PHP_SESSION_ACTIVE) {
            $_SESSION[$nome] = null;
            unset($_SESSION[$nome]);
            return true;
        }
        return false;
    }

    public function SessionRemove($nome) {
        if(session_status()==PHP_SESSION_ACTIVE && isset($_SESSION[$nome])) {
            $_SESSION[$nome] = null;
            unset($_SESSION[$nome]);
            return true;
        }
        return false;
    }
    public function Write($texto) {
        print($texto);
    }
    
    public function WriteLine($texto) {
        print($texto . '<br>');
    }
    
    public function redirectTo($url) {
        header("Location: " . $url, true);
    }
        
    
}
