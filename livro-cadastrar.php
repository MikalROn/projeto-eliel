<h1 class="m-3"> Cadastrar livro </h1>

<form action="?page=livro-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="cadastrar"/>

    <label> Categoria </label>
    <select name="categoria_id_categoria" class="form-control">
        <?php
            $sql = "SELECT * FROM categoria";
            $res = $conn ->query($sql);
            if ($res) {
                while ($row = $res -> fetch_object()) {
                    echo "<option value='$row->id_categoria' class='form-control'> $row->nome_categoria </option>";
                }
            } else {
                echo "<option value='NONE' class='form-control'> Erro ao buscar categorias </option>";
            }
        ?>
    </select>

    <label> Titulo </label>
    <input type="text" name="titulo_livro" class="form-control">

    <label> Autor  </label>
    <input type="text" name="autor_livro" class="form-control">

    <label> Editora  </label>
    <input type="text" name="editora_livro" class="form-control">

    <label> Edição  </label>
    <input type="text" name="edicao_livro" class="form-control">

    <label> Localidade  </label>
    <input type="text" name="localidade_livro" class="form-control">

    <label> Ano do livro </label>
    <input type="text" name="ano_livro" class="form-control">

    <div class="mt-3">
        <button type="submit" value="Cadastrar" class="btn btn-success">
            Cadastrar
        </button>
    </div>
</form>