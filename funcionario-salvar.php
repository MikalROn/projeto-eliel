<?php
    $acao = @$_REQUEST['acao'];
    switch ($acao) {
        case 'cadastrar':
            $nome_funcionario = @$_REQUEST['nome_funcionario'];
            $cpf_funcionario = @$_REQUEST['cpf_funcionario'];
            $email_funcionario = @$_REQUEST['email_funcionario'];
            $fone_funcionario = @$_REQUEST['fone_funcionario'];

            $sql = "INSERT INTO funcionario (nome_funcionario, cpf_funcionario, email_funcionario, fone_funcionario) 
            VALUES ('$nome_funcionario', '$cpf_funcionario', '$email_funcionario', '$fone_funcionario')";

            $resultado = $conn->query($sql);

            if($resultado){
                alert("Cadastrado com sucesso !");
                redirect('?page=funcionario-listar');
            } else{
                alert("Erro ao cadastrar. ");
                redirect('?page=funcionario-listar');
             }
           break;

        case 'remover':
            $id = @$_REQUEST['id'];
            $sql = "DELETE FROM funcionario WHERE id_funcionario = $id";
            $resultado = $conn->query($sql);

            if ($resultado){
                alert("Removida com sucesso ! ");
                redirect('?page=funcionario-listar');
            } else {
                alert("Erro ao remover ");
                redirect('?page=funcionario-listar');
            }
            break;

        case 'editar':
            $id_funcionario = @$_REQUEST['id_funcionario'];
            $nome_funcionario = @$_REQUEST['nome_funcionario'];
            $cpf_funcionario = @$_REQUEST['cpf_funcionario'];
            $email_funcionario = @$_REQUEST['email_funcionario'];
            $fone_funcionario = @$_REQUEST['fone_funcionario'];
            
            $sql = "UPDATE funcionario SET
            nome_funcionario ='$nome_funcionario',
            cpf_funcionario= '$cpf_funcionario',
            email_funcionario = '$email_funcionario',
            fone_funcionario = '$fone_funcionario' WHERE id_funcionario = '$id_funcionario'";
            
            $resultado = $conn->query($sql);

            if ($resultado){
                alert("Edição concluida com sucesso !");
                redirect('?page=funcionario-listar');
            } else {
                alert("Erro ao editar !");
                redirect('?page=funcionario-listar');
            }

    }
?>