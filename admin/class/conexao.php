<?php

 class Conexao{

    public static function abrirConexao(){
     
        // $conn = new PDO('mysql:dbname=dbascensao;host=localhost', 'root', '');
        $conn = new PDO('mysql:dbname=u283879542_ascensaodev;host=smpsistema.com.br', 'u283879542_ascensaodev', 'SenacAgencia04');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;

    }

   

 }