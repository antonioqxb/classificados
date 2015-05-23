<?php

if(basename($_SERVER['PHP_SELF'])=='JS.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="../index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}

/**
 * Description of JS
 *
 * @author antoniojose
 */
class JS {

    private static $archives = array(
        "jquery.js",
        "jquery-ui.js",
        "bootstrap.js",
        "ajax.js"
    );
    
    private function __construct() { }    
    
    public static function Load($file="") {
        if(empty($file)) {
            foreach(self::$archives as $arquivo) {
                echo '<script type="text/javascript" src="'.D.'/assets/'.$arquivo.'"></script>';
            }
        }
        else {
            if(file_exists(D.'/assets/'.$file)) {
                echo '<script type="text/javascript" src="'.D.'/assets/'.$file.'"></script>';
            }
        }
    }
    
    
    
}
