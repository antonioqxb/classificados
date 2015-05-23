<?php

if(basename($_SERVER['PHP_SELF'])=='Login.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="../index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}

/**
 * Description of Login
 *
 * @author antoniojose
 */
class Login {
    
    private $usuario;
    
    public function __construct( $u ) {
        $this->usuario = ($u instanceof Usuario) ? $u : null ;
    }
    
    public function Autenticar() {
        $dbo = new DBO();        
        $query = '';
        
        if($this->usuario instanceof Tecnico) {
            $query = 'SELECT AutenticacaoTecnico(?,?) as "Resultado"';
        } 
        else if($this->usuario instanceof Cliente) {
            $query = 'SELECT AutenticacaoCliente(?,?) as "Resultado"';
        }
        else {
            return false;
        }
        
        $resultado = $dbo($query, $this->usuario->GetDataLogin(), 'array');
        $id = $resultado[0]['Resultado'];
        
        $this->usuario->SetId($id);
        
        return ( $id > 0 );
    }
}
