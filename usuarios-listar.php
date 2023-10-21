<h1> Listar Usuários </h1> 

<table class="table table-hover">
    <thead>
        <tr>
            <th> Id </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Data Nascimento</th>
        </tr>

    </thead>
<tbody>
    <?php
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);
        if ($result) {
            while ($row = $result->fetch_object()) {
                echo "<tr>";
                    echo "<td>". $row->id_usuario ."</td>";
                    echo "<td>". $row->nome_usuario ."</td>";
                    echo "<td>". $row->cpf_usuario ."</td>";
                    echo "<td>". $row->email_usuario ."</td>";
                    echo "<td>". $row->data_nasc_usuario ."</td>";
                    echo "<td>". $row->fone_usuario ."</td>";
                echo "</tr>";
            }
        } else {
            echo "<p class='alert alert-danger'> Lançamentos não encontrados </p> ";
        }
    ?>
</tbody>
</table>