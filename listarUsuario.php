<h1>Listar Usuários</h1>
<?php
$sql = "SELECT * FROM usuarios";

//EXECUTA QUERY ACIMA
$res = $conn->query($sql);

// Variável $qtd pega da variável $res a quantidade de linhas.
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover'>";
    print "<tr class='table-dark'>";
    print "<th>#<th>";
    print "<th>Nome<th>";
    print "<th>Email<th>";
    print "<th>Telefone<th>";
    print "<th>Data de nascimento<th>";
    print "<th>Ações<th>";
    print "<tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "<td>";
        print "<td>" . $row->nome . "<td>";
        print "<td>" . $row->email . "<td>";
        print "<td>" . $row->telefone . "<td>";
        print "<td>" . $row->data_nasc . "<td>";
        print "<td>
                    <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-success'> Editar </button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\" class='btn btn-danger'> Excluir </button>
                <td>";
        print "<tr>";
        
    }
} else {
    print "<p class='alert alert-danger'> Não há dados salvos aqui. </p>";

    echo "<button onclick=\"location.href='?page=novo';\" class='btn btn-danger'>Voltar</button>";
}
?>

