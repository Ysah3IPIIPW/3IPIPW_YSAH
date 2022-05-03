<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 | Operadores Lógicos</title>
</head>
<body>
    <?php
        // Operadores lógicos
            /* && (e) and
            || (ou) or 
            ! (not) xor */

            $n1 = 30;
            $n2 = 50;

                // Operador &&
                $logico = ($n1 >= $n2) && ($n1 == 30); 
                    echo "<strong>" . (int) $logico . "</strong></br>";  //0
            
                $logico = ($n1 != $n2) and ($n1 == 30); 
                    echo "<strong>" . (int) $logico . "</strong></br>";  //1

                // Operador ||
                $logico = ($n1 != $n2) || ($n1 == 30); 
                    echo "<strong>" . (int) $logico . "</strong></br>";  //1

                $logico = ($n1 != $n2) or ($n1 == 30); 
                    echo "<strong>" . (int) $logico . "</strong></br>";  //1

                    // ! not
                    $logico = ($n1 != $n2) || !($n1 == 30); 
                    echo "<strong>" . (int) $logico . "</strong></br>";  //1

                    $logico = !( ($n1 != $n2) or !($n1 == 30) ); 
                    echo "<strong>" . (int) $logico . "</strong></br>";  //0

                    $logico = ($n1 != $n2) || ($n1 == 30) && !(50 > 10); 
                    echo "<strong>" . (int) $logico . "</strong></br>";  //1
    ?>
</body>
</html>
