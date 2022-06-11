<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 | Upload</title>
</head>
<body>
    <form action= "procupload.php" method= "POST" enctype= "multipart/form-data">
        <div> 
            <label>Imagem</label>
            <input type="file" name= "arq" id=""/>
        </div>
        <br>
        <div>
            <input type="submit" value="Enviar"/>
        </div> 

    </form>
    
</body>
</html>