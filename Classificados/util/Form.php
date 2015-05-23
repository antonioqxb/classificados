<?php

if(basename($_SERVER['PHP_SELF'])=='Form.php') {
    echo '<meta charset="utf-8" />';
    echo '<a href="../index.php">Voltar</a><br>';
    die('Este arquivo não pode ser acessado diretamente!');
}
/**
 * Description of Form
 *
 * @author antoniojose
 */
class Form {
   
    private function __construct() { }
    
    public static function Open($name, $id, $action, $method) {
        print('<form name="'.$name.'" id="'.$id.'" action="'.$action.'" method="'.$method.'">');
    }
    
    public static function TextBox($name, $id, $placeholder="",$class="") {
        $component = '<input type="text" name="'.$name.'" id="'.$id.'" class="'.$class.'" placeholder="'.$placeholder.'" />';
        print($component);        
    }
    
    public static function Password() {
        #$component = '<input type="password" name="'.$name.'" id="'.$id.'" class="'.$class.'" placeholder="'.$placeholder.'" />';
        #print($component);
    }
    
    public static function Select($nome,$id, $lista, $class="") {
        
        $componente = '<select name="'.$nome.'" id="'.$id.'"><option>Escolha</option>';
        foreach($lista as $key => $valor) {
            $componente .= '<option value="'.$key.'">'.$valor.'</option>';
        }
        $componente .= '</select>';
        print($componente);        
    }
    
    public static function Radio() {
        
    }
    
    
    public static function CheckBox() {
        
    }
    
    public static function TextArea() {
        
    }
    
    
    public static function Close() {
        print("</form>");
    }
    
}
