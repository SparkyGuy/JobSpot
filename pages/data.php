<?php
include('../config/protect.php');
include('../config/conexao.php');


if (isset($_GET['search'])) {
    $termoDePesquisa = $_GET['search'];


    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'clientes';

    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    $query = "SELECT * FROM clientes";
    $result = $conn->query($query);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dadosExemplo[] = [
                'nome' => $row['nome'],
                'profissao' => $row['profissao'],
                'telefone' => $row['telefone'],
            ];
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    // Processar e exibir os resultados da pesquisa
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Nome: " . $row['nome-trabalho'] . "</p>";
            echo "<p>Profissão: " . $row['profissao'] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    $conn->close();
}