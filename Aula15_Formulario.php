<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 | Formulário</title>
        <script type="text/javascript">
            window.onload=()=> {
                //alert("Não sei o que estou fazendo");

                    // DOM: Document Object Model

                // Formas de declarar variáveis em JS  
                    // var (permite substituição de valores)
                    // let (não permite substituição de valores) 
                    // const
            
            // Aula 16 - Continuação (20/05)

                const nome = document.getElementById("nome");
                let bt = document.getElementById("bt");
                let email = document.getElementById("email");
                let frm = document.getElementsByTagName("form")[0]

                bt.onclick=()=>{
                    if( nome.value.length <= 5){
                        alert("Campo nome obrigatório");
                        nome.focus(); // focus: faz o cursor ficar piscando
                    }

                    if( email.value.length <= 10){ 
                        alert("Campo email obrigatório");
                        email.style.borderColor = "red";
                        email.focus();
                    }

                    frm.submit();
                }
            }
    
        </script>    
</head>
<body>
        <!-- Aula 15 - Formulário (10/05)
       
        // Criando um formulário HTML -->    
        <form action="processo.php" method="post" enctype="multipart/form-data"> 
                <!-- Action: Nome da página; 
                     Method: Como será enviado? Ex: GET, POST, PUT, DELETE
                     Enctype: Forma application/x-www-form-urlencoded - Padrão
                                 multipart/form-data - Sofisticada
                                 text/plain - Simples*/-->
                <div>
                    <label> Nome </label>
                    <input type="text" name="nome" id="nome">
                    <?php if( isset($_REQUEST["erro"])&& $_REQUEST["erro"] == "email"){
                        echo "<span style='color:red'>*</span>";
                    }?>

                    <br>
                </div>
                    <br>
                <div>
                
                <div>
                    <label> E-mail </label>
                    <input type="text" name="email" id="email">
                    <?php if( isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "email"){
                        echo "<span style='color:red'>*</span>";
                    }?>
                <br><br>
                </div>

                <div>
                    <label> Sexo </label>
                    <input type="radio" name="sexo" id="sexo" value="M"> Masculino
                    <input type="radio" name="sexo" id="sexo" value="F"> Feminino
                </div>
                <br><br>
                <input type="button" id= "bt" value="Enviar"  onclick="clicar()"/>
            
            </form>

            <a href="processo.php?id=001&valor=10.00&produto=Coca-cola"><br>Comprar</a>

</body>
</html>