<?php
    $acao = @$_REQUEST['acao'];
    switch ($acao) {
        case 'cadastrar':
            $nome_categoria = @$_REQUEST['nome_categoria'];
            $sql = "INSERT INTO categoria (nome_categoria) VALUES ('$nome_categoria')";
            $resultado = $conn->query($sql);
            if($resultado){
                echo "<script>alert('Categoria cadastrada com sucesso!')</script>";
                echo "<script>location.href='?page=categoria-listar'</script>";
            } else{
                echo "<script>alert('Erro ao cadastrar categoria!')</script>";
                echo "<script>location.href='?page=categoria-listar'</script>";
             }
           break;
        case 'remover':
            $id  = @$_REQUEST['id'];
            $sql = "DELETE FROM categoria WHERE id_categoria = $id";
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
            $id_categoria = @$_REQUEST['id_categoria'];
            $nome_categoria = @$_REQUEST['nome_categoria'];
            $sql = "UPDATE categoria SET nome_categoria ='$nome_categoria' WHERE id_categoria = '$id_categoria'";
            
            $resultado = $conn->query($sql);
            if ($resultado){
                alert("Edição de categoria concluioda com sucesso");
                redirect("?page=categoria-listar");
            } else {
                alert("Erro ao editar categoria");
                redirect("?page=categoria-listar");
            }

    }
?>