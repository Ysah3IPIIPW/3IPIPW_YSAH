<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula04 | Expressões</title>
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
            text-align: center;
            color: white;
            text-shadow: 2px 2px 2px black;
        }

        h3 {
            font-family: Arial;
            font-size: 20px;
            text-align: left;
        }

        ul {
            font-family: Arial;
            font-size: 20px;
            text-align: left;
        }
    </style>
<body>
    <h2>Operação de Comparação</h2>

    <ul></br>
        <li> menor que = &lt;</li>
		<li> maior que = &gt;</li>
		<li> maior ou igual = &le;</li>
		<li> menor ou igual = &ge;</li>
        <li> igual ==</li>
        <li> diferente = =!</li>
        <li> negação = !()</li>
    </ul>
    
    <?php
        $anoatual= 2022;
        $anonasc= 2005;
        $idade= $anoatual - $anonasc;

            //maior >
            $resul= $idade > 18; //false
        
                echo "<h3></br> Tipo Booleano 'maior' " . (int)$resul . "</h3>";

            // maior ou igual a >=   
            $resul= $idade >= 18; //false
        
                echo "<h3></br> Tipo Booleano 'maior ou igual' " . (int)$resul . "</h3></br>";
        
           
        //Aula05 _ Continuação 11/03/2022

            // menor que <
            $a= 10;
            $b= 10;
            $c= $a < $b;

                echo "\$c = " .(int) $c ."</br>";

            // menor ou igual a <=
            $c= $a <= $b;

                echo "\$c = " .(int) $c . "</br>"; //barra invertida dentro de aspas emite a variável em forma de texto
                
            // igual  ==
            $c = $a == $b;

                echo "\$c = " . (int) $c . "</br>";
                
            // diferente !=
            $a = 30;
            $b = 40;
            $c = $a != $b; // 1 = true 0 = false

                echo "\$c = " . (int) $c . "</br>"; //0

            // negação !()
            $c = !($a == $b); // 1 = true 0 = false
                echo "\$c = " . (int) $c . "</br>"; //1

                /*$c = !(false); // 1 = true 0 = false
                echo "\$c = " . (int) $c . "</br>";
                    Aparecerá true em formato inteiro*/     

            
    ?>
</body>
</html>