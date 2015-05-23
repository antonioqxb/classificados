<?php

function __autoload($nome) {
    $diretorios = array("includes","libs","persistencia","util","models");
    foreach($diretorios as $dir) {
        $url = D . '/' . $dir . '/' . $nome . '.php';
        if(file_exists($url)) {
            require_once $url;
        }
    }
}

/* -- Defines --------------------- */
define("ASSETS", D . '/assets/');
/* -------------------------------- */

$dados = array(
    'logado'=>'nao',
    'token' => '',
    'data_acesso' => '',
    'user_id' => '',
    'user_face_id' => '',
    'user_google_id'=>'',
    'user_login' => '',
    'user_tipo'=>''
);


class Config {


}