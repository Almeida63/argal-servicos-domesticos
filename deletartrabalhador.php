<?php

session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header("Location: logintrabalhador.php");
    exit;
}

// Configurações de conexão com o banco de dados
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'cadastro';

// Cria a conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Obtém o ID do usuário logado
$id = $_SESSION['id']['id'];

// Exclui a conta do usuário
$sql = "DELETE FROM trabalhador WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

// Verifica se a exclusão foi bem-sucedida
if ($result) {
    if (mysqli_affected_rows($conn) > 0) {
        // A exclusão foi realizada com sucesso
        // Destrua a sessão e redirecione para a página de login
        session_destroy();
        header("Location: logintrabalhador.php");
        exit;
    } else {
        echo "Falha ao excluir a conta.";
    }
} else {
    echo "Erro na consulta ao banco de dados: " . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);

?>
