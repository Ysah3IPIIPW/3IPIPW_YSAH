<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 | Funções</title>
</head>
<body>
    <?php
        // Aula 12 - Funções (26/04)
            /*
                1- Para que serve a Função?
                R: Pequena parte de um código, independente do código principal

                2- Como declara uma Função?
                R: function Nomedafuncao(){
                    echo "Imprime na tela";
                }
                    Nomedafuncao()

                3- Quais são os tipos de Funções?
                R: Funções pré-definidas e Funções de Usuário
            */

            //Exemplo 1: Função nomeada sem argumento
            
            MensagemUsuario();
            
            function MensagemUsuario(){
                echo "Será que estou entendendo?<br>";
            }
                //Chamar uma Função que está na memória
                MensagemUsuario();
                    echo "<br><hr><br>";


            //Exemplo 2: Função nomeada com argumento
            
            function Saudacao($nome){ //$nome é o argumento
                echo "Seja bem-vindo, $nome";
            }
                //Chamar uma Função que está na memória
                $nome_x = "Emerson";
                Saudacao($nome_x);
                    echo "<br><br>";

                $x = "Paulo";
                Saudacao($x); 
                    echo "<br><br>";

                $v = "Ysah Santos";
                Saudacao($v);
                    echo "<br><br>";
                
                Saudacao("Sorocaba"); //Altera automaticamente
                echo "<br><hr><br>";

                    //Com mais de um argumento
                    function Adicao($arg1, $arg2){
                        $n1 = $arg1;
                        $n2 = $arg2;
                        $resul = $n1 + $n2;
                            echo "Valor: $resul";
                    }
                    
                            //Chamar uma Função que está na memória
                            $numero1=10; 
                            $numero2= 11;
                            Adicao($numero1, $numero2);
                                echo "<br><br><br>";
                               
                    $numeros=[10,4,50,10,5];

                    function CalArray($array){
                        $soma = 0;
                        foreach($array as $values){
                            $soma += $values;
                        }
                        echo $soma;
                    }

                        CalArray($numeros);
                        echo "<br><br>";

                    $num=[10,4,50,10,5, 30, 50, 60];
                        echo "<br>";
                        CalArray($num);    
    ?>
</body>
</html>