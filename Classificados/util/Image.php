<?php

if(basename($_SERVER['PHP_SELF'])=='Image.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="../index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}

/**
 * Description of Image
 *
 * @author antoniojose
 */
class Image {
    
    public static function Set($nome, $id = "", $classe = "", $alt = "" ) {
        echo sprintf('<img src="'.D.'/resources/%s" id="%s" class="%s" alt="%s">', $nome, $id, $classe, $alt);
    }
    
}
