  <?php 
  include 'header.php';
  ?>

    <h1  style="text-align: center;">Cadastro de Clientes</h1> 
    <div class="form-group">  
      <form mane="contact" action="cadastraCliente.php" method="post" class="form-group">
      <form>
    <div class="form-group">
      <label for="nomefantasia">Nome Fantasia</label>
      <input type="text" class="form-control" name="nomefantasia" placeholder="Digite o nome fantasia">
      
    </div>
    <div class="form-group">
      <label for="razaosocial">Razão Social</label>
      <input type="text" class="form-control"  name="razaosocial" placeholder="Digite a razão social">
      
    </div>
    <div class="form-group">
      <label for="tipocliente">Tipo</label>
    <select class="form-control form-control-lg" name="tipocliente">
    <option selected>Selecione o tipo de Cliente</option>
    <option name="fisica">Pessoa Física(CPF)</option>
    <option name="juridica">Pessoa Jurídica(CNPJ)</option>
    </select> 

    <div class="form-group">
      <label for="cpf/cnpj">CPF/CNPJ</label>
      <input type="text" class="form-control"  name="cpf_cnpj" placeholder="Digite o CPF ou CNPJ"> 
    </div>
    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" name="endereco" placeholder="Rua...">
    </div>
    <div class="form-group">
      <label for="complemento">Complemento</label>
      <input type="text" class="form-control" name="complemento" placeholder="Ex: Apartamento, Casa A, Quadra B">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade">
      </div>
        <div class="form-group col-md-4">
          <label for="estado">Estado</label>
          <select name="estado" class="form-control">
            <option selected>Selecione Seu Estado...</option>
            <option name='Acre'>Acre</option>
            <option name='Alagoas'>Alagoas</option>
            <option name='Amapa'>Amapá</option>
            <option name='Amazonas'>Amazonas</option>
            <option name='Bahia'>Bahia</option>
            <option name='Ceará'>Ceará</option>
            <option name='Espírito Santo'>Espírito Santo</option>
            <option name='Goiás'>Goiás</option>
            <option name='Maranhão'>Maranhão</option>
            <option name='Mato Grosso'>Mato Grosso</option>
            <option name='Mato Grosso do Sul'>Mato Grosso do Sul</option>
            <option name='Minas Gerais'>Minas Gerais</option>
            <option name='Pará'>Pará</option>
            <option name='Paraíba'>Paraíba</option>
            <option name='Paraná'>Paraná</option>
            <option name='Pernambuco'>Pernambuco</option>
            <option name='Piauí'>Piauí</option>
            <option name='Rio de Janeiro'>Rio de Janeiro</option>
            <option name='Rio Grande do Norte'>Rio Grande do Norte</option>
            <option name='Rio Grande do Sul'>Rio Grande do Sul</option>
            <option name='Rondônia'>Rondônia</option>
            <option name='Roraima'>Roraima</option>
            <option name='Santa Catarina'>Santa Catarina</option>
            <option name='São Paulo'>São Paulo</option>
            <option name='Sergipe'>Sergipe</option>
            <option name='Tocantins'>Tocantins</option>
            <option name='Distrito Federal'>Distrito Federal</option>
               
          </select>
      </div>
        <div class="form-group col-md-2">
          <label for="cep">CEP</label>
          <input type="text" class="form-control" name="cep">
        </div>
      </div>
    
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  <?php include 'footer.php'; ?>