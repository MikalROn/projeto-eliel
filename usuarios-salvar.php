<?php
    $acao = @$_REQUEST['acao'];
    switch ($acao) {
        case 'cadastrar':
            $nome_usuario = @$_REQUEST['nome_usuario'];
            $cpf_usuario = @$_REQUEST['cpf_usuario'];
            $email_usuario = @$_REQUEST['email_usuario'];
            $data_nasc_usuario = @$_REQUEST['data_nasc_usuario'];
            $fone_usuario = @$_REQUEST['fone_usuario'];

            $sql = "INSERT INTO usuario (nome_usuario, cpf_usuario, email_usuario, fone_usuario, data_nasc_usuario) 
            VALUES ('$nome_usuario', '$cpf_usuario', '$email_usuario', '$fone_usuario', '$data_nasc_usuario' )";

            $resultado = $conn->query($sql);

            if($resultado){
                alert("Cadastrado com sucesso !");
                redirect('?page=usuario-listar');
            } else{
                alert("Erro ao cadastrar. ");
                redirect('?page=usuario-listar');
             }
           break;

        case 'remover':
            $id = @$_REQUEST['id'];
            $sql = "DELETE FROM usuario WHERE id_usuario = $id";
            $resultado = $conn->query($sql);

            if ($resultado){
                alert("Removida com sucesso ! ");
                redirect('?page=usuario-listar');
            } else {
                alert("Erro ao remover ");
                redirect('?page=usuario-listar');
            }
            break;

        case 'editar':
            $id_usuario = @$_REQUEST['id_usuario'];
            $nome_usuario = @$_REQUEST['nome_usuario'];
            $cpf_usuario = @$_REQUEST['cpf_usuario'];
            $email_usuario = @$_REQUEST['email_usuario'];
            $data_nasc_usuario = @$_REQUEST['data_nasc_usuario'];
            $fone_usuario = @$_REQUEST['fone_usuario'];
            
            $sql = "UPDATE usuario SET nome_usuario ='$nome_usuario',
            cpf_usuario = '$cpf_usuario',
            email_usuario = '$email_usuario',
            data_nasc_usuario = '$data_nasc_usuario',
            fone_usuario = '$fone_usuario' WHERE id_usuario = '$id_usuario'";
            
            $resultado = $conn->query($sql);

            if ($resultado){
                alert("Edição concluioda com sucesso !");
                redirect('?page=usuario-listar');
            } else {
                alert("Erro ao editar !");
                redirect('?page=usuario-listar');
            }

    }
?>