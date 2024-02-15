<?php

$arquivoSQL = 'criar_bd.sql'

$comando = "mysql -u root -p < $arquivoSQL";

$output = shell_exec($comando)

if ($output === null) {
    echo "Erro ao executar o script SQL.";
} else {
    echo "Banco de dados criado com sucesso!";
}
?>