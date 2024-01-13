<!-- Página que faz a conexão com o Banco de Dados -->
<?php
    define("DSN", "mysql");
    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("SENHA", null);
    define("BANCODEDADOS","constructme");
    
    ini_set('display_errors', true);
    error_reporting(E_ALL);

class conexao{
	private static $instancia = false;
    static function getInstance(){
		try {
			self::$instancia = new PDO (DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS,USUARIO,SENHA);
		} catch (PDOException $erro) {
            try {
                $file = file_get_contents("bd/constructme.sql");
                $con = new PDO (DSN.':host='.SERVIDOR.';',USUARIO,SENHA);
                $con->beginTransaction();
                $stmt = $con->prepare($file);
                $stmt->execute();
                $con->commit(); 
            } catch (PDOException $erro) {
                echo "Erro na conexão:";
            }
			echo "Erro na conexão:";
		}
       
        return conexao::$instancia;
    }
}
    

?>