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
            $telefone = $_POST['telefone'];
            $senha = md5($_POST['senha']);
            $data_nasc = $_POST['data_nasc'];

            //Jogando no SQL
            $sql = "INSERT INTO usuarios (nome, email, telefone, senha, data_nasc) 
            VALUES ('{$nome}', '{$email}', '{$telefone}', '{$senha}', '{$data_nasc}')";

            $res = $conn ->query($sql);

            if ($res === TRUE) {
                print"<script>alert('Cadastro realizado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            } else {
                echo "Erro ao inserir registro: " . $conn->error;
                print"<script>location.href='?page=listar';</script>";

            }

            break;

        case 'editar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $senha = md5($_POST['senha']);
            $data_nasc = $_POST['data_nasc'];

            $sql = "UPDATE usuarios SET nome='{$nome}', 
            email='{$email}', 
            telefone='{$telefone}', 
            senha='{$senha}',
            data_nasc='{$data_nasc}' WHERE id=".$_REQUEST["id"];

            $res = $conn ->query($sql);

            if ($res === TRUE) {
                print"<script>alert('Editado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            } else {
                echo "Erro ao editar registro: " . $conn->error;
                print"<script>location.href='?page=listar';</script>";

            }
            break;

        case 'excluir': 
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST['id'];

            $res = $conn ->query($sql);

            if ($res === TRUE) {
                print"<script>alert('Excluido com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            } else {
                echo "Erro ao excluir: " . $conn->error;
                print"<script>location.href='?page=listar';</script>";

            }


            break;
    }