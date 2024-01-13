<!-- Este arquivo tem como objetivo apresentar a tela de criação de produtos -->
<?php 
/* Efetua a verificação da mensagem que está na URL, a página deve receber através da URL se a adição foi bem sucedida ou não e esse trecho irá demonstrar para o usuário o resultado */
$mensagem = isset($_GET['mensagem'])? $_GET['mensagem']: null;
if($mensagem == 'naoCadastrado'){;?>
    <div class="alert alert-danger alert-dismissible" role="alert">   
        <div>A operação não foi concluida!</div>   
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
<?php };
if($mensagem == 'cadastrado'){?>
    <div class="alert alert-success alert-dismissible" role="alert">   
        <div>A operação foi concluida!</div>   
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
    
};


?>

<!-- Aqui começa a apresentação da página -->
<div class="container mt-2">
    <div class="row">
        <form method="post" enctype="multipart/form-data" action="cadastrarSolucao.php">
            <div class="col-md-6 mt-3 float-md-left">
                <label for="imagem">Selecione a imagem:</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <input  class="form-control-file" type="file" name="imagem" id="imagem">
            </div>
            <div  class="col-md-6 mt-3 float-md-right">
                <label for="nome_solucao">Nome da solução:</label>
                <input  class="form-control " type="text" name="nome_solucao" id="nome_solucao" required>
            </div>
            <div  class="col-md-6 mt-3 float-md-left">
                <label for="filtro">Filtro (Menu lateral):</label>
                <select id="filtro" name="filtro" class="form-control">
                    <!-- Aqui é chamada a classe responsável por listar os filtros já existentes evitando a criação de filtros desnecessários -->
                    <?php filtroSolucoes::retornaSolucoes($rs['filtro']); ?>
                </select>
                <input  class="form-control mt-1" type="text" name="filtroNovo" id="filtroNovo" placeholder="Novo filtro">
            </div>
            <div  class="col-md-6 mt-3 float-md-right">
                <label for="descricao_solucao float-md-right">Descrição da solução:</label>
                <input  class="form-control " type="text" name="descricao_solucao" id="descricao_solucao" required>
            </div>
            <div  class="col-md-6 mt-3 float-md-left">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produto" id="produto" value="1" checked required>
                    <label class="form-check-label" for="exampleRadios1">Produto</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produto" id="produto" value="0">
                    <label class="form-check-label" for="produto">Serviço</label>
                </div>
            </div>
            <div  class="col-md-6 mt-3 float-md-right">
                <label for="valor">Valor:</label>
                <input  class="form-control " type="number" step="0.01" name="valor" id="valor" placeholder="0000.00" required>
            </div>
            <div class="col-md-12 mt-3">
                <div  class="float-md-right w-100">
                    <input class="btn btn-outline-success mt-2 justify-content-center w-100" type="submit" value="Salvar" required>
                </div>
            </div>

        </form>
    </div>
</div>

