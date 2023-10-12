<?php
 // salvar livro
if (@$_SERVER['REQUEST_METHOD'] == 'POST') {
    $acao = $_POST['acao'];
    switch($acao) {
        case 'excluir':
            $id_livro = $_POST['id_livro'];
            $sql = "DELETE FROM livro WHERE id_livro = '$id_livro'";
            $resultado = mysqli_query($conn, $sql);
            if ($resultado) {
                echo '<script>alert("Livro excluido com sucesso")</script>';
            } else {
                echo '<script>alert("Erro ao excluir livro")</script>';
            }
            break;
        case 'edit':
            $id_livro = $_POST['id_livro'];
            $categoria = $_POST['categoria'];
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $editora = $_POST['editora'];
            $edicao = $_POST['edicao'];
            $sql = "UPDATE livro SET categoria_id_categoria = '$categoria', titulo_livro = '$titulo', autor_livro = '$autor', editora_livro = '$editora', edicao_livro = '$edicao' WHERE id_livro = '$id_livro'";
            $resultado = mysqli_query($conn, $sql);
            if ($resultado) {
                echo '<script>alert("Livro editado com sucesso")</script>';
            } else {
                echo '<script>alert("Erro ao editar livro")</script>';
            }
            break;
        case 'create':
            $categoria = $_POST['categoria'];
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $editora = $_POST['editora'];
            $edicao = $_POST['edicao'];
            $sql = "INSERT INTO livro (categoria_id_categoria, titulo_livro, autor_livro, editora_livro, edicao_livro) VALUES ('$categoria', '$titulo', '$autor', '$editora', '$edicao')";
            $resultado = mysqli_query($conn, $sql);
            if ($resultado) {
                echo '<script>alert("Livro cadastrado com sucesso")</script>';
            } else {
                echo '<script>alert("Erro ao cadastrar livro")</script>';
            }
            break;
    }
}
?>