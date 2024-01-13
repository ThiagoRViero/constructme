<!-- Arquivo que constroi o menu superior da página -->
<div>
    <!-- Criacao do menu de forma responsiva utilizando as classes do bootstrap -->
    <!-- A classe navbar-expand-sm que define quando o menu estera aparente ou reduzido -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-sm  p-0 m-0">
        <?php require_once 'classes/config.php'; ?>
        <a href="index.php" class="navbar-brand "><?php echo Config::logo();?></a>
    <!-- Este botao faz com que o menu expanda ou diminua, o botao sao sera aparente em dispostivos sm -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamburguer">
            <span class="navbar-toggler-icon"></span>
        </button>
    <!-- Tudo dentro da div a seguir ira desaparecer quando o menu nao estiver expandido -->
        <div id="hamburguer" class="collapse navbar-collapse">
            <ul class="navbar-nav ">
                <li class="nav-item mx-auto mt-2">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item mx-auto mt-2">
                    <a href="solucao.php?pagina=1&tipoSolucao=1" class="nav-link">Produtos</a>
                </li>
                <li class="nav-item mx-auto mt-2">
                <a href="solucao.php?pagina=1&tipoSolucao=0" class="nav-link">Serviços</a>
                </li>
                <li class="nav-item mx-auto mt-2">
                <a href="sobre.php?pagina=1" class="nav-link">Sobre</a>
                </li>
                <li class="nav-item mx-auto m-0 mt-2">
                    
                    
                </li>
            </ul>
            <div class="m-0 ms-auto">
                <?php if(isset($_SESSION['usuario'])){?>
                    <a href="adicionarSolucao.php" class="  text-light btn btn-success pt-0 pb-0 pl-1 pr-1">Add Produto</a>
                <?php } else{?>
                    <a href="carrinho.php?" class="nav-link">Carrinho</a>
                <?php } ?>'
            </div>
        </div>
    </nav>
</div>
<title><?php echo Config::logo();?></title>



