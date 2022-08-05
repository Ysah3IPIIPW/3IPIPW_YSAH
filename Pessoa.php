<?php
    // Aula 19 - POO (02/08)
        /*Função construct: Crie uma classe com seus atributos, métodos, 
        visibilidade pública e construtor já inicializado com os valores padrões, 
        caso não seja modificado em sua instância*/

        class Pessoa {
            public $id;
            public $nome;
            public $rg;
            public $sexo;
            public $birth;
            public $etnia;
            public $nacionalidade;
            public $end;
            public $ocupacao;

            // Construtor, inicializar propriedades ao criar um objeto

                function __construct($idC, $nomeC, $rgC, $sexoC, $birthC, $etniaC, $endC, $ocupacaoC){
                    $this->id = $idC;
                    $this->nome = $nomeC;
                    $this->rg = $rgC;
                    $this->sexo = $sexoC;
                    $this->birth= $birthC;
                    $this->etnia= $etniaC;
                    $this->end= $endC;
                    $this->ocupacao= $ocupacaoC;
                }
   

        }  // fim da classe

        // Aula 18 - POO (21/06)
            // Criação de um objeto ou instância de uma classe (base)

            $pessoa= new Pessoa(1, "Iara", "12.234.342-9", "F", "04/02/1965", "Indígena", "Rua dos Tupinambás, nº 0 - Jardim das Flores", "Bióloga");
            
            echo "Id: ". $pessoa->id;
                echo "<br>";
                // echo $pessoa->id; // imprime o id do $pessoa na tela
            echo "Nome: ". $pessoa->nome;
                echo "<br>";
            echo "RG: ". $pessoa->rg;
                echo "<br>";
            echo "Sexo: ". $pessoa->sexo;
                echo "<br>";
            echo "Data de nascimento: ". $pessoa->birth;
                echo "<br>";
            echo "Etnia: ". $pessoa->etnia;
                echo "<br>";
            echo "Endereço: ". $pessoa->end;
                echo "<br>";
            echo "Ocupação: ". $pessoa->ocupacao;
                echo "<br>";

            echo "<hr>";
?>