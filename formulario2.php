<?php require_once "datacenter.php" ?>

<!doctype html>
<?php
/*
    session_start();
    if(!isset($_SESSION["user_ses"])) {
        header("location:login.php");
    }
*/
    
    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $cep = $_POST["cep"];
        $estado = $_POST["estado"];
        $endereco = $_POST["endereco"];
        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];
        $telefone = $_POST["telefone"];
        $genero = $_POST["genero"];
            
        $inserirdb = "INSERT INTO dadosusuario (nome,sobrenome,cpf,rg,cep,estado,endereco,cidade,bairro,telefone,genero) ";
        $inserirdb .= "VALUES ('$nome','$sobrenome','$cpf','$rg','$cep','$estado','$endereco','$cidade','$bairro','$telefone','$genero')";
        
        $operacao_inserirdb = mysqli_query($conecta,$inserirdb);
        if(!$operacao_inserirdb) {
            die("ERRO FATAL");
        }
    }
    
?>

<html>
    
    <script src="_scripts/bootstrap.js"></script>
    
    <script src="_scripts/jquery-3.2.1.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
    <script type="text/javascript">
        function mascara(telefone){ 
            if(telefone.value.length == 0)
                telefone.value = '(' + telefone.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
            if(telefone.value.length == 3)
                telefone.value = telefone.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
 
            if(telefone.value.length == 9)
                telefone.value = telefone.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
            }
    </script>
    <head>
    
        <style>
            form {
                font-family: 'Lato', sans-serif;
                
            }
            input[type=text] {
                border-radius: 5px;
                outline: none;
                padding-left: 5p ;
                
            }
            input[type=tel] {
                border-radius: 5px;
                outline: none;
                
            }
            
            input[type=email] {
                border-radius: 5px;
                outline: none;
                
            }
            
            input[type=submit] {
                
                border: none;
                
                
        
        </style>
    
    </head>
    
    <body>
    
    
        <div class="container-fluid">
            
            
            <form  action="formulario2.php"method="POST">
                
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id ="nome" size="30" maxlength="250" required placeholder="Insira seu nome">
                <br>
                <label for="sobrenome">Sobrenome: </label>
                <input type="text" name="sobrenome" id ="sobrenome" size="30" maxlength="250" required placeholder="Insira seu nome">
                
                <label for="cpf">CPF: </label>
                <input type="text" name="cpf" id ="cpf" size="15" maxlength="11"  placeholder="Somente N&uacute;meros" pattern="[^0-9]*{1,11}" >
                <br>

                <label for="rg">RG: </label>
                <input type="text" name="rg" id ="rg" size="30" maxlength="250" required placeholder="Somente N&uacute;meros">

                 <label for="cep">CEP: (ex: 58000-100)</label>
                <input type="text" value="" name="cep" id="cep" maxlength="9">
                  <br>

                <label for="estado">Estado: </label>
                <input type="text" name="estado" id ="estado" value="" list="UF" size="2" maxlength="2" required>
                <br>            
                
                <label for="endereco">Endereço</label>
                <input type="text" value="" name="endereco" id="endereco">
                    <br> 
                
                <label for="cidade">Cidade</label>
                <input type="text" value="" name="cidade" id="cidade">
                <br>
                
                <label for="bairro">Bairro</label>
                <input type="text" value="" name="bairro" id="bairro">
                    <br>
                
                <label for="telefone">Telefone: </label>
                <input type="tel" name="telefone" id ="telefone" size="30" maxlength="250" required onkeypress="mascara(this)">
                <br>
<!--
                <label for="email">Email: </label>
                <input type="email" name="email" id ="email" size="30" maxlength="250" required>
                <br>
                -->
                
                <label for="genero">Genero</label>
                <input type="radio" name="genero" value="Masculino">Masculino
                <input type="radio" name="genero" value="Feminino">Feminino
                <input type="radio" name="genero" value="Outro">Outro
                
                
                <input type="submit" value="Salvar">
                
                <datalist id="UF">
                    <option value="">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </datalist>

                <datalist id="Gender">
                <option>Homem</option>
                <option>Mulher</option>
                <option>Outro</option>
                </datalist>
               


            </form>
    
        </div>
    </body>

        <script>
            $('#cep').blur(function(e) {
               var cep=$('#cep').val();
                console.log(cep);
                var url="http://viacep.com.br/ws/" + cep + "/json/";
                
                var validacep=/^[0-9]{5}-?[0-9]{3}$/;
                
                if(validacep.test(cep)) {
                    $('#mensagem').hide();
                pesquisarCEP(url);
                } else {
                    $('#mensagem').show();
                    $('#mensagem p').html("CEP Inválido");
                }
            });
            function pesquisarCEP(endereco) {
                $.ajax({
                    type:"GET",
                    url:endereco,
                    async:true
                }).done(function(data) {
                    //console.log(data);
                    $('#bairro').val(data.bairro);
                    $('#endereco').val(data.logradouro);
                    $('#cidade').val(data.localidade);
                    $('#estado').val(data.uf);
                }).fail(function() {
                    console.log("Cep incorreto");
                })
            }
        </script>
<?php mysqli_close($conecta) ?>
</html>


                    

        
