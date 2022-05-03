<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 | Matriz, Array e Vetores</title>
</head>
<body>
    <?php
        // Aula 10 - Array (01/04)
            // array, matriz, lista, vetor

            /* Array é uma variável que tem localização na memória
            do computador que possibilita o armazenamento de vários 
            valores em que são localizados através de (indice/valor)
            (coluna/linha)*/

        // Forma 1 - declarando um array
        $nome = array ();
            $nome[0] = "Guilherme"; // [número associativo do índice]
            $nome[1] = "Gustavo";
            $nome[2] = "Taynara";
            $nome[3] = "Izabela";
            $nome[10] = "Jessica";

                // Exibição na tela
                print_r($nome); // exibe os valores das variáveis e suas posições
                    echo "<br><br>";
                echo $nome[10];
                    echo "<br><br>";
                var_dump($nome); /* Exibe a qtd de variáveis, o tipo das variáveis
                                 com o número de caracteres, os valores das variáveis
                                 e suas posições */ 
                    echo "<br><br>";
                    echo "<hr>";

            for ($i = 0; $i <= 10; $i++){
                if (isset($nome[$i])) {
                    echo "$nome[$i]" ."<br><br>";
                    }
            };

            /*for ($i = 0; $i <= 10; $i++){
                echo @"$nome[$i]" ."<br>"; // @ faz com que os erros não apareçam na tela
            };*/

            // while 
            // do {} while
                    echo "<hr>";

            foreach ($nome as $key => $value) { // $nome = variável, $key = posição, $value = valor
                echo "<br><br>$key = $value<br><br>";
            }
                    echo "<hr>";

            foreach ($nome as $value) {
                echo "$value<br><br>";
            }

                    echo "<hr>";

            // Tabuada do 1 a 10
            
            for ($i = 0; $i <= 10; $i++) {
                for ($x = 1; $x <= 10; $x++){
                    $resul = $i * $x;
                        echo "$i x $x = $resul<br><br>";
                }
            }
    ?>
</body>
</html>