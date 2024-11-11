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
    <link rel="stylesheet" href="update.css">
    <title>Atualizar Comprador</title>
</head>
<body>
    <div class="tudo">
        <h1>COMPRADORES</h1>
        <div class="adicionar">
            <form action="" method="POST">
                <div class="c">
                    <label>Nome:</label>
                    <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>
                    <label>Idade:</label>
                    <input type="number" name="idade" value="<?php echo $usuario['idade']; ?>" required>
                    <label>Tipo:</label>
                    <input type="text" name="tipo" value="<?php echo $usuario['tipo']; ?>" required>
                    <div class="botao">
                        <input type="submit" value="Atualizar">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="cancelar">
        <a href="index.php">CANCELAR</a>
    </div> 
</body>

</html> 