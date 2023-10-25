<?php


  session_start();

  if(!isset($_SESSION['login'])){
    header("Location:login.php");
  }

  require_once('class/login.php');
  $usuario = new Login();
  $usuario->idUsuario = $_SESSION['idUser'];
  $usuario->nomeUsuario = $_SESSION['nomeUser'];
  $usuario->fotoUsuario = $_SESSION['fotoUser'];
  // $usuario->senhaUsuario = $_SESSION['senhaUser'];
  // $usuario->emailUsuario = $_SESSION['login'];
  $dadosLogin = $usuario->VerificarLogin();
  // var_dump($usuario);

  
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Ascensão Dev</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="assets/fav.png">
</head>
<body>
  <header>
    <nav style="background-color: #171717 !important;" class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="assets/logo.png" alt=""></a>
        <div class="navPerfil">

          <img style="width:15%;" id="iconPessoa" src="../img/fotoUsuario/<?php echo $usuario->fotoUsuario; ?>" alt="">
          <h2 id="nomePessoa"><?php echo $usuario->nomeUsuario; ?></h2>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section style="display: flex;" class="container-fluid">
      <div class="selecaoElementos">
      <div style="display: flex; cursor: pointer;" class="container-fluid">
          <ion-icon style="font-size: 20pt; margin-right: 5px; margin-top: 23px;" name="log-in-outline"></ion-icon>
          <a style="text-decoration: none; color: white;" href="index.php?p=login"><h2 style="margin-top: 20px;">Login</h2></a>
        </div>
      <div style="display: flex; cursor: pointer;" class="container-fluid">
          <ion-icon style="font-size: 20pt; margin-right: 5px; margin-top: 23px;" name="logo-html5"></ion-icon>
          <a style="text-decoration: none; color: white;" href="index.php?p=site"><h2 style="margin-top: 20px;">Site</h2></a>
        </div>
        <div style="display: flex; cursor: pointer;" class="container-fluid">
          <ion-icon style="font-size: 20pt; margin-right: 5px; margin-top: 23px;" name="copy-outline"></ion-icon>
          <a style="text-decoration: none; color: white;" href="index.php?p=blog"><h2 style="margin-top: 20px;">Blog</h2></a>
        </div>
        <div style="display: flex; margin-top: 23px; cursor: pointer;" class="container-fluid">
          <ion-icon style="font-size: 20pt; margin-right: 5px;" name="construct-outline"></ion-icon>
          <a style="text-decoration: none; color: white;" href="index.php?p=servico"><h2 style="font-size: 15pt;">Serviços</h2></a>
        </div>
        <div style="display: flex; margin-top: 23px; cursor: pointer;" class="container-fluid">
          <ion-icon style="font-size: 20pt; margin-right: 5px;" name="albums-outline"></ion-icon>
          <a style="text-decoration: none; color: white;" href="index.php?p=portfolio"><h2 style="font-size: 15pt;">Portfólio</h2></a>
        </div>
        <div style="display: flex; margin-top: 23px; cursor: pointer;" class="container-fluid">
          <ion-icon style="font-size: 20pt; margin-right: 5px;" name="star-outline"></ion-icon>
          <a style="text-decoration: none; color: white;" href="index.php?p=avaliacoes"><h2 style="font-size: 15pt;">Avaliações</h2></a>
        </div>
      </div>
      <div class="container-fluid conteudo-principal">

      <?php

        $pagina = @$_GET['p'];
        
        switch ($pagina) {
          case 'servico':
            require_once('servico/servico.php');
            break;
          case 'avaliacoes':
          require_once('avaliacoes/avaliacoes.php');
          break;
          case 'blog':
            require_once('blog/blog.php');
            break;
          case 'portfolio':
            require_once('portfolio/portfolio.php');
            break;
          case 'login':
            require_once('login/login.php');
            break;
          case 'site':
            require_once('site/site.php');
          break;
          case 'insertServico':
            require_once('servico/inserir.php');
          break;
          case 'insertBlog':
            require_once('blog/inserir.php');
          break;
          case 'insertProjeto':
            require_once('portfolio/inserir.php');
          break;
          case 'servicoAtualizar':
            require_once('servico/atualizar.php');
          break;
          case 'projetoAtualizar':
            require_once('portfolio/atualizar.php');
          break;
          case 'servicoDesativar':
            require_once('servico/desativar.php');
          break;
          case 'projetoDesativar':
            require_once('portfolio/desativar.php');
          break;
          default:
          echo'<h1>DASHBOARD</h1>';
          break;
         
        }
      ?>
      </div>
    </section>
  </main>

  <script src="js/bootstrap.min.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script src="js/script.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

</body>

</html>