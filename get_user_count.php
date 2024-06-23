<?php
// Configurações do banco de dados
$host = "localhost";
$user = "root";
$password = "123456";
$database = "quiz";
$port = 3306; // Porta padrão do MySQL

// Cria a conexão
$conn = new mysqli($host, $user, $password, $database, $port);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Query SQL para contar o número de usuários
$sql = "SELECT COUNT(*) AS total FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['total']; // Retorna o número de usuários cadastrados
} else {
    echo "0"; // Retorna 0 se não houver usuários cadastrados (opcional)
}

$conn->close();
?>
