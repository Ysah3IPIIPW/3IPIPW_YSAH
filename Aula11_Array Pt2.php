<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 | Array Pt.2</title>
</head>
<body>
    <?php
        // Aula 11 - Array pt. 1
            // Array numérico e Associativo
                
                // Numérico
                $exemplo_01 = array ();
                $exemplo_01[0] = "Isac";

                $exemplo_02 = array("Isac", "Luiza", "Erick", "Jessica");

                // Estrutura do array
                var_dump($exemplo_02);
                    echo "$exemplo_02[3]<br>";
                
                $exemplo_02[4] = 560;
                    echo "$exemplo_02[4]<br>";

                /* Saber dinamicamente a quantidade de elementos no array
                utilizado a função count();*/    

                    echo 'O $exemplo_02 tem total de elementos ' . count($exemplo_02) . "<br>";
                    echo "<hr><br>";
                
                // Associativo
                $meses= array(
                    "a" => "Janeiro<br>",
                    "b" => "Fevereiro<br>",
                    "c" => "Março<br>", 
                    "d" => "Abril<br>",
                    "e" => "Maio<br>",
                    "f" => "Junho<br>",
                    "g" => "Julho<br>",
                    "h" => "Agosto<br>",
                    "i" => "Setembro<br>",
                    "j" => "Outubro<br>",
                    "k" => "Novembro<br>",
                    "l" => "Dezembro" // Na última linha NÃO se usa vírgula
                );

                print_r($meses);

    ?>
</body>
</html>