<?php 
/* Classe responsavel por todos os procedimentos que envolvem o carrinho da aplicasao, quando necessario chama os arquivos da pasta "apresentacaoClasses" para apresentar as solucoes dentro do layout*/
class Carrinho{
/* funcao responsavel por adicionar itens no carrinho, a funcao adicioan um item por vez, os itens e quantidade sao passados atraves da funcao */
    static function adicionarCarrinho($codigo, $quantidade){
        /* Verifica se existe um carrinho (em cookie), em caso positivo o transforma em array adiciona as informacoes e armazena em cookie novamente */
        if($codigo != null && Carrinho::existeNoCarrinho($codigo)){
            if (isset($_COOKIE["carrinho"])){
                $carrinho= unserialize($_COOKIE["carrinho"]);    
            } else {
                $carrinho = array();
            }
            $carrinho[$codigo]= $quantidade;
            var_dump($carrinho);

            $carrinho= serialize($carrinho);
            setcookie('carrinho', $carrinho, time() +60*60*24);
            header('location: carrinho.php');
            
        } else if ($codigo != null && Carrinho::existeNoCarrinho($codigo) == false){
            if(intval($quantidade) <= 0){
                $carrinho= unserialize($_COOKIE["carrinho"]); 
                unset($carrinho[$codigo]);
                $carrinho= serialize($carrinho);
                setcookie('carrinho', $carrinho, time() +60*60*24);                   
            } else if (intval($quantidade) > 1){
                $carrinho= unserialize($_COOKIE["carrinho"]); 
                $carrinho[$codigo] = $quantidade;
                $carrinho= serialize($carrinho);
                setcookie('carrinho', $carrinho, time() +60*60*24);      
            }
            header('location: carrinho.php');
        }
    }
    /* Efetua a pesquisa no banco dedados dos items que estão no carrio (que está em cookie) e cria o looping que puxa a página de apresentação para cada produto */
    static function exibeCarrinho(){
        $cont = 1;?>
            <div class="container mt-2">
                <div class="row">
                    <?php
                        require_once 'solucoes.php';
                        $valorTotal = 0;
                        $recebido = isset($_COOKIE["carrinho"]) ? $_COOKIE["carrinho"] : "";
                        $carrinho = unserialize($recebido);
                        if ($carrinho != null){
                            foreach ($carrinho as $posicao => $prod){
                                $stmt = Solucoes::consultaSolucoesPorId($posicao);
                                require 'apresentacaoClasses/itemCarrinho.php';
                            }
                        }
                    ?>
                </div>
            </div>
    <?php return $valorTotal;}

    /* Verifica se o item já está no carrinho */
    static function existeNoCarrinho($codigo){
        $recebido = isset($_COOKIE["carrinho"]) ? $_COOKIE["carrinho"] : "";
        $carrinho = unserialize($recebido);
        
        foreach ($carrinho as $posicao => $prod){
            if ($codigo == $posicao){
                return false;
            }
        }
        return true;
    }

    /* Mensagem que é encaminhada via WhatsApp */
    static function carrinhoParaMensagem(){
        
                        $texto = "Olá, boa tarde!%0A";
                        $recebido = isset($_COOKIE["carrinho"]) ? $_COOKIE["carrinho"] : "";
                        $carrinho = unserialize($recebido);
                        foreach ($carrinho as $posicao => $prod){
                            $stmt = Solucoes::consultaSolucoesPorId($posicao);
                            $rs = $stmt->fetch(PDO::FETCH_ASSOC);
                            $texto .= "%0ACód: ". $posicao." Prd: ".$rs['nome_solucao']. " Qtd: ". $prod;
                        }
            return $texto;
        }

}
?>