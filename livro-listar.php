<h1> Listar Livros </h1>

<ul>
    <?php
        $response = $conn->query("SELECT * FROM `livro`");
        while($row = $response->fetch_assoc()){
            echo "<li>  {$row['titulo_livro']} </li>";
        }
    ?>
</ul>
