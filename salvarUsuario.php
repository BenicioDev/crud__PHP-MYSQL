<?php
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            //Puxando dados
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $dataNascimento = $_POST['dataNascimento'];

            //Jogando no SQL
            $sql = "INSERT INTO usuario (nome, email, senha, dataNascimento) VALUES ('{$nome}', '{$email}', '{$senha}', '{$dataNascimento}')";

            $res = $conn ->query($sql);

            break;
        case 'editar':
            //
            break;
        case 'excluir': 
            //
            break;
    }