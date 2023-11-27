<?php
include('../config/protect.php');
include('../config/conexao.php');

$id_profissional = $_GET['id'];


$dbUser = 'root';
$dbPassword = '';
$dbName = 'clientes';
$dbHost = 'localhost';

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
} 

$query = "SELECT * FROM clientes WHERE id = $id_profissional";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>




<head>
    <script src="https://kit.fontawesome.com/dacd2c67db.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="..//images/favicon.ico">
    <title><?php echo $row["nome"]?>  <?php echo $row['sobrenome']?></title>
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
    <link rel="stylesheet" href="../Styles/detalhes.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" >
    <script src="../script/carousel.js" defer></script>
</head>
<link rel="stylesheet" href="../Styles/detalhes.css">

<body>
<nav>
        <div >
            <div class="logo">
                <h1>JobSpot</h1>
            </div>
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
        <div class="nav-items-container">
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
        <br><br>
    <div class="detalhes-container">
        <div class="detalhes-elemento">
            <div class="foto-perfil">
                    <div class="nome-sobrenome">
                        <h1><?php echo $row['nome']?> <?php echo $row['sobrenome']?> </h1>
                    </div>
                    <img src="<?php echo $row['foto-perfil']?>"> 
            </div>
             <div class="descricao-trabalho">
                 <div class="texto-descricao">
                    <h5><?php echo $row['descricao']; ?>
                    </h5>
             </div>
        </div>
    </div>
    </div>
 </div>
    <div class="detalhes-container2">
    <section class="wrapper">
      <i class="fa-solid fa-arrow-left button" id="prev"></i>
      <div class="image-container">
        <div class="carousel">
          <img src="<?php echo $row["image1"] ?>">
          <img src="<?php echo $row["image2"] ?>">
          <img src="<?php echo $row["image3"] ?>">
          <img src="<?php echo $row["image4"] ?>">
        </div>
        <i class="fa-solid fa-arrow-right button" id="next"></i>
    </div>
    </section>
    <div class="links-container">
    <h5> Contato </h5>
    </div>
    <div class="icon-container">
        <div class='icon'>  
            <i class="fa-brands fa-linkedin-in fa-2xl" style="color: #6e4474;"></i>
        </div>
        <div class='icon'>  
        <a href="<?php echo $row["whatsapp"]?>"> <i class="fa-brands fa-whatsapp fa-2xl" style="color: #6e4474;"></i> </a>
        </div>
        <div class='icon'>  
        <a href="<?php echo $row["instagram"]?>" ><i class="fa-brands fa-instagram fa-2xl"style="color: #6e4474;"></i> </a>
        </div>
    </div>
    </div>
    </body>
  <?php  }
} else {
    echo "Nenhum resultado encontrado.";
}

?>