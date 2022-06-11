<?php
    // Arquivo da Aula15_Formulário

        // Variáveis super globais GET e POST
        // $_GET[""];
            /*$nome = $_GET["nome"];
            echo $nome;
                echo "<hr>";
            $email = $_GET["email"];
            echo $email;

            Sem variável
            echo $_GET["nome"];
            echo "<br>";
            echo $_GET["email"];

            echo "<br>";
            print_r($_GET);*/

        // POST
        
        // $nome=$_POST["nome"];
        // $email=$_POST["email"];
        // $sexo=$_POST["sexo"];

        // echo "$nome, $email, $sexo";

        // echo "<br>";
        // print_r($_POST);


        // Aula 16 - Formulário Pt.2 (13/05)

        /*$nome = $_POST["nome"];
          $email = $_POST["email"];
          $sexo = $_POST["sexo"];

            echo "$nome, $email, $sexo";
            echo "<br>";

                print_r($_GET);
                print_r($_POST); */

        // REQUEST

        /* print_r($_REQUEST);

        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $sexo = $_REQUEST["sexo"];

            echo "$nome, $email e $sexo";
            echo "<br>";

            echo "Id: " . $_REQUEST["id"];
            echo "<br>Produto: " . $_REQUEST["produto"];
            echo "<br>Valor: " . NUMBER_FORMAT($_REQUEST["valor"], 2, ",","."); */

        // Validação por back-end
        
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $sexo = $_REQUEST["sexo"];

        /* if(strlen($nome) <= 5){
            echo "Campo Nome Obrigatório!";
        }*/

        if(empty($nome)){
            echo "Campo Nome Obrigatório!";
            header("Location: Aula15_Formulario.php?erro=nome");
        }
               
        if(strlen($email)<=8){
            header("Location: Aula15_Formulario.php?erro=email");
        }

                
?>