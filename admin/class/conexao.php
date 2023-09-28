<?php

 class Conexao{

    public static function abrirConexao(){
     
        $conn = new PDO('mysql:dbname=dbascensao;host=localhost', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;

    }

   

 }