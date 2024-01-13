<!-- Está página é a de edição de solução porém nesta página se encontra apenas a estruturas, cada parte da página está separada facilitando a edição sendo assim para melhor entendimento o ideal é percorrer os requires -->
<?php 
  /* Este trecho do codigo e responsavel por verificar se a sessao e valida */
    require_once 'classes/sessao.php';
    require_once 'classes/solucoes.php';
    Sessao::verificaSessao(); 
?>

<!doctype html>
<html lang="pt-br">
<?php require_once 'estrutura/head.php'; ?>
  <body>
    <?php require_once 'estrutura/menu.php'; ?>
    <article class="container">
      <div class="row">
        <div id="menuLateral" class="col-sm-4 col-md-3 mt-3 border rounded bg-lateral">
          <?php require_once 'estrutura/menuLateral.php'; ?>
        </div>
        <div class="col-sm-9">
          <div class="mt-3 jumbotron">
            <div class="container">
              <h1 class="display-5">Editar:</h1>
              <?php require_once 'classes/apresentacaoClasses/edicaoSolucao.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </article>
    <?php require_once 'estrutura/rodape.php';?>
  </body>
</html>
