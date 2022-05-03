<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções | Exercício de PW</title>
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
        // Funções | Exercício de PW

        /*
        Resolução
            1.1 Operações
                Adição
                Subtração
                Multiplicação
                Divisão
            
            1.2 Cada função terá um function

            1.3 Exemplo: 
                    function Adicao($arg1, $arg2){
                        $resul = $arg1 + $arg2;
                        return $resul;
                    }     

                    $valor = Adicao(100,200); //Pegar o valor e continua
                    echo Adicao(20,100); //Localizado na memória principal
                    echo "<br>";
                    echo $valor;

            1.4 if/switch
                    Exemplo: 
                    if("+" == op){
                        $valor = Adicao($arg1, $arg2);
                            echo "<br>";
                            echo $valor;
                    }
        */

            // Título
            echo "<h1>Funções</h1><br>";
            echo "<h2>Exercício de Programação para Web</h2></br>";
            
            echo "<h3>Operação: Adição</h3>";
                    // Declarando variáveis 
                    $num1= 100;
                    $num2= 200;
                    $op = "+";
                    
                    function Adicao($arg1, $arg2){
                                $resul = $arg1 + $arg2;
                                return $resul;
                            }     

                            $valor = Adicao(100,200); 
                            echo "<br>";

                            if("+" == $op){
                            Adicao(100,200);
                                    echo "<br>";
                                    echo $valor;
                            }
            
                echo "<h3>Operação: Subtração</h3>";
                    // Declarando operação
                    $op = "-";
                    
                    function Subtracao($arg1, $arg2){
                                $resul = $arg1 - $arg2;
                                return $resul;
                            }     
        
                            $valor = Subtracao(200,100); 
                            echo "<br>";
        
                            if("-" == $op){
                               Subtracao(200,100);
                                    echo $valor;
                            }
            
                    echo "<h3>Operação: Multiplicação</h3>";
                    // Declarando operação
                    $op = "*";
                    
                    function Multiplicacao($arg1, $arg2){
                                $resul = $arg1 * $arg2;
                                return $resul;
                            }     
        
                            $valor = Multiplicacao(20,10); 
                            echo "<br>";
        
                            if("*" == $op){
                               Multiplicacao(20,10);
                                    echo $valor;
                            }
                            
                            
                    echo "<h3>Operação: Divisao</h3>";
                    // Declarando operação
                    $op = "/";
                            
                    function Divisao($arg1, $arg2){
                                $resul = $arg1 / $arg2;
                                return $resul;
                            }     
                
                            $valor = Divisao(2000,10); 
                            echo "<br>";
                
                            if("/" == $op){
                               Divisao(2000,10);
                                    echo $valor;
                            }
    ?>    
</body>
</html>        