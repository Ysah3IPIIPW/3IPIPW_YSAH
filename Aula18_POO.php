<?php
    // Aula 17 - POO (14/06)
        //Introdução a Programação Orientada a Objeto

            /*Obs: Lembre-se que o php não é uma linguagem
            totalmente tipada, isto é, não fixa somente um 
            valor determinado. Os conceitos de POO pode-se 
            comportar de uma maneira diferente de algumas
            linguagens (java; c#.; c etc.)*/

        /* O que é uma class?
            É uma estrutura ou esqueleto que abstrai um 
            conjunto de objetos contendo características similares. 
            Uma determinada classe define o comportamento de seus objetos 
            usando métodos e modificando seus estados como os atributos. */


        class Veiculo {
            // visibilidade
                // public (visível a todos)
                // protected (por permissão)
                // private (somente acessível para a classe)

        // Adicionar propriedades (variáveis)
            public $id;
            public $tipo;
            public $fabricante;
            public $modelo;
            public $ano_fab;
            public $ano_mod;
            public $cor;
            public $combustivel;
            // Construtor, inicializar propriedades ao criar um objeto

                function __construct($idC){
                    $this->id = $idC;
                }
   

            // Adicionar métodos (função)
            public function Destino ($partida, $chegada){
                echo "Destino" . $chegada . "<br> Origem" . $partida . "<br>";
            } 
            
            public function Consumo (){
                echo "Gasto por km";
            } 
        }  // fim da classe

        // Aula 18 - POO (21/06)
            // Criação de um objeto ou instância de uma classe (base)

            $carro= new Veiculo(1);
            /* Algumas linguagens utilizam o ponto final (.) para ter
            acesso aos campos/atributos e métodos, porém o php usa uma seta (->) 
            */
            // Acessar o campo $id
            echo "Id: ". $carro->id;
                echo "<br>";
                // echo $carro->id; // imprime o id do $carro na tela
            echo "Tipo: ". $carro->tipo= "Carro";
                echo "<br>";
            echo "Fabricante: ". $carro->fabricante= "Ford";
                echo "<br>";
            echo "Modelo: ". $carro->modelo= "Ranger";
                echo "<br>";
            echo "Ano de modelo: ". $carro->ano_fab= "2021";
                echo "<br>";
            echo "Ano de modelo: ". $carro->ano_mod= "2022";
                echo "<br>";
            echo "Cor: ". $carro->cor="Rosa";
                echo "<br>";
            echo "Combustível: ". $carro->combustivel="Diesel";
                echo "<br>";
            $carro->Destino(": Sorocaba", ": Paraná");
            $carro->Consumo();

            echo "<hr>";
?>