<!-- Está página é puxada para apresentar uma solução no carrinho sendo assim ela deve ser chamada dentro de um looping que á chamará para apresentar cada solução -->
<?php $rs = $stmt->fetch(PDO::FETCH_ASSOC);
require_once 'estrutura/head.php'; 
?>
<div class="col-4 mt-2">
    <img src="img\produtos\img<?php echo $rs['id'] ?>.png" alt="img\produtos<?php echo $rs['id'] ?>.png" class="img-fluid img-thumbnail imgCarrinho">
</div>
<div class="col-8">
    <p class=" d-block mt-3 text-left textoCarrinho"> <?php echo $rs['nome_solucao']?></p>
    <p class=" d-block text-left text-success textoCarrinho"><span class="text-danger">Preço sugerido: </span> R$ <?php echo $rs['valor']?></p>
    <p class=" d-block mt-3 text-left textoCarrinho float-left">Quantidade:</p>
    <ul class="pagination float-left pagination-sm">
        <li class="page-item">
            <a href="carrinho.php?codigo=<?php echo $posicao;?>&quantidade=<?php echo intval($prod) - 1;?>" class="page-link">  -   </a>
        </li>
        <li class="page-item">
            <p class="page-link"><?php echo $prod;?></p>
        </li>
        <li class="page-item ">
            <a href="carrinho.php?codigo=<?php echo $posicao; ?>&quantidade=<?php echo intval($prod) + 1;?>" class="page-link"> + </a>
        </li>

        
</div>
<?php  $valorTotal += $rs['valor'] * $prod;?>
    
    
    

            

