<h1> Lista de Livros </h1>

<table class="table m-3 table-hover">
    <tr>
        <th> Id Livro </th>
        <th> Categoria </th>
        <th> Titulo </th>
        <th> Autor </th>
        <th> Editora </th>
        <th> Edição </th>
        <th> Localidade </th>
        <th> Ano </th>
        <th> Ações </th>
    </tr>
    
    <?php
        $response = $conn->query("SELECT * FROM `livro`");
        while($row = $response->fetch_object()){
            $categoria_id_categoria = $row->categoria_id_categoria;
            $categoria = $conn->query(
                "SELECT nome_categoria FROM categoria WHERE id_categoria = $categoria_id_categoria "
            );
            echo "<tr>";

                echo "<td> $row->id_livro</td>";
                echo "<td> $categoria</td>";
                echo "<td> $row->titulo_livro</td>";
                echo "<td> $row->autor_livro</td>";
                echo "<td> $row->edicao_livro</td>";
                echo "<td> $row->localidade_livro</td>";
                echo "<td> $row->ano_livro</td>";
                
                echo "<td>
                    <button class='btn btn-success' 
                    onclick=\"location.href='?page=livro-editar&id=$id_livro'\"> 
                        Editar
                    </button>
                    
                    <button class='btn btn-danger'
                        onclick=
                        \"
                            let resposta = confirm('Tem certeza que deseja Remover ?');
                            if (resposta)
                            {
                                location.href = '?page=livro-salvar&acao=remover&id=$id_livro';
                            } 
                            else{false;}
                        \"
                    >
                        Remover
                    </button>
                
                    </td>";
            echo "</tr>";

        }
    ?>
</table>