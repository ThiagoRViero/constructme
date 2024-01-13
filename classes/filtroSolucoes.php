<!-- Está classe tem como objetivo fornecer todas as ferramentas utilizadas nas páginas que tenho relação com filtros -->
<?php  
    require_once 'solucoes.php';
    class filtroSolucoes{
        /* O primeiro filtro feito na página é referente ao tipo de solução se é um produto ou serviço para só então ir para os filtros cadastrados, as duas funções a seguir tem o objetivo de verificar a existencia de produtos e serviços nas soluções */
        public static function existeProduto(){
            if (Solucoes::quantidadeSolucoes(1,1,null) > 0){
                return true;
            } else{
                return false;
            }
        }

        public static function existeServico(){
            if (Solucoes::quantidadeSolucoes(1,0,null) > 0){
                return true;
            } else{
                return false;
            }
        }

        /* Retorna todos os filtros de produtos */
        public static function retornaFiltroProdutos(){
            require_once 'conexao.php';
            $stmt = conexao::getInstance();
            $stmt = $stmt->prepare("SELECT DISTINCT `filtro` FROM `solucoes` WHERE produto = 1 ORDER BY 'filtro'");
            $stmt->execute();
            return $stmt;
        }
        /* Retorna todos os filtros de serviços */
        public static function retornaFiltroServicos(){
            require_once 'conexao.php';
            $stmt = conexao::getInstance();
            $stmt = $stmt->prepare("SELECT DISTINCT `filtro` FROM `solucoes` WHERE produto = 0 ORDER BY 'filtro'");
            $stmt->execute();
            return $stmt;
        }

        /* Função utilizada para listar os filtros já cadastrados */
        public static function retornaSolucoes($filtro){
            require_once 'conexao.php';
            $stmt = conexao::getInstance();
            $stmt = $stmt->prepare("SELECT DISTINCT `filtro` FROM `solucoes` ORDER BY 'filtro'");
            $stmt->execute();
            while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
            if($filtro ==$rs['filtro']){?>
                <option selected id="filtro" value="<?php echo $rs['filtro']; ?>"><?php echo $rs['filtro']; ?></option>    
            <?php 
            }else{?>
                <option id="filtro" value="<?php echo $rs['filtro']; ?>"><?php echo $rs['filtro']; ?></option>
                <?php
            }
            endwhile;?>
            <?php
        }
        
    }

?>