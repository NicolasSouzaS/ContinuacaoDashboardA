<?php
require_once('admin/class/contato.php');

$contato = new ContatoClass();

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$objetivo = $_POST['objetivo'];

$contato->nomeContato = $nome;
$contato->emailContato = $email;
$contato->telefoneContato = $telefone;
$contato->mensContato = $objetivo;

$contato->InserirContato();

// Redirecionar para uma página de confirmação após a inserção no banco de dados, se necessário
header("Location: pagina_de_confirmacao.php");
?>