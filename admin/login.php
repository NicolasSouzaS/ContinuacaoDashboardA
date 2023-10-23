<?php

session_start();
require_once('class/login.php');
if(isset($_POST['email'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    // $senha = password_hash($senha, PASSWORD_DEFAULT);

    $login = new Login();

    $login->emailUsuario = $email;
    $login->senhaUsuario = $senha;
    
    $dadosLogin = $login->VerificarLogin();
    //var_dump($dadosLogin);

    if($dadosLogin == NULL){
        $msgErro = "Erro de tentativa de login. Tente novamente.";   
    }
    else{
        $_SESSION['login'] = $dadosLogin['emailUsuario'];
        $_SESSION['idUser'] = $dadosLogin['idUsuario'];

        header('location:index.php');
        exit();
    }
}

?>


<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<link rel="shortcut icon" href="assets/fav.png">
<title>Login - Ascensão Dev</title>

<style>
    body {
    background: linear-gradient(
      180deg,
      rgba(5, 19, 27, 0.63),
      rgba(5, 19, 27, 0.63)
    ),
    url(./assets/shape-background.svg);
    background-size: 100%;
    margin: 0;
    color:white;
}

    label{
            color:white;
        }

        button {
  width: 10%;
  --primary-color: black;
  --secondary-color: white;
  --hover-color: white;
  --arrow-width: 10px;
  --arrow-stroke: 2px;
  box-sizing: border-box;
  border: 0;
  border-radius: 20px;
  color: var(--secondary-color);
  padding: 1em 1.8em;
  background: var(--primary-color);
  display: flex;
  transition: 0.2s;
  align-items: center;
  gap:1em;
  font-weight: bold;
  font-size:13pt;
}

button .arrow-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}

button .arrow {
  margin-top: 1px;
  width: var(--arrow-width);
  background: var(--primary-color);
  height: var(--arrow-stroke);
  position: relative;
  transition: 0.2s;
}

button .arrow::before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  border: solid white;
  border-width: 0 var(--arrow-stroke) var(--arrow-stroke) 0;
  display: inline-block;
  top: -3px;
  right: 3px;
  transition: 0.2s;
  padding: 3px;
  transform: rotate(-45deg);
}

button:hover {
  background-color: var(--hover-color);
}

button:hover .arrow {
  background: black;
  color:black;
}

button:hover .arrow:before {
  right: 0;
}

.inputContainer {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-bottom:3%;
}

#inputField {
  border: 2px solid white;
  background-color: transparent;
  border-radius: 10px;
  padding: 12px 15px;
  color: black;
  font-weight: 500;
  outline: none;
  caret-color: rgb(155, 78, 255);
  transition-duration: .3s;
  font-family: Whitney, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
}

.userIcon {
  position: absolute;
  fill: rgb(155, 78, 255);
  width: 12px;
  top: -23px;
  left: -15px;
  opacity: 0;
  transition: .2s linear;
}

.usernameLabel {
  position: absolute;
  top: -25px;
  left: 5px;
  color: white;
  font-size: 14px;
  font-weight: 400;
  font-family: Whitney, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
  overflow: hidden;
  transition: .2s linear;
  opacity: 0;
}

#inputField:focus ~ .usernameLabel,
#inputField:valid ~ .usernameLabel {
  transform: translateX(20px);
  opacity: 1;
}

#inputField:focus ~ .userIcon,
#inputField:valid ~ .userIcon {
  transform: translateX(20px);
  opacity: 1;
}

#inputField:focus,
#inputField:valid {
  background-color: white;
  transition-duration: .3s;
}

</style>

<div style="text-align:center; margin-top:7%;" class="container">
    <img style="margin-bottom:3%;" src="./assets/logo.png" alt="">
    <h1>Bem-Vindo Ascensão Dev</h1>
    <h2>Por favor realizar o login</h2>
</div>



<form class="container-sm" action="#" method="POST">
<div class="inputContainer">
        <input required="required" id="inputField" placeholder="Usuário" type="text" name="email">
        <label class="usernameLabel" for="inputField">Usuário</label>
        <svg viewBox="0 0 448 512" class="userIcon"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg>
    </div>
    <div class="inputContainer">
        <input name="senha" required="required" id="inputField" placeholder="Senha" type="password">
        <label class="usernameLabel" for="inputField">Senha</label>
        <svg viewBox="0 0 448 512" class="userIcon"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg>
    </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Manter logado</label>
  </div>

  <button type="submit">
    Login
    <div class="arrow-wrapper">
        <div class="arrow"></div>

    </div>
</button>

</form>


<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>