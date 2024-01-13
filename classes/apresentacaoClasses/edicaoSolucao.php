<!-- Está página tem como objetivo apresentar a tela de edição e efetuar a edição chamando as funções -->
<?php 
/* Este trecho busca as informações do produto que foi passado pela URL para edição */
$id = isset($_GET['codigo'])? $_GET['codigo']: null;
$stmt = Solucoes::consultaSolucoesPorId($id);

/* Este trecho recebe e aloca dados recebidos por POST */
$nome_solucao = isset($_POST['nome_solucao'])? $_POST['nome_solucao']: null;
$filtro = isset($_POST['filtro'])? $_POST['filtro']: null;
$filtroNovo = isset($_POST['filtroNovo'])? $_POST['filtroNovo']: null;
if ($filtroNovo != null){$filtro = $filtroNovo;};
$descricao_solucao = isset($_POST['descricao_solucao'])? $_POST['descricao_solucao']: null;
$produto = isset($_POST['produto'])? $_POST['produto']: null;
$valor = isset($_POST['valor'])? $_POST['valor']: null;

/* Este trecho verifica se houve a edição de algum produto toda edição é feita por POST dentro da mesma página */
if(isset($nome_solucao) && $nome_solucao != null){Solucoes::alterarNome($nome_solucao, $id); };
if(isset($filtro) && $filtro != null){Solucoes::alterarFiltro($filtro, $id);};
if(isset($descricao_solucao) && $descricao_solucao != null){Solucoes::alterarDescricao($descricao_solucao, $id);};
if(isset($produto) && $produto != null){Solucoes::alterarProduto($produto, $id);};
if(isset($valor) && $valor != null){Solucoes::alterarValor($valor, $id);};


?>

<!-- Aqui é apresentada a página para facilitar a edição todos os campos contam com placeholders ou semelhantes para mostrar o que está sendo utilizado no momento -->
<div class="container mt-2">
    <div class="row">
        <?php 
            while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                <!-- Todos os formulários foram trabalhados de forma que editem apenas uma parte da solução fazendo com que o usuário consiga editar apenas o que precisa -->
                    <div class="col-md-6 mt-3">
                        <form method="post" enctype="multipart/form-data" action="enviarImagem.php">
                            <img src="img\produtos\img<?php echo $rs['id'] ?>.png" alt="img\produtos<?php echo $rs['id'] ?>.png" class='imgProdutos'>

                            <input  class="form-control " type="hidden" name="id" id="id" value="<?php echo $id;?>">

                            <label for="imagem">Selecione a imagem:</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                            <input  class="form-control-file" type="file" name="imagem" id="imagem">
                            <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
                        </form>
                    </div>
                    <div class="col-md-6 mt-3">
                        <form method="post">
                            <label for="nome_solucao">Nome da solução:</label>
                            <input  class="form-control " type="text" name="nome_solucao" id="nome_solucao" placeholder="<?php echo $rs['nome_solucao'];?>">
                            <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
                        </form>
                        <form method="post">
                            <label for="filtro">Filtro (Menu lateral):</label>
                                <select id="filtro" name="filtro" class="form-control">
                                    <!-- Este trecho traz como opção todos os filtros cadastrados evitando o cadastro de um novo filtro sem necessidade -->
                                    <?php filtroSolucoes::retornaSolucoes($rs['filtro']); ?>
                                </select>
                            <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
                        </form>
                        <form method="post">
                            <label for="filtroNovo">Cadastrar um novo filtro:</label>
                            <input  class="form-control " type="text" name="filtroNovo" id="filtroNovo"?>
                            <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
                        </form>
                        <form method="post">
                            <label for="descricao_solucao">Descrição da solução:</label>
                            <input  class="form-control " type="text" name="descricao_solucao" id="descricao_solucao" placeholder="<?php echo $rs['descricao_solucao'];?>">
                            <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
                        </form>
                        
                    </div>
                    <div class="col-md-6 mt-3">
                        <form method="post">
                            <label for="produto">Produto ou serviço:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="produto" id="produto" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Produto
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="produto" id="produto" value="0">
                                <label class="form-check-label" for="produto">
                                    Serviço
                                </label>
                            </div>
                            <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
                        </form>
                    </div>
                    <div class="col-md-6 mt-3">
                        <form method="post">
                            <label for="valor">Valor:</label>
                            <input  class="form-control " type="number" name="valor" id="valor" placeholder="<?php echo $rs['valor'];?>">
                            <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
                        </form>
                    </div>
            <?php  endwhile;
    ?>
    </div>
</div>

