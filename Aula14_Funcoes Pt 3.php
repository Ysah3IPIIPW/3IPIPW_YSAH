<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 | Funções Pt. 4</title>
</head>
<body>
    <?php
    // Aula 14 - Funções Pt.3 (06/05)
        // Funções de string: conta quantos caracteres estão sendo declarados

    // String
    
    $nome = "Isac";
    $inv= "casI";

        echo strlen($nome);
        echo "<br>";

    if (strlen($nome) <= 4) {
        echo "Seu nome tem caracteres menor igual a 4";
    }    
    echo "<br><hr>";

    // Substring
        echo substr($nome, -1, 2);
        echo substr($inv, -2, -1);

        // Olhar as funções pré-definidas no php e demonstrar três em cada string/matemática

    ?>
</body>
</html>