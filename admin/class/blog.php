<?php

    require_once('conexao.php');

    class BlogClass{

        public $idBlog;
        public $tituloCaixa;
        public $msgCaixa;
        public $linkVeja;
        public $statusBlog;

        public function ListarBlog(){
            $query = "SELECT * FROM tblblog WHERE statusBlog = 1 ORDER BY tituloCaixa ASC;";
            $conn = Conexao::abrirConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    };