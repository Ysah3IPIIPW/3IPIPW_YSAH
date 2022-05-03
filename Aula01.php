<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        <?php echo "3IPIPW_YSAH"; ?>
        </title>
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

        ul {
            font-family: Arial;
            font-size: 30px;
            text-align: left;
        }
        
    </style>    
    <body>
        
        <?php 
            // colocando tag html dentro do php
            echo "<h1>Linguagem PHP</h1><br>"; // nao colocou parenteses
            echo "<h2>Introdução</h2>";

            //texto variavel para ser interpolado
            $nome = "Ysah";
            print("<p style=\"font-size: 30px; font-family: Arial;\"> Olá $nome , seja bem-vindo!");

            $nome = "Ysah";
            print("<br> <p style=\"font-family:Arial; font-size: 20px;\"> Seja bem-vinda, $nome!");
        ?>
        
        <?php 
                echo ("sou um php sendo colocado numa tag html</p>"); // com parenteses
        ?>

            <?php 
            //Atribuição de valores
                $num1 = "1";
                $num2 = "2";
                $num3 = "3";
                $num4 = "4";

                //Listagem dos valores atribuídos
                echo "<ul>";
                        echo "<li>".$num1."</li>";
                        echo "<li>".$num2."</li>";
                        echo "<li>".$num3."</li>";
                        echo "<li>".$num4."</li>";
                echo "</ul>";

        ?>

    </body>
</html>