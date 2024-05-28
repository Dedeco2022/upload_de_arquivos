<?php
$pastaDestino = "/uploads/";

if ($_FILES['arquivo']['size'] > 2000000){
    echo "O tamanho do arquivo é maior que o limite permitido.";
    die();
}



$extensao= strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));

if($extensao != "png" && $extensao != "jpg" && $extensao != "jpeg" && $extensao != "gif" && $extensao != "jfif" && $extensao != "svg"){
    echo "O arquivo não é uma imagem! Apenas selecione arquivos com extensão png, jpg, jpeg, gif, jfif ou svg";
    die();
}
if(getimagesize($_FILES['arquivo']['tmp_name']) === false){
    echo "Problemas ao enviar a imagem! Tente novamente.";
    die();
}

$nomeArquivo = uniqid();

$fezUpload = move_uploaded_file($_FILES['arquivo']['tmp_name'], __DIR__ . $pastaDestino . $nomeArquivo . ".". $extensao);
if($fezUpload == true){
    header("location: index.php");
}
else{
    echo "Erro ao mover o arquivo";
}