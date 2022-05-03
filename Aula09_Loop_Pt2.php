<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula09 | Loop Pt.2 Enquanto</title>
</head>
<body>
    <?php
    // Aula 09 - Loop Pt.2: Enquanto (29/03)
        
        // decrescente    
        for($i = 10; $i >= 1; $i--)
            echo "<br>$i<br>"; 

            echo "<hr>";

        // while (enquanto)
            // crescente
        $count = 1;
        while($count <= 10){
            echo "<br> $count <br>";
            // contador
            $count++; // $count = $count + 1;
        }
            //decrescente
        $i=10;    
        while($i >= 1){
            echo "<br>$i<br>";
            $i--;
        }

            echo "<hr>";

        $nome = "Emerson";
            while($nome != "fim"){
                echo "<br> $nome";
                // contador
                $nome = "fim";
            }

            echo "<hr>";

        // do while (repita)
        $i = 0;
        do {
            echo "<br>$i<br>";
            $i++;
        }while($i <= 5); 

            echo "<hr>";

        // Tabuada do 8
         
        echo "<br>Tabuada do 8 (com for)<br>";
        
        for ($i = 0; $i <= 10; $i++){
            $resul= 8*$i;
            echo "<br>8 x $i = $resul<br>";
        } 

        // for vs. while vs. do white
        

?>
</body>
</html>