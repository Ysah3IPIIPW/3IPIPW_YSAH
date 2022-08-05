<?php
    
    include("Aviao.php"); 
    //require("Aula18_POO.php");
    //require_once("Aula18_POO.php");

        // Objeto/instância
        $trem= new Veiculo();
            echo "Id: ". $trem->id= 005;
                echo "<br>";
                // echo $trem->id; // imprime o id do $trem na tela
            echo "Tipo: ". $trem->tipo= "Trem";
                echo "<br>";
            echo "Fabricante: ". $trem->fabricante= "New York Central Railroad";
                echo "<br>";
            echo "Modelo: ". $trem->modelo= "M-497";
                echo "<br>";
            echo "Ano de fabricação: ". $trem->ano_fab= "1966";
                echo "<br>";
            echo "Ano de modelo: ". $trem->ano_mod= "1964";
                echo "<br>";
            echo "Cor: ". $trem->cor="Preto";
                echo "<br>";
            echo "Combustível: ". $trem->combustivel="Petróleo";
                echo "<br>";
            $trem->Destino(": Standford", ": Texas");
            $trem->Consumo();

            echo "<hr>";
?>