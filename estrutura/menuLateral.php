<!-- Página que chama as classes necessárias e estrutura o menu lateral onde se encontram os filtros -->
<article class="container">
    <div class="row justify-content-center ">
        <nav class="navbar navbar-expand-sm rounded  bg-lateral w-100  pr-sm-3 pl-sm-1 justify-content-center ">
            
            <button class="navbar-toggler d-sm-block d-md-none p-0 m-0" type="button" data-toggle="collapse" data-target="#lateral" >
                <span class="navbar-toggler-icon p-0 m-0">Filtrar</span>
            </button>
            <div id="lateral" class="collapse navbar-collapse  flex-column pl-5 pl-sm-3">
                <?php 
                require_once 'classes/filtroSolucoes.php';
                if(filtroSolucoes::existeProduto()){?>
                    <header class="pl-0 ">
                        <h2 class=" d-flex justify-content-center">Produtos</h2>
                    </header>
                        <ul class="navbar nav flex-column pl-0">
                            <?php
                                $stmt = filtroSolucoes::retornaFiltroProdutos();
                                while ($tipos = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                    <li class="nav-item pt-0 pb-0">
                                        <a href="solucao.php?<?php echo 'pagina=1' ,'&tipoSolucao=1', '&filtro=', $tipos['filtro']; ?>" class="nav-link  display-5"><?php echo $tipos['filtro']; ?></a>
                                    </li>
                                <?php  endwhile; ?>
                        </ul>
                <?php 
                }

                if(filtroSolucoes::existeServico()){?>
                    <header class="pl-0 ">
                        <h2 class=" d-flex justify-content-center">Serviços</h2>
                    </header>
                    <ul class="navbar nav flex-column  pl-0">
                        <?php
                            $stmt = filtroSolucoes::retornaFiltroServicos();
                            while ($tipos = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                <li class="nav-item pt-0 pb-0">
                                    <a href="solucao.php?<?php echo 'pagina=1' ,'&tipoSolucao=0', '&filtro=', $tipos['filtro']; ?>" class="nav-link  display-5"><?php echo $tipos['filtro']; ?></a>
                                </li>
                            <?php  endwhile; ?>
                    </ul> <?php
                }
                ?>
            </div>
        </nav>
    </div>    
</article>