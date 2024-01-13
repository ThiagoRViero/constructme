<!-- Esta página é responsável por apresentar e efetuar a páginação das páginas de apresentação de solução -->
'<nav aria-label="Navegacao entre paginas">
    <ul class="pagination float-right">
        <?php 
            $qntPaginas = ceil(Solucoes::quantidadeSolucoes($pagina, $tipo, $filtro) / 20);
            $contPaginas = 1;
        ?>
        <?php if ($pagina-1 > 0) {?>
            <li class="page-item"><a class="page-link" href="solucao.php?<?php echo 'pagina=',$pagina -1,'&tipoSolucao=', $tipo, '&filtro=', $filtro; ?>">Anterior</a></li>
        <?php 
            }
            while ($contPaginas <= $qntPaginas){
                if ($pagina == $contPaginas){
        ?>
            <li class="page-item active"><a class="page-link" href="solucao.php?<?php echo 'pagina=',$contPaginas ,'&tipoSolucao=', $tipo, '&filtro=', $filtro; ?>"><?php echo $contPaginas ?></a></li>
        <?php 
            } else {?>
                <li class="page-item"><a class="page-link" href="solucao.php?<?php echo 'pagina=',$contPaginas ,'&tipoSolucao=', $tipo, '&filtro=', $filtro; ?>"><?php echo $contPaginas ?></a></li>
            <?php }

            $contPaginas ++; 
            } 
            if ($pagina < $qntPaginas){
            ?>
                <li class="page-item"><a class="page-link" href="solucao.php?<?php echo 'pagina=',$pagina +1,'&tipoSolucao=', $tipo, '&filtro=', $filtro; ?>">Próxima</a></li>
            <?php } ?>
    </ul>
</nav>'