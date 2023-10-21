<h1 class="m-3"> Editar Funcionario </h1>


<?php
    $id = @$_REQUEST['id'];
    $sql = "SELECT * FROM funcionario WHERE id_funcionario = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
?>

<form action="?page=funcionario-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="editar"/>

    <input type="hidden" name="id_funcionario" value="<?php echo $id; ?>">

    <label> Nome  </label>
    <input type="text" name="nome_funcionario" value="<?php echo $row->nome_funcionario; ?>" class="form-control">

    <label> Cpf </label>
    <input type="text" name="cpf_funcionario" value="<?php echo $row->cpf_funcionario; ?>" class="form-control">

    <label> Email </label>
    <input type="text" name="email_funcionario" value="<?php echo $row->email_funcionario; ?>"class="form-control">

    <label> Telefone </label>
    <input type="text" name="fone_funcionario"value="<?php echo $row->fone_funcionario; ?>" class="form-control">

    <div class="mt-3">
        <button type="submit" class="btn btn-success">
            Editar
        </button>
    </div>
</form>