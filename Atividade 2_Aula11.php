<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aula 11 | Atividade 2 </title>
</head>
<body>
    <style>
            
            @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&family=Secular+One&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fredoka+One&family=Lobster&family=Secular+One&display=swap');
    
            body{
                margin: 100px 300px 100px 300px;
            }
        
            h1 {
                font-family: Arial;
                font-size: 40px;
                text-align: center;
            }
        
            h2 {
                font-family: Arial;
                font-size: 30px;
                text-align: center;
            }
        
            h3 {
                font-family: Arial;
                font-size: 18px;
                text-align: justify;
                background-color: #CCCCCC;
            }
            
        </style>  
    <?php
        // Aula 11 - Atividade 2 (05/04)

            // Avaliação Intermediária de PHP
            echo "<h1>Atividade de PHP</h1></br><h2>Exercícios</h2></br>";
            echo "<hr></br>";

            // 1. Escreva um algoritmo para imprimir os números de 1 (inclusive) a 10 (inclusive) em ordem crescente.
            echo "<h3>Exercício 1 : <br> 
            Escreva um algoritmo para imprimir os números de 1 (inclusive) a 10 (inclusive) em ordem crescente.</h3><br><br>";

            // for
            echo "<h3>for : <br></h3>";
                for ($i = 1; $i <= 10; $i++) {// $i+1) 
                    echo "<br> $i <br>";
                }
                        echo "<br><br>";
            
            // while
            echo "while : <br>";
                $count = 1;
                while($count <= 10){
                    echo "<br> $count <br>";
                // contador
                    $count++; // $count = $count + 1;
                }
                        echo "<br><br>";
            
            echo "do while : <br>";
                $i = 1;
                do {
                    echo "<br>$i<br>";
                $i++;
                }while($i <= 10); 
    
                        echo "<br><br><hr>";            
                        

            // 2. Escreva um algoritmo para imprimir os números de 1 (inclusive) a 10 (inclusive) em ordem decrescente.
            echo "Exercício 2 : <br> 
            Escreva um algoritmo para imprimir os números de 1 (inclusive) a 10 (inclusive) em ordem decrescente.<br><br>";
                
            // for    
                for($i = 10; $i >= 1; $i--)
                echo "<br>$i<br>"; 
                    echo "<hr>";

            // while
            echo "<h3>while :</h3><br>";
                $i=10;    
                while($i >= 1){
                    echo "<br>$i<br>";
                $i--;
            }
                    echo "<br><br>";
            
            // do while 
            echo "<h3>do while :</h3><br>";
                $i = 10;
                do {
                    echo "<br>$i<br>";
                $i--;
                }while($i >= 1); 

                echo "<hr>";

            /* 3. Escreva um algoritmo que permita a leitura das notas de uma turma de 20 alunos. Calcule a média da turma
            e conte quantos alunos obtiveram nota acima desta média calculada. Escreva a média da turma e o resultado da 
            contagem*/
            echo "Exercício 3 : <br> 
            Escreva um algoritmo que permita a leitura das notas de uma turma de 20 alunos. Calcule a média da turma
            e conte quantos alunos obtiveram nota acima desta média calculada. Escreva a média da turma e o resultado da 
            contagem.<br><br>";
            
            $nota = array ();
                $nota[0] = 10; // [array sempre inicia-se com 0]
                $nota[1] = 10;
                $nota[2] = 5;
                $nota[3] = 6;
                $nota[4] = 10;
                $nota[5] = 8;
                $nota[6] = 7;
                $nota[7] = 8;
                $nota[8] = 8;
                $nota[9] = 8;
                $nota[10] = 9;
                $nota[11] = 10;
                $nota[12] = 10;
                $nota[13] = 5;
                $nota[14] = 6;
                $nota[15] = 10;
                $nota[16] = 8;
                $nota[17] = 7;
                $nota[18] = 8;
                $nota[19] = 8;

            $soma = 0;
                foreach ($nota as $value) {
                    $soma += $value; //$soma = $soma + $value
                }
                
            $media = $soma/20;
                echo "A média da turma é de $media";
                
            $contagem = 0;
                for($i = 0; $i <= 19; $i++)
                    if ( $nota[$i] > $media) {
                        $contagem++;
                    }    
                    echo "<br><br>A quantidade de alunos que tiraram a nota acima da média é de:  $contagem alunos<br>"; 
                          

    ?>
</body>
</html>