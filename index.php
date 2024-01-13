<!-- Página inicial sem muitas informações, a ideia é que o usuário efetue o acesso é vá direto ás demais págians dos menus -->
<!doctype html>
<html lang="pt-br">
<?php require_once 'estrutura/head.php'; ?>
  <body>
    <?php require_once 'estrutura/menu.php'; ?>
    <article class="container">
      <div class="row">
        <div id="menuLateral" class="col-sm-4 col-md-3 mt-3">
          <div class="d-none d-md-block">
            <?php require_once 'estrutura/menuLateral.php'; ?>
          </div>
        </div>

        <div class="col-sm-9">
          <div class="mt-3 jumbotron">
            <div class="container">
              <h1 class="display-3">Venha nos conhecer!</h1>
              <p2 class="lead">
                This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
              </p>
              <a href="sobre.php" class="btn  btn-primary">Conheça mais »</a>
            </div>
          </div>
        </div>
      </div>
    </article>
    <?php require_once 'estrutura/rodape.php';?>
  </body>
</html>
