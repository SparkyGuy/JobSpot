<?php

include('../config/protect.php');
include('../config/conexao.php');

if (isset($_GET['search'])) {
    $termoDePesquisa = $_GET['search'];


    $query = "SELECT * FROM clientes WHERE nome_trabalho LIKE '%$termoDePesquisa%' OR profissao LIKE '%$termoDePesquisa%'";
    $result = $conn->query($query);

    $results = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    }

    // Fecha a conexão com o banco de dados
    $conn->close();

    // Retorna resultados em JSON
    echo json_encode($results);
}
?>
