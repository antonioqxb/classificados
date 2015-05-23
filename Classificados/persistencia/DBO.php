<?php 

class DBO {

    public function __construct(){ }

    public function __invoke($query,$params = null,$tipo='object') {
	   Transaction::open(Config::dsn(),Config::$user, Config::$passwd);
        
        if(is_array($params)) :
            Transaction::prepareQuery($query,$params);
        else :
            Transaction::prepareQuery($query);
        endif;
        
        if(Transaction::execute()) :
            if($tipo=='array') {
                return Transaction::getArray();
            } else if($tipo=='json'){
                return Transaction::getJson();
            } else {
                return Transaction::getObject();
            }
        else :
            return null;
        endif;        
    }
 
}

?>