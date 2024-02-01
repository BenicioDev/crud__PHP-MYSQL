<?php

    include("config.php");

    
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }


    switch ($_REQUEST['acao']){
        case 'cadastrar':
            //Puxando dados
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_nasc = $_POST['data_nasc'];

            //Jogando no SQL
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn ->query($sql);

            if ($res === TRUE) {
                echo "Registro inserido com sucesso.";
            } else {
                echo "Erro ao inserir registro: " . $conn->error;
            }

            break;
        case 'editar':
            //
            break;
        case 'excluir': 
            //
            break;
    }