<?php
    $acao = @$_REQUEST['acao'];
    switch ($acao) {
        case 'cadastrar':
            
            $categoria_id_categoria = @$_REQUEST['categoria_id_categoria'];
            $titulo_livro = @$_REQUEST['titulo_livro'];
            $autor_livro = @$_REQUEST['autor_livro'];
            $editora_livro = @$_REQUEST['editora_livro'];
            $edicao_livro = @$_REQUEST['edicao_livro'];
            $localidade_livro = @$_REQUEST['localidade_livro'];
            $ano_livro = @$_REQUEST['ano_livro'];


            $sql = "INSERT INTO livro 
            (categoria_id_categoria, titulo_livro, autor_livro,
            	editora_livro,	edicao_livro,	localidade_livro,	ano_livro)
            VALUES ('$categoria_id_categoria', '$titulo_livro', '$autor_livro',
             '$editora_livro', '$edicao_livro', '$localidade_livro', '$ano_livro')";

            $resultado = $conn->query($sql);

            if($resultado){
                alert("Cadastrado com sucesso !");
                redirect('?page=livro-listar');
            } else{
                alert("Erro ao cadastrar. ");
                redirect('?page=livro-listar');
             }
           break;

        case 'remover':
            $id = @$_REQUEST['id'];
            $sql = "DELETE FROM livro WHERE id_livro = $id";
            $resultado = $conn->query($sql);

            if ($resultado){
                alert("Removida com sucesso ! ");
                redirect('?page=livro-listar');
            } else {
                alert("Erro ao remover ");
                redirect('?page=livro-listar');
            }
            break;

        case 'editar':
            $id_livro = @$_REQUEST['id_livro'];
            $categoria_id_categoria = @$_REQUEST['categoria_id_categoria'];
            $titulo_livro = @$_REQUEST['titulo_livro'];
            $autor_livro = @$_REQUEST['autor_livro'];
            $editora_livro = @$_REQUEST['editora_livro'];
            $edicao_livro = @$_REQUEST['edicao_livro'];
            $localidade_livro = @$_REQUEST['localidade_livro'];
            $ano_livro = @$_REQUEST['ano_livro'];
            
            $sql = "UPDATE livro SET
            categoria_id_categoria = '$categoria_id_categoria',
            titulo_livro = '$titulo_livro',
            autor_livro = '$autor_livro',
            editora_livro = '$editora_livro',
            edicao_livro = '$edicao_livro',
            localidade_livro = '$localidade_livro',
            ano_livro = '$ano_livro'
            
            WHERE id_livro = $id_livro";
            
            $resultado = $conn->query($sql);

            if ($resultado){
                alert("Edição concluida com sucesso !");
                redirect('?page=livro-listar');
            } else {
                alert("Erro ao editar !");
                redirect('?page=livro-listar');
            }

    }
?>