<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciamento</title>
</head>
<body>
<h1>GERENCIAMENTO DE COMPRADORES</h1>
<div class="adicionar">
    <form action="store.php" method="POST">
        <div class="c">
            <div class="nome">
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Digite aqui..." required>
            </div>
            <div class="idade">
                <label>Idade:</label>
                <input type="number" name="idade" placeholder="Digite aqui..." required>
            </div>
            <div class="tipo">
                <label>Tipo:</label>
                <select name="tipo" id="ingresso" required>
                    <option value="VIP">VIP</option>
                    <option value="Regular">Regular</option>
                    <option value="Basico">Básico</option>
                </select>
            </div>
            <div class="botao">
                <input type="submit" value="Adicionar Usuário">
            </div>
        </div>
    </form>
</div>
    <hr>
    <h2>INFORMAÇÕES</h2>
    <div>
        <?php include 'read.php'
        ?>
    </div>
</body>
</html>

