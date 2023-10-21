<h1 class="m-3"> Cadastrar Usuário </h1>

<form action="?page=usuario-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="cadastrar"/>

        <label> Nome </label>
        <input type="text" name="nome_usuario" class="form-control">

        <label>Cpf</label>
        <input type="text" name="cpf_usuario" id="" class="form-control">

        <label> Email </label>
        <input type="email" name="email_usuario"  class="form-control">

        <label> Data de nascimento </label>
        <input type="date" name="data_nasc_usuario"  class="form-control">

        <label> Telefone </label>
        <input type="text" name="fone_usuario"  class="form-control">
        

    <div class="mt-3">
        <button type="submit" value="Cadastrar" class="btn btn-success">
            Cadastrar
        </button>
    </div>
</form>