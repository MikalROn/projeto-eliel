<?php
// Salvar Usuarios

if (@$_SERVER['REQUEST_METHOD'] == 'POST'){
    $acao = $_POST['acao'];
    switch($acao) {
        case 'remover':
            $id_usuario = $_POST['id_usuario'];
            $sql = "DELETE FROM usuario WHERE id_usuario = '$id_usuario'";
            $resultado = mysqli_query($conn, $sql);
            if ($resultado) {
                echo '<script>alert("Usuario excluido com sucesso")</script>';
            } else {
                echo '<script>alert("Erro ao excluir usuario")</script>';
            }
            break;
        case 'edit':
            $id_usuario = $_POST['id_usuario'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf_usuario'];
            $email = $_POST['email_usuario'];
            $data_nasc = $_POST['data_nasc_usuario'];
            $fone_usuario = $_POST['fone_usuario'];
            $sql = "UPDATE usuario 
            SET nome_usuario = '$nome',
                cpf_usuario = '$cpf',
                email_usuario = '$email',
                data_nasc_usuario = '$data_nasc_usuario',
                fone_usuario = '$fone_usuario' WHERE id_usuario = '$id_usuario'";
            break;    
        case 'cadastrar':
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf_usuario'];
            $email = $_POST['email_usuario'];
            $data_nasc = $_POST['data_nasc_usuario'];
            $fone_usuario = $_POST['fone_usuario'];
            $sql = "INSERT INTO usuario 
            (nome_usuario, email_usuario, cpf_usuario, data_nasc_usuario, fone_usuario)
             VALUES ('$nome', '$email', '$cpf', '$data_nasc' '$fone_usuario')";
            $resultado = mysqli_query($conn, $sql);
            if ($resultado) {
                echo '<script>alert("Usuario cadastrado com sucesso")</script>';
            } else {
                echo '<script>alert("Erro ao cadastrar usuario")</script>';
            }
            break;
    
}

?>