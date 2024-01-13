<!-- Está página é utilizada para que o usuário administrador efetue login, os usuários comuns não efetuam ligin -->
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
              <h1 class="display-3 mb-3">Area do administrador!</h1>

              <form action="logado.php" class="row justify-content-md-center" method="post">
                    <div class="form-group col-md-4">
                        <label for="Usuario">Usuário:</label>
                        <input  class="form-control " type="text" name="usuario" id="usuario" placeholder="admin">

                        <label for="senha">Senha:</label>
                        <input class="form-control " type="password" name="senha" id="senha" placeholder="admin">

                        <input class="btn btn-primary mt-3 btn-block" type="submit" value="Entrar" id="logar">
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </article>
    <?php require_once 'estrutura/rodape.php';?>
  </body>
</html>
