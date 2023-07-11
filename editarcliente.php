<?php
session_start();
include('protect.php');
// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    // Redireciona para a página de login ou exibe uma mensagem informando que o usuário precisa estar logado
    header('Location: logincliente.php');
    exit;
}

// Processa o formulário de edição quando enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera os dados enviados pelo formulário
    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];

    // Valide e sanitize os dados conforme necessário

    // Atualiza as informações na sessão
    $_SESSION['nome'] = $nome;
    $_SESSION['cep'] = $cep;
    $_SESSION['estado'] = $estado;
    $_SESSION['bairro'] = $bairro;

    // Redireciona para a página de visualização ou exibe uma mensagem de sucesso
    header('Location: telaCliente.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Informações</title>
</head>
<body>
    <section class="area-cadastro">
        <div class="cadastro">
            <div>
                <!-- Conteúdo adicional aqui, se necessário -->
            </div>

            <form class="poslogin" method="POST" action="editarcliente.php">
                <h3>Suas informações</h3>
                <br>
                <label>Nome:</label>
                <input type="text" name="nome" value="<?php echo $_SESSION['nome']; ?>">
                <br>
                <label>CEP:</label>
                <input type="text" name="cep" value="<?php echo $_SESSION['cep']; ?>">
                <br>
                <label>Estado:</label>
                <input type="text" name="estado" value="<?php echo $_SESSION['estado']; ?>">
                <br>
                <label>Bairro:</label>
                <input type="text" name="bairro" value="<?php echo $_SESSION['bairro']; ?>">
                <br>
                <input type="submit" value="Salvar">
            </form>
        </div>
    </section>
</body>
</html>