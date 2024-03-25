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
        <input type="submit" value="Fazer Upload" name="submit">
</body>
</html>