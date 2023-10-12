<?php
// Salvar Usuarios

if (@$_SERVER['REQUEST_METHOD'] == 'POST'){
    $acao = $_POST['acao'];
    switch($acao) {
        case 'excluir':
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
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = "UPDATE usuario SET nome_usuario = '$nome', email_usuario = '$email', senha_usuario = '$senha' WHERE id_usuario = '$id_usuario'";
            break;    
        case 'create':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('$nome', '$email', '$senha')";
            $resultado = mysqli_query($conn, $sql);
            if ($resultado) {
                echo '<script>alert("Usuario cadastrado com sucesso")</script>';
            } else {
                echo '<script>alert("Erro ao cadastrar usuario")</script>';
            }
            break;
    
}

?>