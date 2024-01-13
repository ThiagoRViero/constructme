<?php
    define("DSN", "mysql");
    define("SERVIDOR", "localhost");
    define("USUARIO", "367958");
    define("SENHA", 'thiago123');
    define("BANCODEDADOS","367958");
    
    ini_set('display_errors', true);
    error_reporting(E_ALL);

class conexao{
	private static $instancia = false;


    static function getInstance(){
		try {
			self::$instancia = new PDO (DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS,USUARIO,SENHA);
		} catch (PDOException $erro) {
			echo "Erro na conexão:";
		}
       
        return conexao::$instancia;
    }
}
    

?>