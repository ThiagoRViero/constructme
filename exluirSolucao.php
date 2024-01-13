<?php 
    /* valida se existe uma sessao aberta para poder efetar a exclusoa do produto, dentro da propria validacao o usuario e direcionado para outra pagina caso nao possua sessao valida */
    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : null;
    $tipo = isset($_GET['tipoSolucao']) ? $_GET['tipoSolucao'] : null;
    $filtro = isset($_GET['filtro']) ? $_GET['filtro'] : null;
    $id = isset($_GET['codigo'])? $_GET['codigo']: null;

    require_once 'classes/sessao.php';
    require_once 'classes/solucoes.php';
    Sessao::verificaSessao();
    Solucoes::excluirSolucao($id);
    header("Location: solucao.php?pagina=$pagina&tipoSolucao=$tipo&filtro=$filtro");
?>