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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="../Styles/homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" >
    <script src="../script/scripts.js" defer></script>
</head>
<body>
    <nav>
        <div >
            <img src="../images/logo.png" class="logo">
        </div>
        <div class="search-container">
		<div class="search_wrap search_wrap_1">
			<div class="search_box">
				<input type="text" class="input" placeholder="search...">
				<div class="btn btn_common">
					<i class="fas fa-search"></i>
				</div>
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
<div class="container">
    <div class="outdoor">
        <img src="../images/image-teste.jpg">
</div>
<div class="icones-container">
    <div class="icones">
            <i class="fi fi-rr-car-mechanic"></i>
            <label>Mecânico</label>
    </div>
    <div class="icones">
            <i class="fi fi-rr-key"></i>
            <label>Chaveiro</label>
    </div>
    <div class="icones">
        <i class="fi fi-rs-truck-side"></i>
        <label>Entregador</label>
    </div>
    <div class="icones">
    <i class="fi fi-rr-broom"></i>
    <label>Faxineiro</label>
    </div>
    <div class="icones">
    <i class="fi fi-rr-child-head"></i>
    <label>Babá</label>
    </div>
    <div class="icones">
    <i class="fi fi-rr-gym"></i>
    <label>Personal</label>
    </div>
    <div class="icones">
    <i class="fi fi-rr-block-brick"></i>
    <label>Pedreiro</label>
    </div>
    <div class="icones">
    <i class="fi fi-rs-flower-tulip" ></i>
    <label>Jardineiro</label>
    </div>
    <div class="icones">
    <i class="fi fi-rr-building"></i>
    <label>Porteiro</label>
    </div>
<div class="icones">
    <i class="fi fi-br-scissors"></i>
    <label>Barbeiro</label>
    </div>
    <div class="icones">
    <i class="fi fi-rr-soap"></i>
    <label>Esteticista</label>
    </div>
    <div class="icones">
    <i class="fi fi-rr-paint-roller"></i>
    <label>Pintor</label>
    </div>
</div>
<div class="text-prof">
    <label> Profissionais </label>
</div>
<div class="card-container">
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
        <img src="../images/pedreiro.jpg" alt="" >
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
        <div class="invisivel">
            <h2>João Gomes - Pedreiro</h2>
        </div>
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
                <br>
                <br>
                <hr>
                    <div class="links-container">
                        <h3>Contato</h3>
                        <div class="links">
                            <i class="fa-brands fa-whatsapp fa-2xl" style="color: #6e4474;"></i>
                            <i class="fa-brands fa-instagram fa-2xl"style="color: #6e4474;"></i>
                            <i class="fa-brands fa-linkedin-in fa-2xl" style="color: #6e4474;"></i>
                        </div>
                    </div>
            </div>
            <div class="elemento2">
            <div class="carousel">
                <button class="carousel__prev"><i class="fa-solid fa-angle-left"></i></button>
                <div class="carousel__container">
                  <div class="carousel__slide">
                    <img src="https://dwgyu36up6iuz.cloudfront.net/heru80fdn/image/upload/c_fill,d_placeholder_architecturaldigest.png,fl_progressive,g_face,h_1080,q_80,w_1920/v1645135325/architecturaldigest_on-the-market-inside-a-23-dollars-million-mega-mansion-surrounded-by-a-lake.jpg" alt="Imagem 1">
                  </div>
                  <div class="carousel__slide">
                    <img src="https://image.cnbcfm.com/api/v1/image/107258443-1686936319576-49_DJI_0384.jpg?v=1686943829" alt="Imagem 2">
                  </div>
                  <div class="carousel__slide">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4FKCTb3pDeqvuvHF5lCzI3fblxFznnQZw2WTmVZiKDvu4lMTEYX-jnlmkNWO7qagbqPI&usqp=CAU" alt="Imagem 3">
                  </div>
                  <div class="carousel__slide">
                    <img src="https://s.yimg.com/ny/api/res/1.2/LV7rPUXZEENCVU9hFNBKYA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTM2MA--/https://media.zenfs.com/en/robb_report_967/0b9758bbc869af731f03ce620c7bc5da" alt="Imagem 4">
                  </div>
                  <div class="carousel__slide">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFoqO_oTEB_aL2sOtjyixeWfeZqSB-LNicv5lHdO6ALVam3eJ33tWCbjqkHMksBIEd7ZM&usqp=CAU" alt="Imagem 5">
                  </div>
                </div>
                <button class="carousel__next"><i class="fa-solid fa-angle-left"></i></button>
            </div>
            </div>
      </div>
    </div>
