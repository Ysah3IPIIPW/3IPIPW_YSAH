<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05_Operadores de</title>
</head>
<body>
    <?php

        /* Operadores de Atribuição
           =, +=, -=, *=, /=, .=  */

            // Adição
            $a= 1;
            $a+= 1; //2

                echo $a . "</br>";

            // Subtração
            $a= 10;
            $a -= 3; // $a = $a - 3
            
                echo $a . "</br>";

            // Multiplicação
            $a= 10; 
            $a*= 3; // $a = $a * 3

                echo $a . "</br>"; 
            
                // Divisão
            $a= 10; 
            $a/= 3; // $a = $a / 3

                echo $a . "</br>"; 

                // Módulo
            $a= 10; 
            $a%= 3; // $a = $a % 3

                echo $a . "</br>"; 
            
                // Concatenação
            $a= "Olá, somente com"; 
            $a.= " texto"; // Olá, somente com texto

                echo $a . "</br>"; 
            

    ?>
</body>
</html>