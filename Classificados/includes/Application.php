<?php

if(basename($_SERVER['PHP_SELF'])=='Application.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="../index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}

$app = new Application();
$request = $app->GetRequest();
$response = $app->GetResponse();

class Application {
    
    private $id;
    private $token;
    public  $request;
    public  $response;
    private $dados;
    
    public function __construct($dados) {
        $this->dados = $dados;
        $this->token = new Token();
        $this->id =$this->token->GetValue();
        $this->request = new Request();
        $this->response = new Response();
        $this->SessionInit();
        $this->Init();
    }
    
    
    public function __invoke() {
        $this->SessionInit();
        $this->Init();
        return $this->Verificar();
    }
    
    public function GetRequest() {
        return $this->request;
    }
    
    public function GetResponse() {
        return $this->response;
    }
    
    public function __destruct() {
        $this->SessionDestroy();
    }
    
    public function Init() {
        if(session_status()!=PHP_SESSION_ACTIVE) {
            $this->SessionInit();
        }
        
        if($this->request->SessionValue("iniciou")!='sim') {
            $this->dados['iniciou'] = 'sim';
            $this->dados['logado'] = 'nao';
            $this->dados['token'] = $this->id;
            $this->dados['data_acesso'] = date('d/m/Y h:m:s');
            $this->dados['user_id'] = 0;
            $this->dados['user_face_id'] = 0;
            $this->dados['user_google_id'] = 0;
            $this->dados['user_login'] = 0;
            $this->dados['user_tipo'] = 'visitante';

            foreach($this->dados as $key => $value) {
                $this->response->SessionSetValue($key, $value);
            }
            $this->response->CookieSetValue("Classificados", $this->dados['token']);
        }
    }
    
    public function GetToken() {
        return $this->id;
    }
    
    
    public function Reset() {
        $this->token = new Token();
        $this->dados['logado'] = 'nao';
        $this->dados['token'] = $this->token->GetValue();
        $this->dados['data_acesso'] = date('');
        $this->dados['user_id'] = 0;
        $this->dados['user_face_id'] = 0;
        $this->dados['user_google_id'] = 0;
        $this->dados['user_login'] = 0;
        $this->dados['user_tipo'] = 'visitante';
    }
    
    private function SessionInit() {
        #if(session_status()!=PHP_SESSION_ACTIVE) {
            session_name("UPSIDE");
            session_start();
        #}
    }
    
    private function SessionDestroy() {
        session_unregister($this->token->GetValue());
        session_destroy();
        // unset($_SESSION);
    }
    
    private function Verificar() {
        return ($this->request->SessionValue("logado")=='sim');
    }
     
}

