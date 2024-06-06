<?php
$conexao= mysqli_connect("localhost", "root", "", "upload-arquivos");
$sql= "SELECT * FROM arquivo";
$resultado= mysqli_query($conexao, $sql);
if($resultado != false){
    $arquivos = mysqli_fetch_all($resultado, MYSQLI_BOTH);
}
    else{
        echo "Erro ao executar o comando sql.";
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>
    <form action = "upload.php" method = "post" enctype= "multipart/form-data">
        Adicione o arquivo:
        <input type="file" name="arquivo"><br><br>
        <input type="submit" value="Fazer Upload" name="submit"><br><br>
    <table>
        <tr> 
            <th> Nome do Arquivo </th>
            <th colspan = "2"> Opções </td>
        </tr>
    <thead>
    <tbody> 
        <?php
        foreach($arquivos as $arquivos){
            echo "<tr> <td>".$arquivos['nome_arquivo']."</td>";
            echo "<td> <a href ='alterar.php?nome_arquivo=".$arquivos['nome_arquivo']."'> Alterar </td>";
            echo "<td> <button> excluir </button> </td> </tr>";
        }
        ?>
    </tbody>
    </table>
</body>
</html>