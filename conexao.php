<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Ingressos";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn -> connect_error){
        echo "Erro de Conexão" . $conn->connect_error;
    }
?>