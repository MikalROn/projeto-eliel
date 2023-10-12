<h1> Cadastrar categoria </h1>

<form action="" method="POST">
    <label> nome categoria </label>
    <input type="text" name="nome-categoria">
    <input type="submit" value="cadastrar">
</form>

<?php
if (@$_SERVER['REQUEST_METHOD'] == "POST") {
    $nome_categoria = $_POST['nome-categoria'];
    $sql = "INSERT INTO categoria (nome_categoria) VALUES ('$nome_categoria')";
    $resultado = mysqli_query($conn, $sql);
    if ($resultado) {
        echo '<script>alert("Categoria cadastrada com sucesso")</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar categoria")</script>';
    }
}

?>