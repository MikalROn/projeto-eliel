<h1 class='m-3'> Emprestimos realizados </h1>

<table class="table m-3 table-hover">
    <tr>
        <th> Livro </th>
        <th> Usuario </th>
        <th> Funcionario </th>
        <th> Data de emprestimo </th>
        <th> Data de devolução </th>
    </tr>
    
    <?php
        $response = $conn->query("SELECT * FROM `emprestimo`");
        while($row = $response->fetch_object()){

            $livro_id_livro = $row->livro_id_livro;
            $usuario_id_usuario = $row->usuario_id_usuario;
            $funcionario_id_funcionario = $row->funcionario_id_funcionario;

            $livro = $conn->query(
                "SELECT titulo_livro FROM livro WHERE id_livro = $livro_id_livro "
            )->fetch_object()->titulo_livro;

            $usuario = $conn->query(
                "SELECT nome_usuario FROM usuario WHERE id_usuario = $usuario_id_usuario"
            )->fetch_object()->nome_usuario;

            $funcionario = $conn->query(
                "SELECT nome_funcionario FROM funcionario WHERE id_funcionario = $funcionario_id_funcionario"
            )->fetch_object()->nome_funcionario;

            echo "<tr>";

                echo "<td> $livro</td>";
                echo "<td> $usuario </td>";
                echo "<td> $funcionario </td>";
                echo "<td> $row->data_emprestimo</td>";
                echo "<td> $row->data_devolucao</td>";
                
                echo "<td>
                    <button class='btn btn-success'
                    onclick=\"location.href='?page=emprestimo-editar&id=$livro_id_livro'\">
                        Editar
                    </button>
                    
                    <button class='btn btn-danger'
                        onclick=
                        \"
                            let resposta = confirm('Tem certeza que deseja Remover ?');
                            if (resposta)
                            {
                                location.href = '?page=emprestimo-salvar&acao=remover&id=$livro_id_livro';
                            } else{false;}
                        \"
                    >
                        Remover
                    </button>
                
                    </td>";
            echo "</tr>";

        }
    ?>
</table>