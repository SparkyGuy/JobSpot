<?php
include('../config/protect.php');
include('../config/conexao.php');
?>


<head>
    
    <script src="https://kit.fontawesome.com/dacd2c67db.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&family=PT+Sans+Narrow&family=Raleway:wght@300;700&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&family=PT+Sans+Narrow&family=Raleway:wght@300;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&family=PT+Sans+Narrow&family=Raleway:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&family=PT+Sans+Narrow&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="../Styles/resultado.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" >
    <script src="../script/teste.js" defer></script>
</head>
<body>
    <nav>
        <div >
            <img src="../images/logo.png" class="logo">
        </div>
        <div class="search-container">
		<div class="search_wrap search_wrap_1">
			<div class="search_box">
            <form action="resultados.php" method="GET">
				<input type="text" name="search" class="input" placeholder="Pesquisar por Profissão">
                <button class="btn btn_common" id="searchButton" type="submit"><i class="fas fa-search"></i></button>
				</div>
			    </div>
            </form>
		</div>
        </div>
        <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Detalhes do Cliente</h2>
        <div id="modalData">
        <?php echo $_SESSION['nome']; ?>
        <?php echo $row['profissao']; ?>
       
            <!-- Dados do banco de dados serão inseridos aqui -->
        </div>
    </div>
</div>
        <div class="btn">
            <button href="#" class="plus-button">
            <div id="tooltip-plus" class="hidden">
    <span id="tooltipTextPlus">Adicionar Profissão</span>
</div>
            <i class="fa-solid fa-plus" style="color: #6e4474; font-size: 20px;"></i>
            </button>
            <button href="#" class="profile-pic">
            <div id="tooltip" class="hidden">
                <span id="tooltipText"><?php echo $_SESSION['nome']; ?></span>
            </div>
            <i class="fa-regular fa-user" style="color: #6e4474; font-size: 20px;"></i>
            </button>
        </div>
    </nav>
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

        $resultados_por_pagina = 12;
        $pagina_atual = isset($_GET["page"]) ? $_GET["page"] : 1;
        $offset = ($pagina_atual - 1) * $resultados_por_pagina;

        $sql = "SELECT * FROM clientes WHERE profissao LIKE '%$search%' LIMIT $resultados_por_pagina OFFSET $offset";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        ?>

                <h5>Exibindo resultados para <?php echo $search; ?></h5>
             
            <br>
            <div class="product-card-container">
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="product-card" id="open-modal" >
                        <img src="../images/pedreiro.jpg" alt="">
                        <h4><?php echo $row["nome"]; ?></h4>
                        <hr>
                        <br>
                        <h5><?php echo $row["profissao"]; ?></h5>
                        <!--  <h6><?php echo $row["telefone"]; ?></h6> -->
                        <div>
                            <button id="open-modal">+</button>
                        </div>
                </div>

            <?php
            }
        } else {
            ?>
            <div class="no-result-container">
                    <h1 class="no-result">Nenhum resultado encontrado para a profissão: <?php echo $search;?></h1>
                    <div class="no-result-image">
                        <img src="https://media.discordapp.net/attachments/1154149439812939940/1177300191045505044/Questions.gif?ex=6572013e&is=655f8c3e&hm=326f6255ba5617da9af55e7e4fbc79e05a42405fd373f609d8ae161383c12318&=">
                    </div>
                </div>
        <?php
        }

        $conn->close();
    } else {
        echo "Nenhum termo de pesquisa fornecido.";
    }
    ?>

    <!-- Exibindo links de páginação -->
    </div>
    <div class="pagination">
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

            $resultados_por_pagina = 12;
            $sql = "SELECT COUNT(*) AS total FROM clientes WHERE profissao LIKE '%$search'";
            $result = $conn->query($sql);
            $total_resultados = $result->fetch_assoc()["total"];
            $total_paginas = ceil($total_resultados / $resultados_por_pagina);

            if ($pagina_atual > 1) {
                $pagina_anterior = $pagina_atual - 1;?>
                <div class="links-paginacao"><?php
                echo '<a href="resultados.php?search=' . $search . '&page=' . $pagina_anterior . '">&lt; Página Anterior</a>';
            }
        
            if ($pagina_atual < $total_paginas) {
                $pagina_seguinte = $pagina_atual + 1;
                echo '<a href="resultados.php?search=' . $search . '&page=' . $pagina_seguinte . '"->Próxima Página &gt;</a>';
            }?>
            <?php
            $conn->close();
        } else {
            echo "Nenhum resultado encontrado para a profissão: " . $search;
        }
        ?>
        </div>
    </div>
    <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Detalhes do Cliente</h2>
        <div id="modalData">
            <!-- Dados do banco de dados serão inseridos aqui -->
        </div>
    </div>
</div>
</body>

</html>
