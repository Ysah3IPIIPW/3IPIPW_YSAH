    <?php 

        // Atividade do dia 30/08 - PHP POO
        /*
        Exercício 02: A fim de representar empregados em uma firma, crie uma classe 
        chamada Empregado que inclui as três informações a seguir como atributos:

            - Primeiro nome;
            - Sobrenome;
            - Salário mensal.
        
        Obs: Sua classe deve ter um construtor que inicializa os três atributos. 
        Forneça um método set e get para cada atributo. Se o salário mensal não for positivo, 
        configure-o como 0.0. Crie um método que exibe o salário anual e um que dê 10% de aumento no salário.
        */

        echo "<h1>Atividade de PHP Orientado a Objeto</h1>";
        echo "<hr>";
        echo "<h3><u>Exercício 2</u></h3>";
        
        class Empregados { 

            private $nome; 
            private $sobrenome; 
            private $salario; 

            // Função construtor
            function __construct($pri, $sobre, $sal){
                $this->nome = $pri;
                $this->sobrenome = $sobre;

                if($sal <= 0) {
                    $this->salario = 0.0;
                } else {
                    $this->salario = $sal;
                }
            }

            // Método set
            public function __set($atributo, $value){
                $this->$atributo = $value;
            }

            // Método get
            public function __get($atributo){
                return $this->$atributo;
            }

            // Salário anual
            public function getSalarioAnual(){
                $anual = $this->salario * 12;
                return $anual;
            }

            // Salário com aumento de 10% 
            public function SalarioFinal(){
                return $this->salario + ( $this-> salario * 0.10 ) ;
            }

        } // Fim da classe

            $operario1 = new Empregados ("Roberto", "Lopes", 1500);

            echo "<p> Nome: {$operario1 -> nome}</p>";
            echo "<p> Sobrenome: {$operario1 -> sobrenome}</p>";
            echo "<p> Salário mensal: {$operario1 -> salario} reais</p>";
            echo "<p> Salário anual: {$operario1 -> getSalarioAnual()} reais</p>";
            echo "<p> Salário final: {$operario1 -> SalarioFinal()} reais</p>";
    ?>