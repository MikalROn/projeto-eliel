<h1 class='m-3'> Lista de funcionarios </h1>

<table class="table m-3 table-hover">
    <tr>
        <th>Id Funcionario</th>
        <th>Nome </th>
        <th>Cpf </th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ação</th>
    </tr>
    
    <?php
        $response = $conn->query("SELECT * FROM funcionario");
        
        $qtd = $response->num_rows;
        if($qtd == 0){
            echo "<p class='m-4'><b>Não existem registros!</b></p>";
        } else {
            echo "<p class='m-4'>Encoutrou <b>$qtd</b> resultados.";
        }
        while($row = $response->fetch_object()){

            $id_funcionario = $row->id_funcionario;
            $nome_funcionario = $row->nome_funcionario;
            $cpf_funcionario = $row->cpf_funcionario;
            $email_funcionario = $row->email_funcionario;
            $telefone_funcionario = $row->fone_funcionario;

            echo "<tr>";

                echo "<td> $id_funcionario</td>";
                echo "<td> $nome_funcionario</td>";
                echo "<td> $cpf_funcionario</td>";
                echo "<td> $email_funcionario</td>";
                echo "<td> $telefone_funcionario</td>";
               
                echo "<td>
                    <button class='btn btn-success' 
                        onclick=\"location.href='?page=funcionario-editar&id=$id_funcionario'\"> 
                        Editar
                    </button>
                    
                    <button class='btn btn-danger'
                        onclick=
                        \"
                            let resposta = confirm('Tem certeza que deseja Remover ?');
                            if (resposta)
                            {
                                location.href = '?page=funcionario-salvar&acao=remover&id=$id_funcionario';
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