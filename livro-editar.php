<h1 class="m-3"> Editar livro </h1>

<?php
    $id = @$_REQUEST['id'];
    $sql = "SELECT * FROM livro WHERE id_livro = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
    
    $sql2 = "SELECT * FROM categoria WHERE id_categoria = $row->categoria_id_categoria";
    $resposta = $conn->query($sql2);
    $categoria = $resposta->fetch_object();
?>

<form action="?page=livro-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="editar"/>

    <input type="hidden" name="id_livro" value="<?php echo $id; ?>">

    <label> Categoria </label>
    <select name="categoria_id_categoria" class="form-control">
        <?php
            // Categoria selecionada previamente

            echo "<option value='$categoria->id_categoria' class='form-control'> $categoria->nome_categoria </option>";

            $sql = "SELECT * FROM categoria";
            $res = $conn ->query($sql);
            if ($res) {
                while ($row12 = $res -> fetch_object()) {
                    echo "<option value='$row12->id_categoria' class='form-control'> $row12->nome_categoria </option>";
                }
            } else {
                echo "<option value='NONE' class='form-control'> Erro ao buscar categorias </option>";
            }
        ?>
    </select>

    <label> Titulo </label>
    <input type="text" name="titulo_livro" class="form-control" value="<?php echo $row->titulo_livro; ?>">

    <label> Autor  </label>
    <input type="text" name="autor_livro" class="form-control" value="<?php echo $row->autor_livro; ?>">

    <label> Editora  </label>
    <input type="text" name="editora_livro" class="form-control" value="<?php echo $row->editora_livro; ?>">

    <label> Edição  </label>
    <input type="text" name="edicao_livro" class="form-control" value="<?php echo $row->edicao_livro; ?>">

    <label> Localidade  </label>
    <input type="text" name="localidade_livro" class="form-control" value="<?php echo $row->localidade_livro; ?>">

    <label> Ano do livro </label>
    <input type="text" name="ano_livro" class="form-control" value="<?php echo $row->ano_livro; ?>">

    <div class="mt-3">  
        <button type="submit" value="Editar" class="btn btn-success">
            Editar
        </button>
    </div>
</form>