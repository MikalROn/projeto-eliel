<h1> Emprestimos realizados </h1>

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
            );
            $usuario = $conn->query(
                "SELECT nome_usuario FROM usuario WHERE id_usuario = $usuario_id_usuario"
            );
            $funcionario = $conn->query(
                "SELECT funiconario FROM funiconario WHERE id_funiconario = $funiconario_id_funiconario"
            );

            echo "<tr>";

                echo "<td> $livro</td>";
                echo "<td> $usuario </td>";
                echo "<td> $funcionario </td>";
                echo "<td> $row->data_emprestimo</td>";
                echo "<td> $row->data_devolucao</td>";
                
                echo "<td>
                    <button class='btn btn-success'
                    onclick=\"location.href='?page=emprestimo-editar&id=$id_emprestimo'\"> 
                        Editar
                    </button>
                    
                    <button class='btn btn-danger'
                        onclick=
                        \"
                            let resposta = confirm('Tem certeza que deseja Remover ?');
                            if (resposta)
                            {
                                location.href = '?page=emprestimo-salvar&acao=remover&id=$id_emprestimo';
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