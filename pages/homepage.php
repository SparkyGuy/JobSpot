<?php

include('../config/protect.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <script src="https://kit.fontawesome.com/dacd2c67db.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../Styles/homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="../script/scripts.js" defer></script>
</head>
<body>
    <nav>
        <div >
            <img src="../images/logo-vector.svg" class="logo">
        </div>
        <div class="links">
            <ul class="nav-itens">
               <li><a href="#">Home</a></li>
               <li><a href="#">About us</a></li>
               <li><a href="#">Preços</a></li>
               <li><a href="#">Suporte</a></li>
            </ul>
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

    <div class="product-card">
    <img src="../images/pedreiro.jpg" alt="">
    <h4>João Gomes</h4>
    <hr>
    <br>
    <h5>Pedreiro</h5>
        <h6>(16)99119-0088</h6>
    
    <div>
        <span>$299</span>
        <button id="open-modal">+</button>
    </div>
    
</div>
<div class="product-card">
    <img src="../images/pedreiro.jpg" alt="">
    <h4>João Gomes</h4>
    <hr>
    <br>
    <h5>Pedreiro</h5>
        <h6>(16)99119-0088</h6>
    
    <div>
        <span>$299</span>
        <button id="open-modal">+</button>
    </div>
    
</div>

<script>
    const profilePicButton = document.querySelector('.profile-pic');
    const tooltip = document.getElementById('tooltip');

    profilePicButton.addEventListener('mouseover', () => {
        tooltip.style.display = 'block';
    });

    profilePicButton.addEventListener('mouseout', () => {
        tooltip.style.display = 'none';
    });

    const plusButton = document.querySelector('.plus-button');
    const tooltipPlus = document.getElementById('tooltip-plus');

    plusButton.addEventListener('mouseover', () => {
        tooltipPlus.style.display = 'block';
    });

    plusButton.addEventListener('mouseout', () => {
        tooltipPlus.style.display = 'none';
    });
</script>

<div id="fade" class="hide"></div>
    <div id="modal" class="hide">
      <div class="modal-header">
        <h2 class="invisivel">Este é o Modal</h2>
        <button id="close-modal">
        <i class="fa-sharp fa-regular fa-circle-xmark fa-2xl"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="cointainer">
            <div class="elemento1">
                <div class="profile-pic-modal">
                    <img src="../images/pedreiro.jpg" alt="">
                </div>
                <h4>João Gomes</h4>
                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                </h2>
                <h3>Contato</h3>
                <div class="links">
                    <i class="fa-brands fa-whatsapp fa-lg"></i>
                </div>
            </div>
            <div class="elemento2">
            </div>
      </div>
    </div>
