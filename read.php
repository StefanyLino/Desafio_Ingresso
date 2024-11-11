<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabela.css">
    <title>Tabela</title>
</head>
<body>
<?php
include 'conexao.php';

$sql = "SELECT * FROM compradores";
$result = $conn->query($sql); 

if ($result->num_rows > 0) { 
    echo "<table><tr><th>ID</th><th>Nome</th><th>Idade</th><th>Tipo</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) { 
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nome"] . "</td>
                <td>" . $row["idade"] . "</td>
                <td>" . $row["tipo"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "' class='update'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "' class='delete'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; 
} else {
    echo "<div class='no-data'>Nenhum usuário encontrado.</div>"; 
}
?>

</body>
</html>