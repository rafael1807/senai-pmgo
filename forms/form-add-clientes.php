<form action="../database/clientes/create.php" method="post" class="row">
    <div class="input-field col s12">        
        <input type="text" id="formNmCompleto" name="formNmCompleto">
        <label for="formNmCompleto">Nome Completo</label>
    </div>

    <div class="input-field col s12">
        <input type="date" name="formDn" id="formDn">
        <label for="FormDn">Data de nascimento</label>
    </div>

    <div class="input-field col s12">
        <input type="tel" name="formTelefone" id="formTelefone" placeholder="(xx) xxxxx-xxxx">
        <label for="formTelefone">Telefone</label>
    </div>

    <div class="input-field col s12">
        <input type="tel" name="formCelular" id="formCelular" placeholder="(xx) xxxxx-xxxx">
        <label for="formCelular">Celular</label>
    </div>

    <div class="input-field col s12">
        <input type="text" name="formSexo" id="formSexo" placeholder="Digite 'Masculino' ou 'Feminino'"/>
        <label for="formSexo">Sexo</label>                    
    </div>

    <div class="input-field col s12">
        <input type="text" name="formRg" id="formRg" maxlength="20" placeholder="insira seu RG">
        <label for="formRg">RG</label>
    </div>

    <div class="input-field col s12">
        <input type="text" name="formCpf" id="formCpf" maxlength="11" placeholder="insira seu CPF (somente números)">
        <label for="formCpf">CPF</label>
    </div>

    <div class="input-field col s12">
        <input type="text" name="formEndereco" id="formEndereco" maxlength="255">
        <label for="formEndereco">Endereço</label>
    </div>
    <div class="input-field col s12">
        <input type="email" name="formEmail" id="formEmail" placeholder="email@example.com">
        <label for="formEmail">E-mail</label>
    </div>

    <div class="input-field col s12"> 
        <input type="file" id="formFoto" name="formFoto" accept="image/*" />
    </div>

    <div class="input-field col s12">
        <input type="submit" value="cadastrar" class="btn" name="enviar_dados">
        <input type="reset" value="limpar" class="btn red">
    </div>  
    
   
</form>