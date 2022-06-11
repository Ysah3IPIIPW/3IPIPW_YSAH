<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferência de arquivo | Continuação da Aula 16</title>
</head>
<body>
    <?php // Aula 17 - Continuação da Aula 16 (31/05)

        // Variáveis superglobais: get, post, request, file
            // https://www.php.net/manual/pt_BR/features.file-upload.post-method.php

        /* Array de informações  
            name;
            type;
            size;
            error;
            tmp_name;
            full_path
        */  

        // Explicando mensagens de erro

        // var_dump ($_FILES["arq"]);

            echo "nome:" . $_FILES["arq"]["name"]."<br>";
            echo "tipo:" . $_FILES["arq"]["type"]."<br>";
            echo "tamanho:" . $_FILES["arq"]["size"]."<br>";
            echo "error:" . $_FILES["arq"]["error"]."<br>";
            echo "nome temporário:" . $_FILES["arq"]["tmp_name"]."<br>";
            
            // Arquivo temporario diretório
            $tmp = $_FILES["arq"] ["tmp_name"];

            // Destino do arquivo no site a ser definido
            $arq = "./" .$_FILES["arq"] ["name"];

            // move_uploaded_file( $tmp, $arq);

            if ( move_uploaded_file( $tmp, $arq)){
                echo "Arquivo enviado com sucesso!";
            }

            // Alterar o tipo do arquiivo, organizar a pasta, tamanho do arquivo (USAR O IF)

            /* Atividade avaliativa

               Desenvolver um script formulário em PHP que contenha os seguintes campos:
               - Nome;
               - Logradouro;
               - Número;
               - CEP;
               - Complemento;
               - Bairro;
               - Cidade;
               - Estado;  
               - Anexar imagem em png ou jpg;

               Obs: Os campos devem ter a validação e o arquivo upload seja colocado numa pasta
               chamada "Imagem".
            */

            

    ?>
</body>
</html>