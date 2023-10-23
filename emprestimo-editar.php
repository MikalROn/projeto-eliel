<h1 class="m-3"> Editar Empréstimo </h1>

<?php
    $id_usuario = @$_REQUEST['usuario-id'];
    $id_livro = @$_REQUEST['livro-id'];

    $sql = "SELECT * FROM emprestimo WHERE livro_id_livro = $id_livro AND usuario_id_usuario =  $id_usuario";
    $result = $conn->query($sql);
    $row = $result->fetch_object();

    $data_emprestimo = $row->data_emprestimo;
    $data_devolucao = $row->data_devolucao;
?>

<form action="?page=emprestimo-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="editar"/>

    <input type="hidden" name="livro-id" value="<?php echo $id_livro; ?>">
    <input type="hidden" name="usuario-id" value="<?php echo $id_usuario; ?>">

    <label> Livro </label>
    <select name="livro_id_livro" class="form-control">
        <?php
            $selected_book_id = $row->livro_id_livro;
            $sql = "SELECT * FROM livro";
            $res = $conn->query($sql);
            if ($res) {
                while ($livro = $res -> fetch_object()) {
                    $selected = $livro->id_livro == $selected_book_id ? "selected" : "";
                    echo "<option value='$livro->id_livro'
                    class='form-control' $selected> $livro->titulo_livro </option>";
                }
            } else {
                echo "<option value='NONE' class='form-control'> Erro ao buscar livros </option>";
            }
        ?>
    </select>

    <label> Usuário </label>
    <select name="usuario_id_usuario" class="form-control">
        <?php
            $selected_user_id = $row->usuario_id_usuario;
            $sql = "SELECT * FROM usuario";
            $res = $conn ->query($sql);
            if ($res) {
                while ($usuario = $res -> fetch_object()) {
                    $selected = $usuario->id_usuario == $selected_user_id ? "selected" : "";
                    echo "<option value='$usuario->id_usuario'
                    class='form-control' $selected> $usuario->nome_usuario </option>";
                }
            } else {
                echo "<option value='NONE' class='form-control'> Erro ao buscar usuários </option>";
            }
        ?>
    </select>

    <label> Funcionário </label>
    <select name="funcionario_id_funcionario" class="form-control">
        <?php
            $selected_employee_id = $row->funcionario_id_funcionario;
            $sql = "SELECT * FROM funcionario";
            $res = $conn ->query($sql);
            if ($res) {
                while ($funcionario = $res -> fetch_object()) {
                    $selected = $funcionario->id_funcionario == $selected_employee_id ? "selected" : "";
                    echo "<option value='$funcionario->id_funcionario' 
                    class='form-control' $selected> $funcionario->nome_funcionario </option>";
                }
            } else {
                echo "<option value='NONE' class='form-control'> Erro ao buscar funcionários </option>";
            }
        ?>
    </select>

    <label> Data de Empréstimo </label>
    <input type="date" name="data_emprestimo" class="form-control"  value="<?php echo $data_emprestimo; ?>">

    <label> Data de Devolução </label>
    <input type="date" name="data_devolucao" class="form-control" value="<?php echo $data_devolucao; ?>">

    <div class="mt-3">
        <button type="submit" value="Editar" class="btn btn-success">
            Editar
        </button>
    </div>
</form>
