<?php

if(basename($_SERVER['PHP_SELF'])=='Token.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="../index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}
/**
 * Description of Token
 *
 * @author antoniojose
 */
class Token {
    
    private $value;
    private static $salt = "123324248utyhgbkviahuewh9fomdalc3k,qjjJKHU*JOL!OIHS(*YQ*AQOJAKLBSG(JOMALJKJ3JFJHF983YX8Jum08qu9jodjiajdias394238b2rnfjxmcief87cgwfw";
    
    public function __construct() {
        $this->value = $this->GenerateToken();
    }
    
    private function GenerateToken() {
        return md5( 'UpsideSolution-' . $_SERVER['REMOTE_ADDR'] . '-' .self::$salt . '-' . $_SERVER['HTTP_USER_AGENT'] . time() );
    }
    
    public function GetValue() {
        return $this->value;
    }
}
