<!-- Está página tem como objetivo apresentar a tela de edição e efetuar a edição das configurações da página -->
<?php
require_once 'classes/config.php';
/* Recebe os dados passados por POST e os aloca */
$nome_loja = isset($_POST['nome_loja'])? $_POST['nome_loja']: null;
$logo = isset($_POST['logo'])? $_POST['logo']: null;
$telefone = isset($_POST['telefone'])? $_POST['telefone']: null;
$whats = isset($_POST['whats'])? $_POST['whats']: null;
$email = isset($_POST['email'])? $_POST['email']: null;
$endereco = isset($_POST['endereco'])? $_POST['endereco']: null;
$facebook = isset($_POST['facebook'])? $_POST['facebook']: null;
$twitter = isset($_POST['twitter'])? $_POST['twitter']: null;
$instagram = isset($_POST['instagram'])? $_POST['instagram']: null;
$youtube = isset($_POST['youtube'])? $_POST['youtube']: null;
$sobre = isset($_POST['sobre'])? $_POST['sobre']: null;

/* Verifica se foi passado o dado por POST para efetuar a edição, em caso positivo dispara a função responsável pela edição */
if(isset($nome_loja)){Config::alteraNome_loja($nome_loja);}
if(isset($logo)){Config::alteraLogo($logo);}
if(isset($telefone)){Config::alteraTelefone($telefone);}
if(isset($whats)){Config::alteraWhats($whats);}
if(isset($email)){Config::alteraEmaila($email);}
if(isset($endereco)){Config::alteraEndereco($endereco);}
if(isset($facebook)){Config::alteraFacebook($facebook);}
if(isset($twitter)){Config::alteraTwitter($twitter);}
if(isset($instagram)){Config::alteraInstagram($instagram);}
if(isset($youtube)){Config::alteraYoutube($youtube);}
if(isset($sobre)){Config::alteraSobre($sobre);}


?>
<div class="container">
    <div class="row">
        <!-- A seguir temos a apresentação dos formulários onde todos os placeholders ou semelhantes mostram as configurações atuais da página. Todos os campos tem edição própria, sendo assim os campos deverão ser editados um por vez -->
        <div class="col-md-6 mt-3">
            <form method="post">
                <label for="nome_loja">Nome da loja:</label>
                <input  class="form-control " type="text" name="nome_loja" id="nome_loja" placeholder="<?php echo Config::nome_loja(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
        <div class="col-md-6 mt-3">
            <form method="post">
                <label for="logo">Nome da logo:</label>
                <input  class="form-control " type="text" name="logo" id="logo" placeholder="<?php echo Config::logo(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
        <div class="col-md-6 mt-3">
            <form method="post">
                <label for="telefone">Telefone:</label>
                <input  class="form-control " type="text" name="telefone" id="telefone" placeholder="<?php echo Config::telefone(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
        <div class="col-md-6 mt-3">
            <form method="post">
                <label for="whats">Whats:</label>
                <input  class="form-control " type="text" name="whats" id="whats" placeholder="<?php echo Config::whats(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
        <div class="col-md-6 mt-3">
            <form method="post">
                <label for="email">Email:</label>
                <input  class="form-control " type="text" name="email" id="email" placeholder="<?php echo Config::email(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
        <div class="col-md-6 mt-3">
            <form method="post">
                <label for="endereco">Endereço:</label>
                <input  class="form-control " type="text" name="endereco" id="endereco" placeholder="<?php echo Config::endereco(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
        <div class="col-md-6 mt-3">
            <form method="post">
                <label for="facebook">Facebook:</label>
                <input  class="form-control " type="text" name="facebook" id="facebook" placeholder="<?php echo Config::facebook(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
        <div class="col-md-6 mt-3">
            <form method="post">
                <label for="twitter">Twitter:</label>
                <input  class="form-control " type="text" name="twitter" id="twitter" placeholder="<?php echo Config::twitter(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
        <div class="col-md-6 mt-3">
            <form method="post">
                <label for="instagram">Instagram:</label>
                <input  class="form-control " type="text" name="instagram" id="instagram" placeholder="<?php echo Config::instagram(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
        <div class="col-md-6 mt-3">
            <form method="post">
                <label for="youtube">Youtube:</label>
                <input  class="form-control " type="text" name="youtube" id="youtube" placeholder="<?php echo Config::youtube(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
        <div class="col-md-12 mt-3">
            <form method="post">
                <label for="sobre">Sobre:</label>
                <input  class="form-control " type="text" name="sobre" id="sobre" placeholder="<?php echo Config::sobre(); ?>">
                <input class="btn btn-outline-success mt-2" type="submit" value="Salvar">
            </form>
        </div>
    </div>

</div>