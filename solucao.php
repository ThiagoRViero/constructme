<!-- Está página é responsável por criar a estrutura e chamar a apresentação das soluções independentes dos filtros todos os filtros são passados pela URL -->

<!doctype html>
<html lang="pt-br">
  <?php 
  $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : null;
  $tipo = isset($_GET['tipoSolucao']) ? $_GET['tipoSolucao'] : null;
  $filtro = isset($_GET['filtro']) ? $_GET['filtro'] : null;
  require_once 'estrutura/head.php'; ?>
  <body>
    <?php require_once 'estrutura/menu.php'; ?>
    <article class="container">
      <div class="row">
        <div id="menuLateral" class="col-sm-4 col-md-3 mt-3" >
          <?php require_once 'estrutura/menuLateral.php';?>
        </div>
        <div class="col-sm-8 col-md-9">
          <?php require_once 'classes/solucoes.php'; 
          Solucoes::exibeSolucao($pagina, $tipo, $filtro);
          ?>
        </div>
      </div>
    </article>
    <?php require_once 'estrutura/rodape.php';?>
  </body>
</html>
