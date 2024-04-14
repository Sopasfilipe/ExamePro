<?php
// Configurações de conexão com o banco de dados
$db_file = 'caminho/para/seu/banco_de_questoes.sqlite'; // Caminho para o seu banco de dados SQLite

// Conexão com o banco de dados
$pdo = new PDO('sqlite:' . $db_file);
?>
