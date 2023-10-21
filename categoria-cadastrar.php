<h1 class="m-3"> Cadastrar categoria </h1>

<form action="?page=categoria-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="cadastrar"/>
    <label> Nome categoria </label>
    <input type="text" name="nome_categoria" class="form-control">
    <div class="mt-3">  
        <button type="submit" value="Cadastrar" class="btn btn-success">
            Cadastrar
        </button>
    </div>
</form>