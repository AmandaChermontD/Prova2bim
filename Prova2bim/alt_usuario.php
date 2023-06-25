<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $dataNascimento = $_POST["data_nascimento"];
    $habilidades = $_POST["habilidades"];
    $causas = $_POST["causas"];
    $disponibilidade = $_POST["disponibilidade"];

    // Realiza o processamento dos dados
    // Aqui você pode escrever o código para atualizar os dados no banco de dados ou fazer qualquer outro processamento necessário

    // Exemplo: exibe os dados atualizados
    echo "<h2>Cadastro atualizado com sucesso!</h2>";
    echo "<h3>Dados do Cadastro:</h3>";
    echo "<p><strong>Nome:</strong> " . $nome . "</p>";
    echo "<p><strong>Endereço:</strong> " . $endereco . "</p>";
    echo "<p><strong>CPF:</strong> " . $cpf . "</p>";
    echo "<p><strong>Telefone:</strong> " . $telefone . "</p>";
    echo "<p><strong>Data de Nascimento:</strong> " . $dataNascimento . "</p>";
    echo "<p><strong>Habilidades:</strong> " . $habilidades . "</p>";
    echo "<p><strong>Causas:</strong> " . $causas . "</p>";
    echo "<p><strong>Disponibilidade:</strong> " . $disponibilidade . "</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alteração de Cadastro</title>
    <style>
        <?php echo file_get_contents('estilos.css'); ?>
        
    </style>
</head>
<body>
    <header>
        <h1>Alteração de Cadastro</h1>
    </header>
    <main>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" required>
            </div>
            <div class="form-group">
                <label for="habilidades">Habilidades:</label>
                <input type="text" name="habilidades" required>
            </div>
            <div class="form-group">
                <label for="causas">Causas:</label>
                <input type="text" name="causas" required>
            </div>
            <div class="form-group">
                <label for="disponibilidade">Disponibilidade:</label>
                <input type="text" name="disponibilidade" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Atualizar Cadastro">
            </div>
        </form>
    </main>
</body>
</html>
