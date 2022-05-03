<?php
    //Resolução de exercícios de lógica de programação
        // site: https://fit.faccat.br/~fpereira/apostilas/exerc_resp_alg_mar2007.pdf

            echo "<center>Exercícios de LP - Programação para Web II</center></br></br>";

        // Questão 1: Trocar valores entre as variáveis e exibir a troca na tela
            echo "</br>Questão 1</br>";

        $a= 10;
        $b= 20;
        $c= $a; //10
            //A = $a (10) e B = $b (20)

        $a= $b;
        $b= $c;

            echo "A = $a e B = $b</br></br>";

           echo "</hr>"; 

        //Questão 2: Declarando variáveis dentro de algoritmos
            //a)
            echo "</br>Questão 2</br>Letra a)</br>";

        $a= 10;
        $b= 20;

            echo "B = $b</br>";

        $b= $b/4;
            //B = $b (5)

            echo "A = $a e B = $b</br>";


            //b)
            echo "</br>Letra b)</br>";

        $a= 30;
        $b= 20;
        $c= $a + $b; //50
        
            echo "C = $c</br>"; // C = 50

        $b= $b/2; //10

            echo "B = $b e C = $c</br>"; // B = 10 e C = 50

        $c= $a + $b; //
        
            echo "A = $a, B = $b e C = $c</br>"; // 30, 10 e 40


            //c
            echo "</br>Letra c)</br>";

        $a= 10;
        $b= 20;
        $c= $a; //10
        $b= $c; //10
        $a= $b; //10
        
            echo "A = $a, B = $b e C = $c</br>"; // 10, 10 e 10


            //d
            echo "</br>Letra d)";

        $a= 10;
        $b= $a + 1; //11
        $a= $b + 1; //12
        $b= $a + 1; //13
        
            echo "</br>A = $a</br>"; //12
        
        $a= $b + 1; //14   

            echo "A = $a e B = $b</br>"; //14 e 13


            //e
            echo "</br>Letra e)</br>";

        $a= 10;
        $b= 5;
        $c= $a + $b; //15
        $b= 20;
        $a= 10;

            echo "A = $a, B = $b e C = $c.</br>"; //10, 20 e 30


            //f
            echo "</br>Letra f)</br>";

        $x = 1;
        $y = 2;
        $z = $y - $x; //1

            echo "Z = $z</br>"; //1

        $x = 5;
        $y= $x + $z; //6
        
            echo "X = $x, Y = $y e Z = $z</br></br>"; //5, 6 e 1


        //Questão 3: Uso do parênteses nos cálculos
            //a)
            echo "</br>Questão 3</br>Letra a)</br>";

        $a1= (4/2)+(2/4);   $a2= 4/2 + 2/4; //2,5 //2,5
        $b1= 4/(2+2)/4;     $b2= 4/2 + 2/4; //0,25 //2,5
        $c1= (4+2)*2-4;     $c2= 4/2*2-4; //8 //0

            echo "A1 = $a1 e A2 = $a2</br>";
            echo "B1 = $b1 e B2 = $b2</br>";
            echo "C1 = $c1 e C2 = $c2</br>";





?>