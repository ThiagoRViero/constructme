<!-- Está página é puxada para apresentar uma solução na vitrine sendo assim ela deve ser chamada dentro de um looping que á chamará para apresentar cada solução -->
<div class="container mt-2">
    <div class="row">
        <?php 
            $contador = 1;
            while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
                if (($contador <= $pagina * 20) && ($contador >= $pagina * 20 -20)) {?>
                    <div class="mb-4 col-md-4 col-lg-3 col-sm-6 mt-2 text-break ">
                        <img src="img\produtos\img<?php echo $rs['id'] ?>.png" alt="img\produtos<?php echo $rs['id'] ?>.png" class='imgProdutos'>
                        <h4 class="d-flex justify-content-center"><?php echo $rs['nome_solucao']?></h4>
                        <p class="d-flex justify-content-center"><?php echo $rs['descricao_solucao']?> </p>
                        <div class="border rounded border-success mb-1 p-0 text-center flex-center">
                            <p class="mb-0 p-0">Valor <span class="text-danger font-weight-bold">sugerido</span>:</p>
                            <p class="mb-0 p-0">R$<?php echo number_format($rs['valor'], 2, ',', ' ')?></p>                            
                        </div>
                        <a href="carrinho.php?codigo=<?php echo $rs['id']?>&quantidade=1" class="btn btn-success d-flex justify-content-center ">Carrinho »</a>
                        
                    </div>
                <?php  } ?>
            <?php $contador ++; endwhile;
    ?>
    </div>
</div>

