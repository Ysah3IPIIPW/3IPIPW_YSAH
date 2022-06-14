<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de PHP | Atividade 03/06</title>
    <script type="text/javascript">
            window.onload=()=> {

                const nome = document.getElementById("nome");
                let log = document.getElementById("log");
                let num = document.getElementById("num");
                let cep = document.getElementById("cep");
                let com = document.getElementById("com");
                let bai = document.getElementById("bai");
                let city = document.getElementById("city");
                let uf = document.getElementById("uf")
                // let frm = document.getElementsByTagName("form")[0]

                bt.onclick=()=>{
                    if( nome.value.length <= 5){
                        alert("Campo Nome obrigatório");
                        nome.style.borderColor = "red";
                        nome.focus(); 
                    }
                        frm.submit();

                    if( log.value.length <= 10){ 
                        alert("Campo Logradouro obrigatório");
                        log.style.borderColor = "red";
                        log.focus();
                    }
                        frm.submit();

                    if( num.value.length <= 10){ 
                        alert("Campo Número obrigatório");
                        num.style.borderColor = "red";
                        num.focus();
                    }
                        frm.submit();

                    if( cep.value.length <= 10){ 
                        alert("Campo CEP obrigatório");
                        cep.style.borderColor = "red";
                        cep.focus();
                    }

                    frm.submit();
                }
            }
    
        </script>    
</head>
        <style>

        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&family=Secular+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fredoka+One&family=Lobster&family=Secular+One&display=swap');

        body{
            margin: 100px 400px 100px 400px;
        }
        </style>
<body>
    <!-- Atividade avaliativa

               Desenvolver um script formulário em PHP que contenha os seguintes campos:
               - Nome;
               - Logradouro;
               - Número;
               - CEP;
               - Complemento;
               - Bairro;
               - Cidade;
               - Estado;  
               - Anexar imagem em png ou jpg;

               Obs: Os campos devem ter a validação e o arquivo upload seja colocado numa pasta
               chamada "Imagem".
    -->
        
    <form action="imgform.php" method= "POST" enctype= "multipart/form-data">
        <fieldset>
            <legend> Dados do usuário </legend><br>
                <div>
                    <label>Nome </label>
                    <input type="text" name="nome" id="nome" required>
                    <?php if( isset($_REQUEST["erro"])&& $_REQUEST["erro"] == "nome"){
                        echo "<span style='color:red'>*</span>";
                    }?>
                    <br><br>
                </div>
        
                <div>
                    <label>Logradouro </label>
                    <input type="text" name="log" id="log" required>
                    <?php if( isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "log"){
                        echo "<span style='color:red'>*</span>";
                    }?>
                </div><br>
                <div>    
                    <label>Número </label>
                    <input type="tex" size="1" name="num" id="num" required>
                    <?php if( isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "num"){
                        echo "<span style='color:red'>*</span>";
                    }?>
                </div><br>
                <div>
                    <label>CEP </label>
                    <input type="text" size="8" name="cep" id="cep" required>
                    <?php if( isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "cep"){
                        echo "<span style='color:red'>*</span>";
                    }?>
                <br><br>
                </div>
                
                <div>
                    <label> Complemento </label> <br>
                    <input type="checkbox" name="com1" id="com1" value="" >
                        <label for="com1"> Casa</label><br>
                    <input type="checkbox" name="com2" id="com2" value="">    
                        <label for="com2"> Apartamento</label><br>
                    <input type="checkbox" name="com3" id="com3" value="">    
                        <label for="com3"> Condomínio</label><br>   
                    <input type="checkbox" name="com4" id="com4" value="">    
                        <label for="com4"> Outro</label><br> 
                    <?php if( isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "com"){
                        echo "<span style='color:red'>*</span>";
                    }?>
                <br>
                </div>
                
                <div>
                    <label>Bairro </label>
                    <input type="text" name="bai" id="bai" required>
                    <?php if( isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "bai"){
                        echo "<span style='color:red'>*</span>";
                    }?>
                </div><br>
                <div>   
                    <label>Cidade </label>
                    <input type="text" name="city" id="city" required>
                    <?php if( isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "city"){
                        echo "<span style='color:red'>*</span>";
                    }?>
                    <label>UF</label>
                    <select name="ufs" id="ufs">
                        <option value="">  </option>
                        <option value="">AC</option>
                        <option value="">AL</option>
                        <option value="">AP</option>
                        <option value="">AM</option>
                        <option value="">BA</option>
                        <option value="">CE</option>
                        <option value="">DF</option>
                        <option value="">ES</option>
                        <option value="">GO</option>
                        <option value="">MA</option>
                        <option value="">MT</option>
                        <option value="">MS</option>
                        <option value="">MG</option>
                        <option value="">PA</option>
                        <option value="">PB</option>
                        <option value="">PR</option>
                        <option value="">PE</option>
                        <option value="">PI</option>
                        <option value="">RJ</option>
                        <option value="">RN</option>
                        <option value="">RS</option>
                        <option value="">RO</option>
                        <option value="">RR</option>
                        <option value="">SC</option>
                        <option value="">SP</option>
                        <option value="">SE</option>
                        <option value="">TO</option>
                    </select>
                    <?php if( isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "uf" ){
                        echo "<span style='color:red'>*</span>";
                    }?>
                <br>
                </div><br>
                <div>
                    <label>Anexar imagem</label>
                    <input type="file" name= "arq" id=""/>
                </div>
                <br>
                <div>
                    <input type="submit" value="Enviar"/>
                </div>           
            </fieldset>
    </form>
    
</body>
</html>