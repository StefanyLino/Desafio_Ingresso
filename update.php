<?php
include 'conexao.php'; 

if (isset($_GET['id'])) { 
    $id = $_GET['id']; 
    $sql = "SELECT * FROM compradores WHERE id=$id"; 
    $result = $conn->query($sql); 
    $usuario = $result->fetch_assoc(); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome']; 
    $idade = $_POST['idade']; 
    $tipo = $_POST['tipo']; 
    $sql = "UPDATE compradores SET nome='$nome', idade='$idade', tipo='$tipo' WHERE id=$id"; 

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 
    } else {
        echo "Erro: " . $conn->error; 
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Comprador</title>
</head>
<body>
    <h1>COMPRADORES</h1>
    <form action="" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>
        <label>Idade:</label>
        <input type="number" name="idade" value="<?php echo $usuario['idade']; ?>" required>
        <label>Tipo:</label>
        <input type="text" name="tipo" value="<?php echo $usuario['tipo']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php">Cancelar</a> 
</body>

</html> 