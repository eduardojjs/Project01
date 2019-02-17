<!doctype html>
<html>
    
    <script src="_scripts/bootstrap.js"></script>
    <script src="_scripts/jquery-3.2.1.min.js"></script>
    <head>
    
    
    </head>
    
    <body>
    
    
        <div class="container-fluid" >
        <form  action="cadastro.php"method="POST">
            <label for="nome">Nome completo</label>
            <input type="text" name="nome" id ="nome" size="30" maxlength="250" required placeholder="Insira seu nome">
            
            <label for="RG">RG</label>
            <input type="text" name="RG" id ="RG" size="30" maxlength="250" required placeholder="Somente N&uacute;meros">
            
            <!-fazer lista de UF! -!>
            
            
            <label for="Estado">Estado</label>
            <input type="text" name="Estado" id ="Estado"  list="UF" size="30" maxlength="250" required>
            
            <label for="CPF">CPF</label>
            <input type="text" name="CPF" id ="CPF" size="30" maxlength="250" required placeholder="Somente N&uacute;meros">
            
            <label for="Endereco">Endere&ccedil;o</label>
            <input type="text" name="Endereco" id ="Endereco" size="30" maxlength="250" required>
            
            <label for="Telefone">Telefone</label>
            <input type="tel" name="Telefone" id ="Telefone" size="30" maxlength="250" required>
            
            <label for="Email">Email</label>
            <input type="email" name="Email" id ="Email" size="30" maxlength="250" required>
            

            <input type="submit" value="Salvar">
            
            <datalist id="UF">
                <option selected="" value="">Selecione o Estado (UF)</option>
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal">Distrito Federal</option>
                <option value="Espírito Santo">Espírito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Sergipe">Sergipe</option>
                <option value="Tocantins">Tocantins</option>
            </datalist>
            
        </form>
    
    
    </body>


</html>
