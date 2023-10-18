<?php
if(@$_SERVER['REQUEST_METHOD'] == 'POST'){
    $acao = @$_POST['acao'];
    switch ($acao) {
        case 'cadastrar':
            $nome_categoria = @$_POST['nome-categoria'];
            $sql = "INSERT INTO categoria (nome_categoria) VALUES ('$nome_categoria')";
            $resultado = $conn->query($sql);
            if($resultado){
                echo "<script>alert('Categoria cadastrada com sucesso!')</script>";
                echo "<script>location.href='?page=cadastrar-listar.php'</script>";
            } else{
                echo "<script>alert('Erro ao cadastrar categoria!')</script>";
                echo "<script>location.href='?page=cadastrar-categoria.php'</script>";
            }
            break;
        case 'remover':
            $id_categoria   = @$_POST['id_categoria'];
            $sql = 'DELETE FROM categoria WHERE id_categoria = ' . $id_categoria;
            $resultado = $conn->query($sql);
            if ($resultado){
                alert("Categoria  removida com sucesso");
                redirect('?page=categoria-listar');
            } else {
                alert("Erro ao remover categoria");
                redirect('?page=categoria-listar');
            }
            break;
        case 'editar':
            $id_categoria = @$_POST['id_categorias'];
            $nome_categoria = @$_POST['nome-categoria'];
            $sql = "UPDATE categoria SET nome_categoria ='$nome_categoria'
             WHERE id_categoria = $id_categoria  $";
            
            $resultado = $conn->query($sql);
            if ($resultado){
                alert("Edição de categoria concluioda com sucesso");
                redirect("?page=categoria-listar");
            } else {
                alert("Erro ao editar categoria");
                redirect("?page=categoria-listar");
            }

    }
}
?>