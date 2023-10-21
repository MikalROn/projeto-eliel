<h1 class="m-3"> Cadastrar Funcionario </h1>

<form action="?page=funcionario-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="cadastrar"/>

    <label>Nome </label>
    <input type="text" name="nome_funcionario" class="form-control">

    <label> Cpf </label>
    <input type="text" name="cpf_funcionario" class="form-control">

    <label> Email </label>
    <input type="text" name="email_funcionario" class="form-control">

    <label> Telefone </label>
    <input type="text" name="fone_funcionario" class="form-control">

    <div class="mt-3">
        <button type="submit" value="Cadastrar" class="btn btn-success">
            Cadastrar
        </button>
    </div>
</form>