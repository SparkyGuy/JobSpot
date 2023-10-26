<?php
include('../config/conexao.php');
if(isset($_POST['email']) || isset($_POST['senha'])) {

  if(strlen($_POST['email']) == 0) {
      echo "Preencha seu e-mail";
  } else if(strlen($_POST['senha']) == 0) {
      echo "Preencha sua senha";
  } else {
      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['senha']);
      $sql_code = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ".$mysqli->error);
      $quantidade = $sql_query->num_rows;
      if($quantidade == 1) { 
          $usuario = $sql_query->fetch_assoc();
          if(!isset($_SESSION)) {
              session_start();
          }
          $_SESSION['id'] = $usuario['id'];
          $_SESSION['nome'] = $usuario['nome'];
          header("Location: homepage.php");    // redirecionar pra homepage :)
      } else {
          echo "Falha ao logar! E-mail ou senha incorretos";
      }

  }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styles/login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<nav>
  
       <!--  <div class="btn">
            <button href="#" onClick="window.location.href='cadastro.php'" class="cadastro">Cadastro</button>
        </div> -->
    </nav>
    <div class="container">
        <div class="componente2">
            <div class="home-text">
              <h1>BEM VINDO AO JOBSPOT</h1>
            </div>
            <div class="subtext"> 
              <h1>Encontrar profissionais locais nunca foi tão fácil!</h1>
            </div>
          <div class="image-login">
            
          </div>
        </div>
        <div class="componente">
            <div class="quadrado">
                <div class="texto">
                  <div class="meio">
                    <form action="" method="POST">
                        <label class="login-text"> Login </label>
                        </div>
                          <div class="texto">
                            <MdOutlineMail/>
                          <input type="text" class="email" name="email" placeholder='E-mail:'></input>
                          </div>
                          <div class="texto">
                          <div class="lock-icon">
                          <BiLockAlt/> 
                          <input type="password" name="senha" class="password" placeholder='Senha:'></input>
                          </div>
                          </div> 
                        </div>
                        <script>
                          function redirect() {
                            window.location.href="cadastro.html";  //link redirecionado  onClick="window.location.href='cadastro.html';"
                          }
                        </script>
                        <div class="registrar-botao">
                          <button type="submit" class="learn-more">
                            <span aria-hidden="true" class="circle">
                            <span class="icon arrow"></span>
                            </span>
                            
                            <span class="button-text">Login</span>
                          </button>
                    </form>
                </div>
            </div>
          </div>
        </div>
</body>
</html>

