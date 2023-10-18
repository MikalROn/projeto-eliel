<h1> Cadastrar emprestimmos</h1>

<form action="emprestimo-cadastrar.php" method="post">
    <label for=""> livro id</label>
    <select name="livro_id_livro" >
        <?php
        $sql = "SELECT * FROM livro";
        $resultado = mysqli_query($conn, $sql);
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo '<option value="'.$linha['id_livro'].'">'.$linha['titulo_livro'].'</option>';
        }
      ?>
    </select>
    <label for="">Usuario</label>
    <select name="usuario_id_usuario" >
        <?php 
        $sql = "SELECT * FROM usuario";
        $resultado = mysqli_query($conn, $sql);
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo '<option value="'.$linha['id_usuario'].'">'.$linha['nome_usuario'].'</option>';
        }
        ?>
    <label for="">
        Atendentes
    </label>
    <select name="atendente_id_atendente" >
        <?php 
        $sql = "SELECT * FROM atendente";
        $resultado = mysqli_query($conn, $sql);
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo '<option value="'.$linha['id_atendente'].'">'.$linha['nome_atendente'].'</option>';
        } ?>    
    </select>
    <label for="">
        Data
    </label>
    <input type="date" name="data_emprestimo" id="">
    <label for=""> data devolucão </label>
    <input type="date" name="data_devolucao">
    <input type="submit" value="Enviar"> 
</form>

<?php
if (@$_SEVER['REQUEST_METHOD'] == 'POST'){
    $livro_id_livro = @$_POST['livro_id_livro'];
    $usuario_id_usuario = @$_POST['usuario_id_usuario'];
    $atendente_id_atendente = @$_POST['atendente_id_atendente'];
    $data_emprestimo = @$_POST['data_emprestimo'];
    $data_devolucao = @$_POST['data_devolucao'];
    $sql = "INSERT INTO emprestimo (livro_id_livro, usuario_id_usuario, atendente_id_atendente, data_emprestimo, data_devolucao) VALUES ('$livro_id_livro', '$usuario_id_usuario', '$atendente_id_atendente', '$data_emprestimo', '$data_devolucao')";
    $resultado = mysqli_query($conn, $sql);
    if ($resultado) {
        echo '<script>alert("Emprestimo cadastrado com sucesso")</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar emprestimo")</script>';
    }
}
?>