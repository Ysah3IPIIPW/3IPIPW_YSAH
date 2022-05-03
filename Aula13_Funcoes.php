<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 | Funções Pt. 2</title>
</head>
<body>
    <?php
        // Aula 13 - Funções Pt.2 (29/04)
            function Soma($arg1, $arg2){
                $resul= $arg1 + $arg2;
                    // echo $resul; //300
                return $resul; // saída de um valor (variável/array)
                //return retorna o valor final para o código/memória principal
            }

            $valor = Soma(100,200); //Pegar o valor e continua
                echo Soma(20,100); //Localizado na memória principal
                echo "<br>";
                echo $valor;
            
            /*Usar a função para somar o valor retornado e usar o script global 
            para fazer o cálculo do número e se ele é par*/    

            function MsgNumero($arg){
                if ($arg != 0){
                    echo "Impar";
                }else{
                    echo "Par";
                }
            }

            $valores = Soma(300,45);//345
                
                $valor = $valores % 2;
                    echo "<br>";
                    MsgNumero($valor);
            
    ?>
</body>
</html>