<!doctype html>
<!-- SEPARAR endereco com userid 
criar tela de login por ultimo
validacao cpf - func onchange

-->
<?php


    session_start();

?>

<?php
 require_once "datacenter.php"?>
<?php if (isset($_POST["usuario"])) {
    $usuario =  $_POST["usuario"];
    $senha   =  $_POST["psw"];

    $login = "SELECT * FROM usuario WHERE usuario = '{$usuario}' and psw = '{$senha}'";
    
    $acesso = mysqli_query($conecta,$login);
    if (!$acesso) {
        die ("Falha na consulta ao banco de dados");
    }


    $informacao = mysqli_fetch_assoc($acesso);
    if (empty($informacao)) {
        $mensagem = "Falha no login.";
        $_SESSION["user_ses"] = $informacao["userid"];
        
    } else  header("location:formulario2.php");
        
 } 
   
?>


<html lang="pt-br">
<head>
  <meta charset="utf-8">
    

  <title>User DB - TESTE</title>
  <meta name="description" content="">
  <meta name="author" content="">
    
</head>
    <script src="_scripts/bootstrap.js"></script>
    
    <script src="_scripts/jquery-3.2.1.min.js"></script>
<body>
  
    
    <form  action="login.php"method="POST">
                <label for="usuario">Login</label>
                <input type="text" name="usuario" id ="usuario" size="30" maxlength="30" required placeholder="Insira seu login.">
                <br>

                <label for="psw">Senha </label>
                <input type="password" name="psw" id ="psw" size="30" maxlength="250" required placeholder="Insira sua senha.">
                
        <input type="submit">
        <?php 
            if(isset($mensagem)) {
                
            
        ?>
        
        <p><?php echo $mensagem ?></p>
        <?php 
            }
        ?>
        </form>
</body>
</html>

