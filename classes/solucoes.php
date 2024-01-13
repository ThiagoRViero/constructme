<?php  

/* A classe Solucoes tem como objetivo agrupar todas as consultas e alterções feitas nos produtos ou serviços */
class Solucoes{
    /* Retorna todos as solucoes(produto e servico) conforme a url atraves das variaveis pagina, tipo e filtro */
    public static function consultaSolucao($pagina, $tipo, $filtro){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    
    if($filtro == null){
        require_once 'conexao.php';
        $stmt = $stmt->prepare("SELECT `id`, `nome_solucao`, `filtro`, `descricao_solucao`, `valor`, `produto` FROM `solucoes` WHERE produto = :produto ORDER BY 'nome_solucao'");
        $stmt->bindParam(':produto', $tipo);
        $stmt->execute();
        return $stmt;
        
    } else if ($filtro != null) {
        require_once 'conexao.php';
        $stmt = $stmt->prepare("SELECT `id`, `nome_solucao`, `filtro`, `descricao_solucao`, `valor`, `produto` FROM `solucoes` WHERE produto = :produto && filtro = :filtro ORDER BY 'nome_solucao'");
        $stmt->bindParam(':produto', $tipo);
        $stmt->bindParam(':filtro', $filtro);
        $stmt->execute();
        return $stmt;
    }else {
            echo "Página não encontrada.";
        }
    }
    public static function exibeSolucao($pagina, $tipo, $filtro){
    $stmt = Solucoes::consultaSolucao($pagina, $tipo, $filtro);
    if(isset($_SESSION['usuario'])){
        require_once 'apresentacaoClasses/itemVitrineAdm.php';
    } else{
        require_once 'apresentacaoClasses/itemVitrine.php';
    }
    
    require_once 'apresentacaoClasses/paginacao.php';
    }

    /* Retorna a quantidade de registros de solucoes(produto e servico) conforme a url atraves das variaveis pagina, tipo e filtro */
    public static function quantidadeSolucoes($pagina, $tipo, $filtro){
    if($filtro == null){
        require_once 'conexao.php';
        $stmt_cont = conexao::getInstance();
        $stmt_cont = $stmt_cont->prepare("SELECT COUNT(*) AS total FROM solucoes WHERE produto = :produto ");
        $stmt_cont->bindParam(':produto', $tipo);
        $stmt_cont->execute();
        return $stmt_cont->fetchColumn();
        
    } else if ($filtro != null) {
        require_once 'conexao.php';
        $stmt_cont = conexao::getInstance();
        $stmt_cont = $stmt_cont->prepare("SELECT COUNT(*) AS total FROM solucoes WHERE produto = :produto && filtro = :filtro ");
        $stmt_cont->bindParam(':produto', $tipo);
        $stmt_cont->bindParam(':filtro', $filtro);
        $stmt_cont->execute();
        return $stmt_cont->fetchColumn();
    }else {
            echo "Página não encontrada.";
        }
    } 

    /* Retorna os dados da solução a partir do codigo de identificacao */
    public static function consultaSolucoesPorId($id){
        require_once 'conexao.php';
        $stmt = conexao::getInstance();
        $stmt = $stmt->prepare("SELECT `id`, `nome_solucao`, `filtro`, `descricao_solucao`, `valor`, `produto` FROM `solucoes` WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    /* As funções a seguir servem para efetuar a edição de um dado de um produto no banco de dados */
    static function alterarNome($nome_solucao, $id){
        require_once 'conexao.php';
        $stmt = conexao::getInstance();
        $stmt = $stmt->prepare("UPDATE `solucoes` SET `nome_solucao`=:nome_solucao WHERE id = :id ");
            $stmt->bindParam(':nome_solucao', $nome_solucao);
            $stmt->bindParam(':id', $id);
            
            if($stmt->execute()){
                
            } else {
                echo "Ocorreu um erro na inclusão do registro";
                print_r($stmt->errorInfo());
            }
    }
    static function alterarFiltro($filtro, $id){
        require_once 'conexao.php';
        $stmt = conexao::getInstance();
        $stmt = $stmt->prepare("UPDATE `solucoes` SET `filtro`=:filtro WHERE id = :id ");
            $stmt->bindParam(':filtro', $filtro);
            $stmt->bindParam(':id', $id);
            
            if($stmt->execute()){
                
            } else {
                echo "Ocorreu um erro na inclusão do registro";
                print_r($stmt->errorInfo());
            }
    }
    static function alterarDescricao($descricao_solucao, $id){
        require_once 'conexao.php';
        $stmt = conexao::getInstance();
        $stmt = $stmt->prepare("UPDATE `solucoes` SET `descricao_solucao`=:descricao_solucao WHERE id = :id ");
            $stmt->bindParam(':descricao_solucao', $descricao_solucao);
            $stmt->bindParam(':id', $id);
            
            if($stmt->execute()){
                
            } else {
                echo "Ocorreu um erro na inclusão do registro";
                print_r($stmt->errorInfo());
            }
    }

    static function alterarValor($valor, $id){
        require_once 'conexao.php';
        $stmt = conexao::getInstance();
        $stmt = $stmt->prepare("UPDATE `solucoes` SET `valor`=:valor WHERE id = :id ");
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':id', $id);
            
            if($stmt->execute()){
            } else {
                echo "Ocorreu um erro na inclusão do registro";
                print_r($stmt->errorInfo());
            }
    }

    /* Está função recebe um número de ID para efetuar a exclução desta solução do BD */
    static function excluirSolucao($id){
        require_once 'conexao.php';
        $stmt = conexao::getInstance();
        $stmt = $stmt->prepare("DELETE FROM `solucoes` WHERE id = :id ;");
            $stmt->bindParam(':id', $id);
            
            if($stmt->execute()){
                
            } else {
                echo "Ocorreu um erro na inclusão do registro";
                print_r($stmt->errorInfo());
            }
    }
  
    /* Função que recebe os dados e efetua o cadastro de uma nova solução */
    static function cadastraSolucao($nome_solucao, $filtro, $filtroNovo, $descricao_solucao, $produto, $valor){
        require_once 'conexao.php';
        $stmt = conexao::getInstance();
        $stmt = $stmt->prepare("INSERT INTO `solucoes`(`nome_solucao`, `filtro`, `descricao_solucao`, `valor`, `produto`) VALUES (:nome_solucao,:filtro,:descricao_solucao,:valor,:produto)");
        $stmt->bindParam(':nome_solucao', $nome_solucao);
        $stmt->bindParam(':filtro', $filtro);
        $stmt->bindParam(':descricao_solucao', $descricao_solucao);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':produto', $produto);
        if($stmt->execute()){
            $stmt2 = conexao::getInstance();
            $stmt2 = $stmt2->prepare("SELECT MAX(`id`) as id FROM `solucoes`");
            $stmt2->execute();
            while ($rs = $stmt2->fetch(PDO::FETCH_ASSOC)):
            return $rs['id'];
            endwhile;
        } else {
            header('Location: login.php?mensagem=naoCadastrado');
        }
        
    }

 
}

?>