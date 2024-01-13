<!-- Página de informações da empresa -->
<!doctype html>
<html lang="pt-br">
  <?php require_once 'estrutura/head.php'; 
  require_once 'classes/config.php'; ?> 
  <body>
    <?php require_once 'estrutura/menu.php' ;?>
    <article class="container">
      <div class="row">
        <div id="menuLateral" class="col-sm-4 col-md-3 mt-3 border rounded bg-lateral">
          <div class="d-none d-md-block">
            <?php require_once 'estrutura/menuLateral.php'; ?>
          </div>
        </div>

        <div class="col-sm-9">
          <div class="mt-3 jumbotron">
            <div class="container">
              <h1 class="display-3">Sobre a <?php echo Config::logo(); ?></h1>
              <p2 class="lead">
                <?php echo Config::sobre(); ?>
              </p>
            </div>
            <div class="container">
              <h2>Contato e mídias:</h2>
              <ul class="flex-column">
                <li> <span class="font-weight-bold">Nome: </span>  <?php echo Config::nome_loja(); ?></li>
                <li> <span class="font-weight-bold">Endereço: </span> <?php echo Config::endereco(); ?></li>
                <li> <span class="font-weight-bold">Telefone: </span> <?php echo Config::telefone(); ?></li>
                <li> <span class="font-weight-bold">E-mail: </span> <?php echo Config::email(); ?></li>
                <li> <span class="font-weight-bold">WhatsApp: </span> <?php echo Config::whats(); ?></li>
                <li> <span class="font-weight-bold">Facebook: </span> <?php echo Config::facebook(); ?></li>
                <li> <span class="font-weight-bold">Instagram: </span> <?php echo Config::instagram(); ?></li>
                <li> <span class="font-weight-bold">Twitter: </span> <?php echo Config::twitter(); ?></li>
                <li> <span class="font-weight-bold">Youtube: </span> <?php echo Config::youtube(); ?></li>
              </ul>
            </div>
          </div>
        </div>
    </article>
    <?php require_once 'estrutura/rodape.php';?>

  </body>
</html>