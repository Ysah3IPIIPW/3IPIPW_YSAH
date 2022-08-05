<?php 

    // Aula 18 - POO (21/06)
            // Atividade: Através da classe Veiculo, crie trÊs objetos em arquivos separados com características diferentes
    
        
        include("Motocicleta.php");          
    
            // Objeto/instância
            $navio= new Veiculo();
                echo "Id: ". $navio->id= 003;
                    echo "<br>";
                    // echo $navio->id; // imprime o id do $navio na tela
                echo "Tipo: ". $navio->tipo= "Navio";
                    echo "<br>";
                echo "Fabricante: ". $navio->fabricante= "Titanic3D";
                    echo "<br>";
                echo "Modelo: ". $navio->modelo= "Titanic Ship 3D";
                    echo "<br>";
                echo "Ano de fabricação: ". $navio->ano_fab= "1997";
                    echo "<br>";
                echo "Ano de modelo: ". $navio->ano_mod= "2012";
                    echo "<br>";
                echo "Cor: ". $navio->cor="Azul";
                    echo "<br>";
                echo "Combustível: ". $navio->combustivel="Gasolina";
                    echo "<br>";
                $navio->Destino(": Santos", ": Califórnia");
                $navio->Consumo();

                echo "<hr>";
    ?>
