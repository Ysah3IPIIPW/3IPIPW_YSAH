<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Avaliação Intermediária de PHP | Programação para Web</title>
    </head>
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
        }
        
    </style>    
    <body>
        
        <?php
                // Avaliação Intermediária de PHP
                echo "<h1>Avaliação de PHP</h1></br><h2>Nível Intermediário</h2></br>";
                    echo "<hr></br>";

                // Questão 1
                echo "<h3>1. Faça um script que peça dois números e imprima na tela a soma.</h3></br>";
                    
                    // Método simples
                    $n1 = 20;
                    $n2 = 30;
                    $resultado = $n1 + $n2; //50
                        echo "R: $n1 + $n2 = $resultado</br></br>";

                    /* Método $_GET[""];
                    $n1 = $_GET["n1"];
                    $n2 = $_GET["n2"];
                    $resultado = $n1 + $n2;
                        echo "R: $n1 + $n2 = $resultado</br>";*/
        ?>

        <?php
                // Questão 2
                echo "<h3>2. Faça um script que peça 3 notas de um aluno e mostra sua média.</h3></br>";
                
                    // Método simples
                    $n1 = 8;
                    $n2 = 9;
                    $n3 = 10;
                    $media = ($n1 + $n2 + $n3) / 3;
                        echo "R: A média das notas dadas é $media</br></br>";
                
                    /* Método $_GET[""];
                    $n1 = $_GET["n1"];
                    $n2 = $_GET["n2"];
                    $n3 = $_GET["n3"];
                    $media = ($n1 + $n2 + $n3) / 3;
                        echo "R: A média das notas dadas é de $media</br>";*/
        ?>

        <?php        
                // Questão 3
                echo "<h3>3. Faça um script que pergunte quanto você ganha por hora e o número de 
                horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês.</h3></br>";
                       
                    //Método $_GET[""];
                    $salh = $_GET["salh"]; // ganho por hora
                    $horames = $_GET["hora"]; // horas por mês
                        echo "R: Informe quanto você ganha por hora: $salh reais por hora</br>";
                        echo "Informe sua carga horária por mês: $horames" . "h por mês</br>";
                    $salario = ($salh * $horames);
                        echo "Seu salário mensal é de R$ $salario,00</br></br>";
        ?>

        <?php
                //hp Questão 4
                echo "<h3>4. Tendo como dados de entrada a altura de uma pessoa, construa um script que 
                calcule seu peso ideal, usando a seguinte fórmula: (72.7 * altura) - 58.</h3></br>";
                   
                    // Método $_GET[""];
                    $h = $_GET["h"];
                    $peso = (72.7 * $h) - 58;
                    echo "Obs:  Informe sua altura em metros  separando as casa decimais com ponto(.)</br>";
                        echo "R: Sua massa corporal é de $peso kg.</br></br>";
        ?>

        <?php
                // Questão 5
                echo "<h3>5. Leia um número e exiba seu sucessor.</h3></br>";
                   
                    // Método $_GET[""];
                    $n1 = $_GET["n1"];
                    $resultado = $n1 + 1;
                        echo "R: $n1, $resultado</br>";

        ?>

    </body>
</html>