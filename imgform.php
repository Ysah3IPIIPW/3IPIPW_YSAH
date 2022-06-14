<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferência de arquivo | Continuação da Aula 16</title>
</head>
<body>
    <?php

        // var_dump ($_FILES["arq"]);

            echo "nome:" . $_FILES["arq"]["name"]."<br>";
            echo "tipo:" . $_FILES["arq"]["type"]."<br>";
            echo "tamanho:" . $_FILES["arq"]["size"]."<br>";
            echo "error:" . $_FILES["arq"]["error"]."<br>";
            echo "nome temporário:" . $_FILES["arq"]["tmp_name"]."<br>";
            

            $format = $_FILES["arq"] ["tmp_name"];

            // Arquivo temporario diretório
            $tmp = $_FILES["arq"] ["tmp_name"];

            // Destino do arquivo no site a ser definido
            $arq = "Imagem/" .$_FILES["arq"] ["name"];

            // move_uploaded_file( $tmp, $arq);


            if($format == "image/png" || $format == "image/jpg"){
            if ( move_uploaded_file( $tmp, $arq)){
                echo "Arquivo enviado com sucesso!";
            }
        }else{ 
            echo "<span style='color:red'>Anexe arquivos nos formatos png ou jpg!</span>";
        }

            


    ?>
</body>
</html>