<h1 class='m-3'> Lista de usuario </h1>

<table class="table m-3 table-hover">
    <tr>
        <th>#</th>
        <th>Nome </th>
        <th>Cpf </th>
        <th>Email</th>
        <th>Data de Nascimento</th>
        <th>Telefone</th>
        <th>Ação</th>
    </tr>
    
    <?php
        $response = $conn->query("SELECT * FROM usuario");

        $qtd = $response->num_rows;
        if($qtd == 0){
            echo "<p class='m-4'><b>Não existem registros!</b></p>";
        } else {
            echo "<p class='m-4'>Encoutrou <b>$qtd</b> resultados.";
        }

        while($row = $response->fetch_object()){

            $id_usuario = $row->id_usuario;
            $nome_usuario = $row->nome_usuario;
            $cpf_usuario = $row->cpf_usuario;
            $email_usuario = $row->email_usuario;
            $data_nasc_usuario  = $row->data_nasc_usuario;
            $telefone_usuario = $row->fone_usuario;


            echo "<tr>";

                echo "<td> $id_usuario</td>";
                echo "<td> $nome_usuario</td>";
                echo "<td> $cpf_usuario</td>";
                echo "<td> $email_usuario</td>";
                echo "<td> $data_nasc_usuario</td>";
                echo "<td> $telefone_usuario</td>";
               
                echo "<td>
                    <button class='btn btn-success' 
                        onclick=\"location.href='?page=usuario-editar&id=$id_usuario'\"> 
                        Editar
                    </button>
                    
                    <button class='btn btn-danger'
                        onclick=
                        \"
                            let resposta = confirm('Tem certeza que deseja Remover ?');
                            if (resposta)
                            {
                                location.href = '?page=usuario-salvar&acao=remover&id=$id_usuario';
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