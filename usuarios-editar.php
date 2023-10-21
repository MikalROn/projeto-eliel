<h1 class="m-3"> Editar Usuario </h1>


<?php
    $id = @$_REQUEST['id'];
    $sql = "SELECT * FROM usuario WHERE id_usuario = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
?>

<form action="?page=usuario-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="editar"/>

    <input type="hidden" name="id_usuario" value="<?php echo $id; ?>">

    <label> Nome  </label>
    <input type="text" name="nome_usuario" value="<?php echo $row->nome_usuario; ?>" class="form-control">

    <label> Cpf </label>
    <input type="text" name="cpf_usuario" value="<?php echo $row->cpf_usuario; ?>" class="form-control">

    <label> Data de Nascimento </label>
    <input type="date" name="data_nasc_usuario" value="<?php echo $row->data_nasc_usuario; ?>"class="form-control">

    
    <label> Email </label>
    <input type="text" name="email_usuario" value="<?php echo $row->email_usuario; ?>"class="form-control">

    <label> Telefone </label>
    <input type="text" name="fone_usuario"value="<?php echo $row->fone_usuario; ?>" class="form-control">

    <div class="mt-3">
        <button type="submit" class="btn btn-success">
            Editar
        </button>
    </div>
</form>