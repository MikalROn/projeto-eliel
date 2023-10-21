<h1> Lista de categorias </h1>

<table class="table m-3 table-hover">
    <tr>
        <th>Id Categoria</th>
        <th>Nome categoria</th>
        <th>Ações</th>
    </tr>
    
    <?php
        $response = $conn->query("SELECT * FROM `categoria`");
        while($row = $response->fetch_object()){
            $id_categoria = $row->id_categoria;
            $nome_categoria = $row->nome_categoria;

            echo "<tr>";
                echo "<td> $id_categoria</td>";
                echo "<td> $nome_categoria</td>";
               
                echo "<td>
                    <button class='btn btn-success' onclick=\"location.href='?page=categoria-editar&id=$id_categoria'\"> 
                        Editar
                    </button>
                    
                    <button class='btn btn-danger'
                        onclick=
                        \"
                            let resposta = confirm('Tem certeza que deseja Remover ?');
                            if (resposta)
                            {
                                location.href = '?page=categoria-salvar&acao=remover&id=$id_categoria';
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