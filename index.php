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

        <div class="col-sm-9 rounded mt-3 bg-lateral">
          <div class="mt-3 jumbotron">
            <div class="container">
              <h1 class="display-3">Recado dos desenvolvedores</h1>
              <p class="lead">
                Prezados, agradecemos seus acessos!
              </p>
              <p>
              Esse projeto tem por objetivo fornecer um modelo de site que permita um fácil e rápido processo de implantação, permitindo desta forma que empresas que não possuem muitos recursos consigam se inserir no mundo digital, abrindo essa grande porta para pequenos e médios comerciantes!
              </p>
              <p>
              Esse projeto propõe edições de partes estruturais através de uma tela de cadastro simplificada. Essa tela pode ser acessada através do botão "Área do administrador" disponível na parte inferior direita da página. Além disso, o cadastro, edição e exclusão dos produtos e serviços podem ser feitos de forma fácil, permitindo que usuários sem muita instrução consigam atuar no projeto.
              </p>
              <p>
              Tendo em vista a complexidade da implantação de um sistema de compras com cartão de crédito ou boletos, neste projeto foram propostas soluções que além de facilitar a implantação possibilitam que os comerciantes ofereçam mais serviços e produtos tornando a negociação ainda mais atrativa para ambas as partes!
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
