<!doctype html>
<html lang="pt-br">
<?php 
/* Os arquivos vindos da pasta estrutura tem por finalidade montar o layout da pagina e criar os menus e rodape */
    require_once 'estrutura/head.php'; 
    /* Verifica se foi passado um codigo ou quantidade de uma solucao */
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : null;
    $quantidade = isset($_GET['quantidade']) ? $_GET['quantidade'] : null;
    /* Sempre que a pagina e iniciada e efetuada a adicao dos produtos que so sera bem sucedida se codigo e quantidade forem passados pela URL */
    require_once 'classes/carrinho.php';
    Carrinho::adicionarCarrinho($codigo,$quantidade);  
?>
  <body>
    <?php require_once 'estrutura/menu.php'; ?>
    <article class="container">
      <div class="row">
        <div id="menuLateral" class="col-sm-4 col-md-3 mt-3" >
          <?php require_once 'estrutura/menuLateral.php';?>
        </div>
         
        <!-- Foi criada uma função para trazer as informações do carrinho, a partir desta função já é acionado o arquivo auxiliar para apresentação do carrinho, retornando a está página apenas o valor total, mas para o usuário será apresentado todos os itens do carrinho -->
        <div class="mt-2 col-sm-4 col-md-5 flexbox">
          <h1 class="h3 mb-3">Carrinho de compras:</h1>
          <?php $total = Carrinho::exibeCarrinho(); ?> 
        </div>

        <div class="mt-2 col-md-3 ">
          <div class="mt-2 pb-3 bg-cinza border rounded">
            <p class="text-center h5 mt-3">Total <span class="text-danger">sugerido</span>:</p>
            <p class="text-center h5 mt-1"> R$<?php echo number_format($total, 2, ',', ' '); ?></p>
            <p class="mensagemValor">Os valores constantes nesta página podem não corresponder ao valor final do produto.</p>
            <div class="d-flex justify-content-center">
              <!-- Encaminha uma mensagem configurada com todos os dados do carrinho por whatsapp -->
              <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=55<?php echo Config::whats();?>&text=<?php  echo Carrinho::carrinhoParaMensagem();?>" target="_blank">Finalizar pelo Whats</a>
            </div>
            <div class="d-flex justify-content-center">
              <!-- Encaminha uma mensagem configurada com todos os dados do carrinho por email -->
              <a class="btn btn-primary mt-2" href="mailto:<?php echo Config::email();?>?subject=Compras&body=<?php  echo Carrinho::carrinhoParaMensagem();?>" target="
              _blank">Finalizar pelo E-mail</a>
            </div>
          </div>
        </div>
      </div>
    </article>
      <?php require_once 'estrutura/rodape.php';?>
  </body>
</html>
