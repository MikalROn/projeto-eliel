<h1 class="m-3"> Cadastrar Empréstimo </h1>

<form action="?page=emprestimo-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="cadastrar"/>

    <label> Livro </label>
    <select name="livro_id_livro" class="form-control">
        <?php
            $sql = "SELECT * FROM livro";
            $res = $conn ->query($sql);
            if ($res) {
                while ($row = $res -> fetch_object()) {
                    echo "<option value='$row->id_livro' class='form-control'> $row->titulo_livro </option>";
                }
            } else {
                echo "<option value='NONE' class='form-control'> Erro ao buscar livros </option>";
            }
        ?>
    </select>

    <label> Usuário </label>
    <select name="usuario_id_usuario" class="form-control">
        <?php
            $sql = "SELECT * FROM usuario";
            $res = $conn ->query($sql);
            if ($res) {
                while ($row = $res -> fetch_object()) {
                    echo "<option value='$row->id_usuario' class='form-control'> $row->nome_usuario </option>";
                }
            } else {
                echo "<option value='NONE' class='form-control'> Erro ao buscar usuários </option>";
            }
        ?>
    </select>

    <label> Funcionário </label>
    <select name="funcionario_id_funcionario" class="form-control">
        <?php
            $sql = "SELECT * FROM funcionario";
            $res = $conn ->query($sql);
            if ($res) {
                while ($row = $res -> fetch_object()) {
                    echo "<option value='$row->id_funcionario' class='form-control'> $row->nome_funcionario </option>";
                }
            } else {
                echo "<option value='NONE' class='form-control'> Erro ao buscar funcionários </option>";
            }
        ?>
    </select>

    <label> Data de Empréstimo </label>
    <input type="date" name="data_emprestimo" class="form-control">

    <label> Data de Devolução </label>
    <input type="date" name="data_devolucao" class="form-control">

    <div class="mt-3">
        <button type="submit" value="Cadastrar" class="btn btn-success">
            Cadastrar
        </button>
    </div>
</form>
