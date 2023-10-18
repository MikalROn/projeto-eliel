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
                echo "<script>location.href='cadastrar-listar.php'</script>";
            } else{
                echo "<script>alert('Erro ao cadastrar categoria!')</script>";
                echo "<script>location.href='cadastrar-categoria.php'</script>";
            }
            break;
    }
?>