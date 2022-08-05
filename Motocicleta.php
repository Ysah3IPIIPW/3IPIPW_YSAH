<?php 
    // Aula 18 - POO (21/06)
        // include e require


    include("Aula18_POO.php");          
    /*include_once("Aula18_POO.php");
    require("Aula18_POO.php");
    require_once("Aula18_POO.php");*/

        // Objeto/instância
        $moto= new Veiculo();
            echo "Id: ". $moto->id= 002;
                echo "<br>";
                // echo $moto->id; // imprime o id do $moto na tela
            echo "Tipo: ". $moto->tipo= "Moto";
                echo "<br>";
            echo "Fabricante: ". $moto->fabricante= "Yamaha";
                echo "<br>";
            echo "Modelo: ". $moto->modelo= "MT600";
                echo "<br>";
            echo "Ano de fabricação: ". $moto->ano_fab= "2021";
                echo "<br>";
            echo "Ano de modelo: ". $moto->ano_mod= "2022";
                echo "<br>";
            echo "Cor: ". $moto->cor="Preto";
                echo "<br>";
            echo "Combustível: ". $moto->combustivel="Flex";
                echo "<br>";
            $moto->Destino(": Sorocaba", ": Adrianopolis");
            $moto->Consumo();

            echo "<hr>";
    
?>    