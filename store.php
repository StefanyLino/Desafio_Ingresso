<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nome = $_POST['nome']; 
    $idade = $_POST['idade']; 
    $tipo = $_POST['tipo'];
    $sql = "INSERT INTO compradores (nome, idade, tipo) VALUES ('$nome', '$idade', '$tipo')"; 

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 
    } else {
        echo "Erro: " . $conn->error; 
    }
}
?>