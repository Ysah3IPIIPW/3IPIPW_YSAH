<?php 

// Aula 18 - POO (21/06)
        // Atividade: Através da classe Veiculo, crie trÊs objetos em arquivos separados com características diferentes
       
    include("Navio.php"); 

        // Objeto/instância
        $aviao= new Veiculo();
            echo "Id: ". $aviao->id= 004;
                echo "<br>";
                // echo $aviao->id; // imprime o id do $aviao na tela
            echo "Tipo: ". $aviao->tipo= "Avião";
                echo "<br>";
            echo "Fabricante: ". $aviao->fabricante= "Airbus";
                echo "<br>";
            echo "Modelo: ". $aviao->modelo= "A350 XWB";
                echo "<br>";
            echo "Ano de fabricação: ". $aviao->ano_fab= "2010";
                echo "<br>";
            echo "Ano de modelo: ". $aviao->ano_mod= "2012";
                echo "<br>";
            echo "Cor: ". $aviao->cor="Branco";
                echo "<br>";
            echo "Combustível: ". $aviao->combustivel="Querosene";
                echo "<br>";
            $aviao->Destino(": Brasil", ": Turquia");
            $aviao->Consumo();

            echo "<hr>";
?>