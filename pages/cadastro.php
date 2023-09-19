<?php
        include_once('../config/conexao.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $senha = $_POST['senha']; // Criptografa a senha
        
            // Inserir os dados no banco de dados
            $sql = "INSERT INTO clientes (nome, sobrenome, email, senha) VALUES (?, ?, ?, ?)";
            $stmt = $mysqli->prepare($sql);
            
            if ($stmt) {
                $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha);
                if ($stmt->execute()) {
         
                } else {
                    header('Location: login.php');
                }
                $stmt->close();
            } else {
                echo "Erro na preparação da declaração: " . $mysqli->error;
            }
        }
        
        $mysqli->close();
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styles/cadastro.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>
<nav>
        <div class="logo">GabiCode</div>
        <div class="links">
            <ul class="nav-itens">
               <li><a href="#">Home</a></li>
               <li><a href="#">About us</a></li>
               <li><a href="#">Preços</a></li>
               <li><a href="#">Suporte</a></li>
            </ul>
        </div>
            <button href="#" onClick="window.location.href='login.php'" class="cadastro" >Login</button>
        </div>

    </nav>

     <div class="container">
      <div class="componente2">
      </div>
      <div class="componente">
          <div class="quadrado2">

              <div class="texto">
                <div class="meio">
                <form action="cadastro.php" method="POST">
              <label class="text-cadastro">Cadastro</label>
              </div>
              <div class="input1">
                <MdOutlinePerson/>
                <input type="text" id="nome" name="nome" class="name" placeholder='Nome:' required></input>
              </div>
              <div class="input1">
                <BiPencil/>
                <input type="text" id="sobrenome" name="sobrenome" class="surname" placeholder='Sobrenome:' required></input>
              </div>
                <div class="texto">
                  <MdOutlineMail/>
                <input type="text" id="email" name="email" class="email" placeholder='E-mail:' required></input>
                </div>
                <div class="texto">
                  <BiLockAlt/>
                <input type="password" id="senha" name="senha" class="password" placeholder='Senha:' required></input>
                </div> 
              </div>
              <script>
                function redirect() {
                  window.location.href="login.php"; 
                }
              </script>
              <div class="registrar-botao2">
                              <button type="submit" id="submit" onClick="window.location.href='login.php'" class="learn-more"> <!-- Link Redirecionado -->
                  <span aria-hidden="true" class="circle">
                  <span class="icon arrow"></span>
                  </span>
                  <span class="button-text2">registrar</span>
                </button>
              </div>
          </div>
        </div>
      </div>
</body>
</html>

