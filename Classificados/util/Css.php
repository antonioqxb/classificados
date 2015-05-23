<?php

if(basename($_SERVER['PHP_SELF'])=='Css.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="../index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}

/**
 * Description of Css
 *
 * @author antoniojose
 */
class Css {
    
    private static $archives = array(
        "bootstrap.css",
        "bootstrap-theme.min.css",
        "page.css"
    );
    
    private function __construct() { }
    
    public static function Load($nome='') {
        if(empty($nome)) {
            foreach(self::$archives as $archive) {
                echo '<link rel="stylesheet" type="text/css" href="'.D.'/assets/'.$archive.'" />';
            }
        }
        else {
            if(file_exists(D.'/assets/'.$nome)) {
                echo '<link rel="stylesheet" type="text/css" href="'.D.'/assets/'.$nome.'" />';
            }
        }
    }
}
