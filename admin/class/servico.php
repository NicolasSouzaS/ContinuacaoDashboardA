<?php

    require_once('conexao.php');

    class ServicoClass{

        //ATRIBUTOS
        public $idServico;
        public $iconServico;
        public $tituloBlocoServico;
        public $textoBlocoServico;
        public $linkSaiba;
        public $statusServico;

        //METODOS
        
        public function ListarStatusOn(){

            $query = "SELECT * FROM tblservico WHERE statusServico = 1 ORDER BY tituloBlocoServico ASC";
            $conn = Conexao::abrirConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
        }

    };