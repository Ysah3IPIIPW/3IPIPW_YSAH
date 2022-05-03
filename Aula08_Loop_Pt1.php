<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08 | Loop Pt.1 For</title>
</head>
<body>
        <?php
            // Loop - Parte 1 (25/03)
                // para, repita, enquanto

                // for (para)
                // (variável; condição; contador)
                /*for ($i = 0; $i < 10; $i++) {// $i+1) 
                    echo "<br> $i <br>";
                }*/

                // Loop de 1 a 1000: Mostrar os valores pares somente
                for ($i = 0; $i <= 1000; $i++)
                    if ($i % 2 == 0) {
                        echo "<br> $i <br>";
                }    

                /* Correção
                for ($i = 0; $i <= 1000; $i++)
                    if (($i % 2) == 0) {
                        echo "<br> $i </br>";
                */

                    echo "<hr>";

                // Aula 09 - Enquanto (29/03)

                // while (enquanto)

                $count = 1;
                    while($count <= 10){
                        echo "<br> $count <br>";
                    // contador
                    $count++; // $count = $count + 1;
                }
                    echo "<hr>";

                

        ?>


</body>
</html>