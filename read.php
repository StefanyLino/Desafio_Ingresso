<?php
include 'conexao.php';

$sql = "SELECT * FROM compradores";
$result = $conn->query($sql); 

if ($result->num_rows > 0) { 
    echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Idade</th><th>Tipo</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) { 
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nome"] . "</td>
                <td>" . $row["idade"] . "</td>
                <td>" . $row["tipo"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; 
    
} else {
    echo "Nenhum usuário encontrado."; 
}
?>