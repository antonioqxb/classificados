<?php

if(basename($_SERVER['PHP_SELF'])=='Criptografia.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}

class Criptografia {
   
    private static $prefix = 'upside-';
    private static $sufix = '-dajinc083hijecoiwehifqjwou3098thciwelkfhc983fhidkfhxwef';
    
    public static function Senha($txt) {
        return sha1($txt);
    }
    
    public static function Criptografar($textoClaro) {
        return base64_encode(self::$prefix . $textoClaro . self::$sufix);
    }
    
    public static function Descriptografar($textoCifrado) {
        return explode('-',base64_decode($textoCifrado))[1];
    }
     
    
}
