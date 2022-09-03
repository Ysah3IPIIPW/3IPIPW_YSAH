<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 | PHP POO</title>
</head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap');
       
       p{
            font-family: Montserrat;
            font-size: 18px;
        }
    </style> 
    
        <?php 
        
        // Atividade do dia 30/08 - PHP POO

        /* Exercício 01: Crie uma classe chamada Invoice que possa ser utilizado por uma loja de 
        suprimentos de informática para representar uma fatura de um item vendido na loja. Uma 
        fatura deve incluir as seguintes informações como atributos
        
            - Número do item faturado;
            - Descrição do item;
            - Quantidade comprada do item;
            - Preço unitário do item.
        
            Obs: Sua classe deve ter um construtor que inicialize os quatro atributos. Se a quantidade 
            não for positiva, ela deve ser configurada como 0. Se o preço por item não for positivo ele 
            deve ser configurado como 0.0. Forneça um método set e um método get para cada variável de instância. 
            Além disso, forneça um método chamado getInvoiceAmount que calcula o valor da fatura (isso é, 
            multiplica a quantidade pelo preço por item) e depois retorna o valor.
        */

            // Passos para criar uma classe completa
            /*  1. Criar uma classe;
                2. Criar os atributos;
                3. Criar função construct com os argumentos entre parênteses;
                4. Fazer a consulta dos atributos;
                5. Criar condições if e else;
                6. Aplicar o método set para atribuir valor a variável;
                (quando a visibilidade dos atributos for private);
                7. Aplicar o método get para ler e mostrar o valor da variável;
                8. Aplicar o return para trazer o valor de volta;
                9. Criar um método que calcule o valor da fatura;
                10. Retornar valor por meio do return.
            */

            // Passos para criar um objeto
            /*
                1. Criar uma variável e atribuir um novo objeto para a classe
                com os valores dos atributos entre parênteses;
                2. Imprimir os valores na tela;

            */

            echo "<h1>Atividade de PHP Orientado a Objeto</h1>";
            echo "<hr>";
            echo "<h2><u>Exercício 1</u></h2>";

            //1
            class Invoice {
                //2
                private $numfatura;
                private $descitem;
                private $qtditem;
                private $preco;
                
                //3
                public function __construct($par1, $par2, $par3, $par4){
                    //4
                    $this->numfatura=$par1;
                    $this->descitem=$par2;
                    //5
                    if($par3 <= 0){
                        $this->qtditem=0;
                    } else{
                            $this->qtditem = $par3;
                        }

                        if($par4 <= 0){ 
                            $this->preco=0.0;
                    } else{
                            $this->preco=$par4;
                        }
                }

                    //6
                    public function __set($atributo, $value){
                        $this->$atributo = $value;
                    }

                    //7
                    public function __get($atributo){
                    //8    
                        return $this->$atributo;
                    }

                    //9
                    public function getInvoiceAmount(){
                        //10
                        return ($this->preco * $this->qtditem);
                    } 
                }
                
                // Criando um objeto
                //1
                $informatica = new Invoice(19, "Monitor", 20, 499.99);
                //2 
                    echo "<h3>Nº da fatura: {$informatica->numfatura}</h3>";
                    echo "<h3>Descrição do item: {$informatica->descitem}</h3>";
                    echo "<h3>Quantidade: {$informatica->qtditem}</h3>";
                    echo "<h3>Preço unitário: {$informatica->preco}</h3>";
                    echo "<h3>Total: {$informatica->getInvoiceAmount()}</h3>";
                


        ?>
    </body>
</html>        

