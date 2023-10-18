<h1> Lista de categorias </h1>

<table>
    <?php
        $response = $conn->query("SELECT * FROM `categoria`");
        while($row = $response->fetch_assoc()){
            echo "<li> {$row['nome_categoria']}</li>";
        }
    ?>
</table>