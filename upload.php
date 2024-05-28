<?php
$pastaDestino = "/uploads/";
var_dump($_FILES);
var_dump($_FILES['arquivo']['size']);
if ($_FILES['arquivo']['size'] > 2000000){
    echo "O tamanho do arquivo é maior que o limite permitido.";
    die();
}
var_dump($_FILES['arquivo']['name']);

var_dump(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));