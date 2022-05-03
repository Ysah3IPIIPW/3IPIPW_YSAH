<?php 
    // Fazer um arquivo somente de php
        // Operadores aritméticos
            /* + adição
            - subtração
            / divisão
            * multiplicação
            % modulo (divide e pega o resto)
            */ 

    // Declarar variáveis
        
        // Adição ( = receber, atribuir, armazenar)
        $num1= 20;
        $num2= 10;
        $resul;
            $resul = $num1 + $num2; // resul = 30

        echo "O valor $num1 somado ao valor $num2 tem como resultado $resul .</br>";
        echo "O resultado da adição de $num1 + $num2 = $resul .</br>";
       
            // Variável mais constante
            $resul= $num1 + 100;
            echo "O resultado de $num1 + 100 = $resul </br>";

            // Variável mais texto
            $resul= $num2 + "1000";
            echo "O resultado é de $resul ."; // resul= 1010 pois o php converte os valores automaticamente

        //Subtração 
        $num1= 1000;
        $num2= 99;
        $resul= $num1 - $num2;
        
        print ("</br>"); //pode-se escrever o print com ou sem parênteses
        print "O resultado da subtração é " .$resul;
            print "<blockquote> O resultado da subtração é </blockquote>" .$resul. "</blockquote>"; //utilizando <blockquote>

        //Multiplicação
        $num1= 10.17;
        $num2= 10;   
        $resul= $num1 * $num2; 

        echo "<br> O resultado da multiplicação é $resul";
?>