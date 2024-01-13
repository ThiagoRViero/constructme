<!-- Página que cria e encerra a sessão do usuário que efetua login -->
<?php
    require_once 'classes/conexao.php';
    require_once 'classes/sessao.php';
    
    $usuario = isset($_POST['usuario'])? $_POST['usuario']: null;
    $senha = isset($_POST['senha'])? $_POST['senha']: null;
    $encerrar = isset($_GET['encerrar'])? $_GET['encerrar']: null;

    if($encerrar== 'sim'){
        Sessao::encerraSessao();
    }
    Sessao::criaSessao($usuario, $senha);
    ?>