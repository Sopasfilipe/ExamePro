<?php
// Inclua o arquivo de conexão
include 'conexao.php';

// Consulta para recuperar a primeira questão do banco de dados
$stmt = $pdo->query('SELECT * FROM questoes LIMIT 1');
$questao = $stmt->fetch(PDO::FETCH_ASSOC);

// Exibe a questão na página
echo '<h2>Questão</h2>';
echo '<p>Ano: ' . $questao['ano'] . '</p>';
echo '<p>Tema: ' . $questao['tema'] . '</p>';
echo '<p>Questão: ' . $questao['questao'] . '</p>';
echo '<p>Hipótese A: ' . $questao['hipotese_a'] . '</p>';
echo '<p>Hipótese B: ' . $questao['hipotese_b'] . '</p>';
echo '<p>Hipótese C: ' . $questao['hipotese_c'] . '</p>';
echo '<p>Hipótese D: ' . $questao['hipotese_d'] . '</p>';
echo '<p>Hipótese Correta: ' . $questao['hipotese_correta'] . '</p>';
echo '<p>Justificação: ' . $questao['justificacao'] . '</p>';
?>
