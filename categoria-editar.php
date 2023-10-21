<h1 class="m-3"> Editar categoria </h1>


<?php
    $id = @$_REQUEST['id'];
    $sql = "SELECT * FROM categoria WHERE id_categoria = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
?>

<form action="?page=categoria-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="editar"/>
    <label> Nome categoria </label>
    <input type="hidden" name="id_categoria" value="<?php echo $id; ?>">
    <input type="text" name="nome_categoria" value="<?php echo $row->nome_categoria; ?>" class="form-control">
    <div class="mt-3">
        <button type="submit" class="btn btn-success">
            Editar
        </button>
    </div>
</form>