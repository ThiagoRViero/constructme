<!-- Está página é responsável por efetua o upload das imagens para o servidor -->
<?php
$id = isset($_POST['id'])? $_POST['id']: null;
$uploaddir = 'img/produtos/';
$uploadfile = $uploaddir . basename("img".$id.".png");
echo $uploadfile;

echo '<pre>';
if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
    header("location: editarSolucao.php?codigo=$id");
} else {
    echo "Possível ataque de upload de arquivo!\n";
}
print "</pre>";
?>