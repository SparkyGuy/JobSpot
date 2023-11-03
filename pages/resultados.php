<!DOCTYPE html>
<html>
<head>
    <title>Resultados da Pesquisa</title>
</head>
<body>
    <h1>Resultados da Pesquisa</h1>
    
    <?php
    if (isset($_GET["search"])) {
        $search = $_GET["search"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "clientes";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM clientes WHERE profissao LIKE '%$search%'";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["nome"] . " - " . $row["profissao"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Nenhum resultado encontrado para a profissão: " . $search;
        }

        $conn->close();
    } else {
        echo "Nenhum termo de pesquisa fornecido.";
    }
    ?>

    <a href="homepage.php">Nova Pesquisa</a>
</body>
</html>
