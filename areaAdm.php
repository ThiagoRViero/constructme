<!doctype html>
<html lang="pt-br">
<?php 
require_once 'classes/sessao.php';
/* Está página só deve ser acessada por administradores então a função abaixo efetua a verificação e toma a ação necessária caso o usuário não seja adm */
Sessao::verificaSessao();
require_once 'estrutura/head.php'; ?>
<!-- Aqui é apresentada apenas a estrutura da página, os elementos foram separados um a um por arquivo, para entender melhor cada trecho o ideal é verificar cada página dos requires -->
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
              <h1 class="display-5">Configurações:</h1>
              <?php require_once 'classes/apresentacaoClasses/exibeConfigs.php';?>
            </div>
          </div>
        </div>
      </div>
    </article>
    <?php require_once 'estrutura/rodape.php';?>
  </body>
</html>
