<?php

if(basename($_SERVER['PHP_SELF'])=='MessageBox.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="../index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}

/**
 * Description of Modal
 *
 * @author antoniojose
 */
class MessageBox {
    
    public static function Show($id, $titulo, $cabecalho ,$texto, $icone='') {
        print('<div id="'.$id.'" class="oculto" title="'.$titulo.'">');
        print('<h1 class="h1">'.$cabecalho.'</h1>');
        print('<p class="paragrafo">'.$texto);
        print((empty($icone)) ? '' : '<img src="'.$icone.'">');
        print('</p>');
        print('</div>');
    }
    
    
}
