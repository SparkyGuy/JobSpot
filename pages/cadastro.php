<?php
include ('../config/conexao.php');


    if(isset($_POST['submit']))
    {

        include_once('../config/conexao.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($mysqli, "INSERT INTO clientes(nome,sobrenome,email,senha) 
        VALUES ('$nome','$sobrenome','$email','$senha')");

        header('Location: login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styles/cadastro.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>
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
                  window.location.href="login.html";  //link redirecionado
                }
              </script>
              <div class="registrar-botao2">
                              <button type="submit" id="submit" onClick="window.location.href='login.html';" class="learn-more"> <!-- Link Redirecionado -->
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

