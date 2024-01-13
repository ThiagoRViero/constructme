<?php 
    /* Para facilitar o encaminhamento de outras páginas para cadastro de soluções foi criada está página junto aos demais arquivos da raiz, porém para que isso seja feita de forma segura a função abaixo efetua a verificação se existe uma sessão de ADM ativa */
    require_once 'classes/sessao.php';
    require_once 'classes/solucoes.php';
    require_once 'classes/filtroSolucoes.php';
    Sessao::verificaSessao();
    
    /* Então com a sessão ativa os dados são recebidos alocados e é efetuado o cadastro do produto através da respectiva função */
    $nome_solucao = isset($_POST['nome_solucao'])? $_POST['nome_solucao']: null;
    $filtro = isset($_POST['filtro'])? $_POST['filtro']: null;
    $filtroNovo = isset($_POST['filtroNovo'])? $_POST['filtroNovo']: null;
    $descricao_solucao = isset($_POST['descricao_solucao'])? $_POST['descricao_solucao']: null;
    $produto = isset($_POST['produto'])? $_POST['produto']: null;
    $valor = isset($_POST['valor'])? $_POST['valor']: null;

    if ($filtroNovo != null){$filtro = $filtroNovo;};
    $id = Solucoes::cadastraSolucao($nome_solucao, $filtro, $filtroNovo, $descricao_solucao, $produto, $valor);
    echo 'teste'.$id;

    $uploaddir = 'img/produtos/';
    $uploadfile = $uploaddir . basename("img".$id.".png");
    move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile);
    header('Location: adicionarSolucao.php?mensagem=cadastrado');
    

?>