<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula07_Operadores Condicionais</title>
</head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&family=Secular+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fredoka+One&family=Lobster&family=Secular+One&display=swap');

        body{
            background-color: pink;
            margin: 100px 400px 100px 400px;
        }

        h1 {
            font-family: Fredoka One;
            font-size: 60px;
            text-align: center;
            color: white;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #000;
        }

        h2 {
            font-family: Secular One;
            font-size: 40px;
            text-align: left;
            color: white;
            text-shadow: 2px 2px 2px black;
        }

        h3 {
            font-family: Arial;
            font-size: 20px;
            text-align: left;
        }
    </style>    
<body>
    <?php
        // Operadores Condicionais - Parte 1 (22/05)
            echo "<h1>Operadores Condicionais</h1>";
            // Simples
            echo "<h2>Simples</h2>";
                // if (booleano)
                $nasc = 1983;
                $atual = 2022;
                $idade= $atual - $nasc; //39

                /*if($idade >= 16) {
                    echo "</br>Permitido votar!</br>";
                }*/

                if($idade >= 16 && $idade <= 60) {
                    echo "</br>Permitido votar!</br>";
                }

                $nasc = 2020;
                $atual = 2022;
                $idade= $atual - $nasc; //2

                if($idade < 16 || $idade > 60) {
                    echo "</br> Não é permitido votar!</br>";
                }


                // Nota de um aluno
                $n1 = 10;
                $n2 = 5.9;
                $n3 = 6.89;
                $media = ($n1 + $n2 + $n3) / 3;
                    echo "<br>A média final do aluno é de $media.</br>";
                    echo "<br>";

                if($media < 3) {
                    echo "Nota Insatisfatória</br>";
                }   

                if($media >= 3 && $media < 6) {
                    echo "Nota Regular</br>";
                }  

                if($media >= 6 && $media < 8) {
                    echo "Nota Satisfatória</br>";
                }  

                if($media >= 8 && $media <= 10) {
                    echo "Nota Excelente</br>";
                }  
                    echo "<hr>";

            // Composto
            echo "<h2>Composto</h2>";
                
                $nasc = 2020;
                $atual = 2022;
                $idade = $atual - $nasc;
            
                if($idade >= 16) {
                        echo "Permitido votar<br>";
                }   else{
                        echo "Não é permitido votar<br>"; //false
                } 
                echo "<hr>";

                // Complexo
                echo "<h2>Complexo</h2>";
                    
                if($idade >= 16 && $idade <= 60) {
                    echo "Permitido votar";
                } else if ($idade < 16){
                    echo "Não é permitido votar";
                } else {
                    echo "Não é permitido votar devido a idade.";
                echo "<hr>";
                }


        // Operadores Condicionais - Parte 2 (25/03)
            // Escolha

                $n1 = 2015;
                $n2 = 2022;
                $op = "*";  // operador que irá ser validado

                switch($op) { // switch desenvolve a mesma função do if, porém, mais simplificada
                    case "+": 
                        echo $resul = $n1 + $n2;
                    break; // break finaliza o código
                    
                    case "-":
                        echo $resul = $n1 - $n2;
                    break;

                    case "/":
                        echo $resul = $n1 / $n2;
                    break;

                    case "*":
                        echo $resul = $n1 * $n2;
                    break; // 4074330
                    
                    default:
                        $resul = "Não temos esta operação!";
                    break;
                    }

    ?>
</body>
</html>
