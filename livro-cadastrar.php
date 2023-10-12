<h1> Cadastrar Livro </h1>

<form action="" method="POST">
    <label> Categoria </label>
    <select name="categoria">
        <?php
            $response = $conn->query("SELECT * FROM `categoria`");
            while($row = $response->fetch_assoc()){
                echo "<option value='{$row['id_categoria']}'>  {$row['nome_categoria']} </option>";
            }
      ?>
    </select>
    <label> Título  </label>
    <input type="text" name="titulo">
    <label> Autor </label>
    <input type="text" name="autor">
    <label> Editora </label>
    <input type="text" name="editora">
    <label> Edição </label>
    <input type="text" name="edicao">
    <input type="submit" value="cadastrar">
</form>

<?php
if (@$_SERVER['REQUEST_METHOD'] == "POST") {
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
}

?>